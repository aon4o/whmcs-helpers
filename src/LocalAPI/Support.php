<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Support extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addAnnouncement(
        string $date,
        string $title,
        string $announcement,
        null|bool $published = null,
    ): array {
        return self::call('AddAnnouncement', self::payload([
            'date' => $date, 'title' => $title, 'announcement' => $announcement, 'published' => $published,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addCancelRequest(int $service_id, null|string $type = null, null|string $reason = null): array
    {
        return self::call('AddCancelRequest',
            self::payload(['serviceid' => $service_id, 'type' => $type, 'reason' => $reason]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addClientNote(int $userid, string $notes, null|bool $sticky = null): array
    {
        return self::call('AddClientNote',
            self::payload(['userid' => $userid, 'notes' => $notes, 'sticky' => $sticky]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTicketNote(
        string $message,
        null|string $ticketnum = null,
        null|int $ticketid = null,
        null|bool $markdown = null,
        null|array $attachments = null,
        null|string $created = null,
    ): array {
        return self::call('AddTicketNote', self::payload([
            'message' => $message, 'ticketnum' => $ticketnum, 'ticketid' => $ticketid, 'markdown' => $markdown,
            'attachments' => $attachments, 'created' => $created,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTicketReply(
        int $ticketid,
        string $message,
        null|bool $markdown = null,
        null|int $client_id = null,
        null|int $contact_id = null,
        null|string $adminusername = null,
        null|string $name = null,
        null|string $email = null,
        null|string $status = null,
        null|bool $no_email = null,
        null|string $custom_fields = null,
        null|array $attachments = null,
        null|string $created = null,
    ): array {
        return self::call('AddTicketReply', self::payload([
            'ticketid' => $ticketid, 'message' => $message, 'markdown' => $markdown, 'clientid' => $client_id,
            'contactid' => $contact_id, 'adminusername' => $adminusername, 'name' => $name, 'email' => $email,
            'status' => $status, 'noemail' => $no_email, 'customfields' => $custom_fields,
            'attachments' => $attachments,
            'created' => $created,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function blockTicketSender(int $ticketid, null|bool $delete = null): array
    {
        return self::call('BlockTicketSender', self::payload(['ticketid' => $ticketid, 'delete' => $delete]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteAnnouncement(int $announcementid): array
    {
        return self::call('DeleteAnnouncement', self::payload(['announcementid' => $announcementid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicket(int $ticketid): array
    {
        return self::call('DeleteTicket', self::payload(['ticketid' => $ticketid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicketNote(int $noteid): array
    {
        return self::call('DeleteTicketNote', self::payload(['noteid' => $noteid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicketReply(int $ticketid, int $replyid): array
    {
        return self::call('DeleteTicketReply', self::payload(['ticketid' => $ticketid, 'replyid' => $replyid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getAnnouncements(null|int $limit_start = null, null|int $limit_num = null): array
    {
        return self::call('GetAnnouncements', self::payload(['limitstart' => $limit_start, 'limitnum' => $limit_num]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function mergeTicket(int $ticketid, string $mergeticketids, null|string $newsubject = null): array
    {
        return self::call('MergeTicket', self::payload([
            'ticketid' => $ticketid, 'mergeticketids' => $mergeticketids, 'newsubject' => $newsubject,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function openTicket(
        int $deptid,
        string $subject,
        string $message,
        null|int $client_id = null,
        null|int $userid = null,
        null|int $contact_id = null,
        null|string $name = null,
        null|string $email = null,
        null|string $priority = null,
        null|string $created = null,
        null|int $service_id = null,
        null|int $domain_id = null,
        null|bool $admin = null,
        null|bool $no_email = null,
        null|bool $markdown = null,
        null|string $custom_fields = null,
        null|array $attachments = null,
        null|bool $preventClientClosure = null,
    ): array {
        return self::call('OpenTicket', self::payload([
            'deptid' => $deptid, 'subject' => $subject, 'message' => $message, 'clientid' => $client_id,
            'userid' => $userid, 'contactid' => $contact_id, 'name' => $name, 'email' => $email,
            'priority' => $priority,
            'created' => $created, 'serviceid' => $service_id, 'domainid' => $domain_id, 'admin' => $admin,
            'noemail' => $no_email, 'markdown' => $markdown, 'customfields' => $custom_fields,
            'attachments' => $attachments, 'preventClientClosure' => $preventClientClosure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTicket(
        int $ticketid,
        null|int $deptid = null,
        null|string $status = null,
        null|string $subject = null,
        null|int $userid = null,
        null|string $name = null,
        null|string $email = null,
        null|string $cc = null,
        null|string $priority = null,
        null|string $created = null,
        null|int $flag = null,
        null|bool $removeFlag = null,
        null|string $message = null,
        null|bool $markdown = null,
        null|string $custom_fields = null,
        null|bool $preventClientClosure = null,
    ): array {
        return self::call('UpdateTicket', self::payload([
            'ticketid' => $ticketid, 'deptid' => $deptid, 'status' => $status, 'subject' => $subject,
            'userid' => $userid, 'name' => $name, 'email' => $email, 'cc' => $cc, 'priority' => $priority,
            'created' => $created, 'flag' => $flag, 'removeFlag' => $removeFlag, 'message' => $message,
            'markdown' => $markdown, 'customfields' => $custom_fields, 'preventClientClosure' => $preventClientClosure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTicketReply(
        int $replyid,
        string $message,
        null|bool $markdown = null,
        null|string $created = null,
    ): array {
        return self::call('UpdateTicketReply', self::payload([
            'replyid' => $replyid, 'message' => $message, 'markdown' => $markdown, 'created' => $created,
        ]));
    }
}
