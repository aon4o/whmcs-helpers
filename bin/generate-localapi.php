#!/usr/bin/env php
<?php

declare(strict_types=1);

// Generator for LocalAPI category classes and facade based on vendor WHMCS docs

$root = __DIR__ . '/..';
$vendorApiIndex = $root . '/vendor/whmcs/developer-docs/api/api-index.md';
$apiRefDir = $root . '/vendor/whmcs/developer-docs/api-reference';
$srcDir = $root . '/src';
$localApiDir = $srcDir . '/LocalAPI';
$facadeFile = $srcDir . '/LocalAPI.php';

if (! is_file($vendorApiIndex)) {
    fwrite(STDERR, "Cannot find api-index.md at $vendorApiIndex\n");
    exit(1);
}

@mkdir($localApiDir, 0777, true);

$md = file_get_contents($vendorApiIndex);

// Parse categories and links
$categories = [];
$current = null;
foreach (explode("\n", $md) as $line) {
    if (preg_match('/<h3>([^<]+)<\\/h3>/', $line, $m)) {
        $current = trim($m[1]);
        $categories[$current] = [];

        continue;
    }
    if ($current && preg_match('/<a href="\\/api-reference\\/([^\/]+)\\/">([^<]+)<\\/a>/', $line, $m)) {
        $slug = $m[1];
        $action = trim($m[2]);
        $categories[$current][] = ['action' => $action, 'slug' => $slug];
    }
}

function phpType(string $whmcsType): string
{
    $t = strtolower(trim($whmcsType));

    return match ($t) {
        'int','integer' => 'int',
        'string' => 'string',
        'bool','boolean' => 'bool',
        'float','double','decimal','number' => 'float',
        'array' => 'array',
        default => 'string', // default to string if unknown
    };
}

function studly(string $s): string
{
    $s = preg_replace('/[^a-zA-Z0-9]+/', ' ', $s);
    $s = ucwords(strtolower($s));

    return str_replace(' ', '', $s);
}

function stripCategoryPrefix(string $method, string $category): string
{
    // Remove category prefix if present at the start of the action name (case-insensitive)
    if (stripos($method, $category) === 0) {
        return substr($method, strlen($category));
    }
    // Also try a naive singular form (eg. Domains -> Domain, Users -> User, Tickets -> Ticket, Addons -> Addon, Servers -> Server, Products -> Product)
    $singular = rtrim($category, 's');
    if ($singular !== $category && stripos($method, $singular) === 0) {
        return substr($method, strlen($singular));
    }

    return $method;
}

$facadeMethods = [];

