<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Authentication extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/createoauthcredential/
     */
    public function createOAuthCredential(
        string $grant_type,
        string $scope,
        null|string $name = null,
        null|int $service_id = null,
        null|string $description = null,
        null|string $logo_uri = null,
        null|string $redirect_uri = null,
    ): array {
        return self::call('CreateOAuthCredential', self::payload([
            'grantType' => $grant_type,
            'scope' => $scope,
            'name' => $name,
            'serviceId' => $service_id,
            'description' => $description,
            'logoUri' => $logo_uri,
            'redirectUri' => $redirect_uri,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/createssotoken/
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
            'client_id' => $client_id,
            'user_id' => $user_id,
            'destination' => $destination,
            'service_id' => $service_id,
            'domain_id' => $domain_id,
            'sso_redirect_path' => $sso_redirect_path,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteoauthcredential/
     */
    public function deleteOAuthCredential(int $credential_id): array
    {
        return self::call('DeleteOAuthCredential', self::payload(['credentialId' => $credential_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/listoauthcredentials/
     */
    public function listOAuthCredentials(
        null|string $grant_type = null,
        null|string $sort_field = null,
        null|string $sort_order = null,
        null|int $limit = null,
    ): array {
        return self::call('ListOAuthCredentials', self::payload([
            'grantType' => $grant_type,
            'sortField' => $sort_field,
            'sortOrder' => $sort_order,
            'limit' => $limit,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updateoauthcredential/
     */
    public function updateOAuthCredential(
        int $credential_id,
        null|string $client_api_identifier = null,
        null|string $name = null,
        null|string $description = null,
        null|string $grant_type = null,
        null|string $scope = null,
        null|int $service_id = null,
        null|string $logo_uri = null,
        null|string $redirect_uri = null,
        null|bool $reset_secret = null,
    ): array {
        return self::call('UpdateOAuthCredential', self::payload([
            'credentialId' => $credential_id,
            'clientApiIdentifier' => $client_api_identifier,
            'name' => $name,
            'description' => $description,
            'grantType' => $grant_type,
            'scope' => $scope,
            'serviceId' => $service_id,
            'logoUri' => $logo_uri,
            'redirectUri' => $redirect_uri,
            'resetSecret' => $reset_secret,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/validatelogin/
     */
    public function validateLogin(
        string $email,
        string $password2,
    ): array {
        return self::call('ValidateLogin', self::payload([
            'email' => $email,
            'password2' => $password2,
        ]));
    }
}
