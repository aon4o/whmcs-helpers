<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Users extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addUser(
        string $firstname,
        string $lastname,
        string $email,
        string $password2,
        null|string $language = null,
    ): array {
        return self::call('AddUser', self::payload([
            'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'password2' => $password2,
            'language' => $language,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createClientInvite(string $client_id, string $email, string $permissions): array
    {
        return self::call('CreateClientInvite',
            self::payload(['client_id' => $client_id, 'email' => $email, 'permissions' => $permissions]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteUserClient(int $user_id, int $client_id): array
    {
        return self::call('DeleteUserClient', self::payload(['user_id' => $user_id, 'client_id' => $client_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPermissionsList(): array
    {
        return self::call('GetPermissionsList', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getUserPermissions(int $user_id, int $client_id): array
    {
        return self::call('GetUserPermissions', self::payload(['user_id' => $user_id, 'client_id' => $client_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getUsers(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|string $sorting = null,
        null|string $search = null,
    ): array {
        return self::call('GetUsers', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'sorting' => $sorting, 'search' => $search,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function resetPassword(null|int $id = null, null|string $email = null): array
    {
        return self::call('ResetPassword', self::payload(['id' => $id, 'email' => $email]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateUser(
        int $user_id,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $email = null,
        null|string $language = null,
    ): array {
        return self::call('UpdateUser', self::payload([
            'user_id' => $user_id, 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email,
            'language' => $language,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateUserPermissions(int $user_id, int $client_id, string $permissions): array
    {
        return self::call('UpdateUserPermissions',
            self::payload(['user_id' => $user_id, 'client_id' => $client_id, 'permissions' => $permissions]));
    }
}