foreach ($categories as $category => $actions) {
    if (! $actions) {
        continue;
    }

    $className = studly($category);
    // Special plural adjustments
    if ($className === 'Addons') {
        $className = 'Addons';
    }
    if ($className === 'Users') {
        $className = 'Users';
    }
    if ($className === 'ProjectManagement') {
        $className = 'ProjectManagement';
    }

    $php = [];
    $php[] = '<?php';
    $php[] = '';
    $php[] = 'namespace Aon4o\\WhmcsHelpers\\LocalAPI;';
    $php[] = '';
    $php[] = 'use Aon4o\\WhmcsHelpers\\Interfaces\\LocalAPI;';
    $php[] = '';
    $php[] = "class $className extends LocalAPI";
    $php[] = '{';
    $php[] = '';

    foreach ($actions as $info) {
        $action = $info['action'];
        $slug = $info['slug'];
        $refFile = $apiRefDir . '/' . $slug . '.md';
        if (! is_file($refFile)) {
            // skip if missing
            continue;
        }
        $ref = file_get_contents($refFile);
        // Parse Request Parameters table rows between headings
        $params = [];
        $inTable = false;
        foreach (explode("\n", $ref) as $line) {
            if (! $inTable && preg_match('/^\|\s*Parameter\s*\|\s*Type\s*\|/i', $line)) {
                $inTable = true; // header

                continue;
            }
            if ($inTable) {
                if (! str_starts_with($line, '|')) {
                    break; // end of table
                }
                // skip separator row
                if (preg_match('/^\|\s*-+\s*\|/', $line)) {
                    continue;
                }
                $cols = array_map('trim', explode('|', trim($line, "|\r\n")));
                if (count($cols) < 4) {
                    continue;
                }
                [$pName, $pType, $pDesc, $pReq] = [$cols[0], $cols[1], $cols[2], $cols[3]];
                if (strcasecmp($pName, 'action') === 0) {
                    continue;
                } // exclude action
                $required = stripos($pReq, 'required') !== false;
                $params[] = [
                    'name' => $pName,
                    'type' => phpType($pType),
                    'required' => $required,
                ];
            }
        }

        $methodName = stripCategoryPrefix($action, $category);
        // If becomes empty, keep original
        if ($methodName === '') {
            $methodName = $action;
        }

        // Lowercase first char for method
        $methodName = lcfirst($methodName);

        // Build param signature parts and payload mapping
        $sigParts = [];
        $payloadBuild = [];
        $usedNames = [];
        foreach ($params as $p) {
            $origName = $p['name'];
            $phpType = $p['type'];
            // Normalize variable name to valid PHP identifier
            $base = preg_replace('/[^a-zA-Z0-9_]/', '_', $origName);
            if ($base === '' || ! preg_match('/^[a-zA-Z_]/', $base)) {
                $base = 'param_' . $base;
            }
            // Ensure unique
            $varName = $base;
            $i = 2;
            while (in_array($varName, $usedNames, true)) {
                $varName = $base . '_' . $i;
                $i++;
            }
            $usedNames[] = $varName;
            $var = '$' . $varName;
            if ($p['required']) {
                $sigParts[] = $phpType . ' ' . $var;
            } else {
                $sigParts[] = $phpType . '|null ' . $var . ' = null';
            }
            $payloadBuild[] = "'{$origName}' => {$var}";
        }

        $php[] = '    /**';
        $actionLower = strtolower($action);
        $php[] = "     * @link https://developers.whmcs.com/api-reference/{$actionLower}/";
        $php[] = '     */';

        // Method signature with params each on a new line (if any)
        if (! empty($sigParts)) {
            $php[] = "    public function {$methodName}(";
            foreach ($sigParts as $part) {
                $php[] = '        ' . $part . ',';
            }
            $php[] = '    ): array';
        } else {
            $php[] = "    public function {$methodName}(): array";
        }
        $php[] = '    {';

        // Payload with each key/value on its own line (if any)
        if (! empty($payloadBuild)) {
            $php[] = "        return self::call('{$action}', self::payload([";
            foreach ($payloadBuild as $entry) {
                $php[] = '            ' . $entry . ',';
            }
            $php[] = '        ]));';
        } else {
            $php[] = "        return self::call('{$action}', self::payload([]));";
        }

        $php[] = '    }';
        $php[] = '';
    }

    $php[] = '}';

    file_put_contents($localApiDir . '/' . $className . '.php', implode("\n", $php));

    $facadeMethods[$className] = $category;
}

// Generate facade with static methods
$facade = [];
$facade[] = '<?php';
$facade[] = '';
$facade[] = 'declare(strict_types=1);';
$facade[] = '';
$facade[] = 'namespace Aon4o\\WhmcsHelpers;';
$facade[] = '';
foreach (array_keys($facadeMethods) as $cn) {
    $facade[] = "use Aon4o\\WhmcsHelpers\\LocalAPI\\{$cn};";
}
$facade[] = '';
$facade[] = 'class LocalAPI';
$facade[] = '{';
foreach ($facadeMethods as $className => $categoryLabel) {
    $methodName = lcfirst($className);
    $facade[] = '    /**';
    $facade[] = "     * {$categoryLabel}";
    $facade[] = "     * @return {$className}";
    $facade[] = '     */';
    $facade[] = "    public static function {$methodName}(): {$className}";
    $facade[] = '    {';
    $facade[] = "        return new {$className}();";
    $facade[] = '    }';
    $facade[] = '';
}
$facade[] = '}';

file_put_contents($facadeFile, implode("\n", $facade));

echo "Generated LocalAPI classes and facade.\n";
