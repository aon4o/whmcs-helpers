<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Users extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/adduser/
     */
    public function addUser(
        string $first_name,
        string $last_name,
        string $email,
        string $password2,
        string|null $language = null,
    ): array {
        return self::call('AddUser', self::payload([
            'firstname' => $first_name,
            'lastname' => $last_name,
            'email' => $email,
            'password2' => $password2,
            'language' => $language,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/createclientinvite/
     */
    public function createClientInvite(
        string $client_id,
        string $email,
        string $permissions,
    ): array {
        return self::call('CreateClientInvite', self::payload([
            'client_id' => $client_id,
            'email' => $email,
            'permissions' => $permissions,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteuserclient/
     */
    public function deleteUserClient(
        int $user_id,
        int $client_id,
    ): array {
        return self::call('DeleteUserClient', self::payload([
            'user_id' => $user_id,
            'client_id' => $client_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getpermissionslist/
     */
    public function getPermissionsList(): array
    {
        return self::call('GetPermissionsList', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getuserpermissions/
     */
    public function getUserPermissions(
        int $user_id,
        int $client_id,
    ): array {
        return self::call('GetUserPermissions', self::payload([
            'user_id' => $user_id,
            'client_id' => $client_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getusers/
     */
    public function getUsers(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|string $sorting = null,
        null|string $search = null,
    ): array {
        return self::call('GetUsers', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'sorting' => $sorting,
            'search' => $search,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/resetpassword/
     */
    public function resetPassword(
        int|null $id = null,
        string|null $email = null,
    ): array {
        return self::call('ResetPassword', self::payload([
            'id' => $id,
            'email' => $email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updateuser/
     */
    public function updateUser(
        int $user_id,
        string|null $first_name = null,
        string|null $last_name = null,
        string|null $email = null,
        string|null $language = null,
    ): array {
        return self::call('UpdateUser', self::payload([
            'user_id' => $user_id,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'email' => $email,
            'language' => $language,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updateuserpermissions/
     */
    public function updateUserPermissions(
        int $user_id,
        int $client_id,
        string $permissions,
    ): array {
        return self::call('UpdateUserPermissions', self::payload([
            'user_id' => $user_id,
            'client_id' => $client_id,
            'permissions' => $permissions,
        ]));
    }
}
