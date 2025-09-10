<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class System extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addBannedIp(string $ip, string $reason, int $days, null|string $expires = null): array
    {
        return self::call('AddBannedIp',
            self::payload(['ip' => $ip, 'reason' => $reason, 'days' => $days, 'expires' => $expires]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function decryptPassword(string $password2): array
    {
        return self::call('DecryptPassword', self::payload(['password2' => $password2]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function encryptPassword(string $password2): array
    {
        return self::call('EncryptPassword', self::payload(['password2' => $password2]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getActivityLog(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $clientid = null,
        null|string $date = null,
        null|string $user = null,
        null|string $description = null,
        null|string $ipaddress = null,
    ): array {
        return self::call('GetActivityLog', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'clientid' => $clientid, 'date' => $date,
            'user' => $user, 'description' => $description, 'ipaddress' => $ipaddress,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getAdminDetails(): array
    {
        return self::call('GetAdminDetails', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getAdminUsers(
        null|int $roleid = null,
        null|string $email = null,
        null|bool $include_disabled = null,
    ): array {
        return self::call('GetAdminUsers',
            self::payload(['roleid' => $roleid, 'email' => $email, 'include_disabled' => $include_disabled]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getAutomationLog(
        null|string $startdate = null,
        null|string $enddate = null,
        null|string $namespace = null,
    ): array {
        return self::call('GetAutomationLog',
            self::payload(['startdate' => $startdate, 'enddate' => $enddate, 'namespace' => $namespace]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getConfigurationValue(string $setting): array
    {
        return self::call('GetConfigurationValue', self::payload(['setting' => $setting]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getCurrencies(): array
    {
        return self::call('GetCurrencies', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getEmailTemplates(null|string $type = null, null|string $language = null): array
    {
        return self::call('GetEmailTemplates', self::payload(['type' => $type, 'language' => $language]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPaymentMethods(): array
    {
        return self::call('GetPaymentMethods', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getStaffOnline(): array
    {
        return self::call('GetStaffOnline', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getStats(null|int $timeline_days = null): array
    {
        return self::call('GetStats', self::payload(['timeline_days' => $timeline_days]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getToDoItems(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|string $status = null,
    ): array {
        return self::call('GetToDoItems',
            self::payload(['limitstart' => $limitstart, 'limitnum' => $limitnum, 'status' => $status]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getToDoItemStatuses(): array
    {
        return self::call('GetToDoItemStatuses', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function logActivity(null|int $clientid = null, string $description): array
    {
        return self::call('LogActivity', self::payload(['clientid' => $clientid, 'description' => $description]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function sendAdminEmail(
        null|string $messagename = null,
        null|string $custommessage = null,
        null|string $customsubject = null,
        null|string $type = null,
        null|int $deptid = null,
        null|array $mergefields = null,
    ): array {
        return self::call('SendAdminEmail', self::payload([
            'messagename' => $messagename, 'custommessage' => $custommessage, 'customsubject' => $customsubject,
            'type' => $type, 'deptid' => $deptid, 'mergefields' => $mergefields,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function sendEmail(
        null|string $messagename = null,
        null|int $id = null,
        null|string $customtype = null,
        null|string $custommessage = null,
        null|string $customsubject = null,
        null|array $customvars = null,
    ): array {
        return self::call('SendEmail', self::payload([
            'messagename' => $messagename, 'id' => $id, 'customtype' => $customtype, 'custommessage' => $custommessage,
            'customsubject' => $customsubject, 'customvars' => $customvars,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function setConfigurationValue(string $setting, string $value): array
    {
        return self::call('SetConfigurationValue', self::payload(['setting' => $setting, 'value' => $value]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function triggerNotificationEvent(
        null|string $notification_identifier = null,
        null|string $title = null,
        null|string $message = null,
        null|string $url = null,
        null|string $status = null,
        null|string $statusStyle = null,
        null|array $attributes = null,
    ): array {
        return self::call('TriggerNotificationEvent', self::payload([
            'notification_identifier' => $notification_identifier, 'title' => $title, 'message' => $message,
            'url' => $url, 'status' => $status, 'statusStyle' => $statusStyle, 'attributes' => $attributes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateAdminNotes(string $notes): array
    {
        return self::call('UpdateAdminNotes', self::payload(['notes' => $notes]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateAnnouncement(
        string $announcementid,
        null|string $title = null,
        null|string $announcement = null,
        null|string $date = null,
        null|bool $published = null,
    ): array {
        return self::call('UpdateAnnouncement', self::payload([
            'announcementid' => $announcementid, 'title' => $title, 'announcement' => $announcement, 'date' => $date,
            'published' => $published,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateToDoItem(
        int $itemid,
        int $adminid,
        null|string $status = null,
        null|int $date = null,
        null|string $title = null,
        null|string $description = null,
        null|int $duedate = null,
    ): array {
        return self::call('UpdateToDoItem', self::payload([
            'itemid' => $itemid, 'adminid' => $adminid, 'status' => $status, 'date' => $date, 'title' => $title,
            'description' => $description, 'duedate' => $duedate,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function whmcsDetails(): array
    {
        return self::call('WhmcsDetails', self::payload([]));
    }
}
