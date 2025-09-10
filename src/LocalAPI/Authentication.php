<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Authentication extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createOAuthCredential(
        string $grantType,
        string $scope,
        null|string $name = null,
        null|int $serviceId = null,
        null|string $description = null,
        null|string $logoUri = null,
        null|string $redirectUri = null,
    ): array {
        return self::call('CreateOAuthCredential', self::payload([
            'grantType' => $grantType, 'scope' => $scope, 'name' => $name, 'serviceId' => $serviceId,
            'description' => $description, 'logoUri' => $logoUri, 'redirectUri' => $redirectUri,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createSsoToken(
        null|int $client_id = null,
        null|int $user_id = null,
        null|string $destination = null,
        null|int $service_id = null,
        null|int $domain_id = null,
        null|string $sso_redirect_path = null,
    ): array {
        return self::call('CreateSsoToken', self::payload([
            'client_id' => $client_id, 'user_id' => $user_id, 'destination' => $destination,
            'service_id' => $service_id, 'domain_id' => $domain_id, 'sso_redirect_path' => $sso_redirect_path,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteOAuthCredential(int $credentialId): array
    {
        return self::call('DeleteOAuthCredential', self::payload(['credentialId' => $credentialId]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function listOAuthCredentials(
        null|string $grantType = null,
        null|string $sortField = null,
        null|string $sortOrder = null,
        null|int $limit = null,
    ): array {
        return self::call('ListOAuthCredentials', self::payload([
            'grantType' => $grantType, 'sortField' => $sortField, 'sortOrder' => $sortOrder, 'limit' => $limit,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateOAuthCredential(
        int $credentialId,
        null|string $clientApiIdentifier = null,
        null|string $name = null,
        null|string $description = null,
        null|string $grantType = null,
        null|string $scope = null,
        null|int $serviceId = null,
        null|string $logoUri = null,
        null|string $redirectUri = null,
        null|bool $resetSecret = null,
    ): array {
        return self::call('UpdateOAuthCredential', self::payload([
            'credentialId' => $credentialId, 'clientApiIdentifier' => $clientApiIdentifier, 'name' => $name,
            'description' => $description, 'grantType' => $grantType, 'scope' => $scope, 'serviceId' => $serviceId,
            'logoUri' => $logoUri, 'redirectUri' => $redirectUri, 'resetSecret' => $resetSecret,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function validateLogin(string $email, string $password2): array
    {
        return self::call('ValidateLogin', self::payload(['email' => $email, 'password2' => $password2]));
    }
}
