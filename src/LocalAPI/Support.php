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
            'date' => $date,
            'title' => $title,
            'announcement' => $announcement,
            'published' => $published,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addCancelRequest(int $service_id, null|string $type = null, null|string $reason = null): array
    {
        return self::call('AddCancelRequest', self::payload([
            'serviceid' => $service_id,
            'type' => $type,
            'reason' => $reason,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addClientNote(int $user_id, string $notes, null|bool $sticky = null): array
    {
        return self::call('AddClientNote', self::payload([
            'userid' => $user_id,
            'notes' => $notes,
            'sticky' => $sticky,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTicketNote(
        string $message,
        null|string $ticket_num = null,
        null|int $ticket_id = null,
        null|bool $markdown = null,
        null|array $attachments = null,
        null|string $created = null,
    ): array {
        return self::call('AddTicketNote', self::payload([
            'message' => $message,
            'ticketnum' => $ticket_num,
            'ticketid' => $ticket_id,
            'markdown' => $markdown,
            'attachments' => $attachments,
            'created' => $created,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTicketReply(
        int $ticket_id,
        string $message,
        null|bool $markdown = null,
        null|int $client_id = null,
        null|int $contact_id = null,
        null|string $admin_username = null,
        null|string $name = null,
        null|string $email = null,
        null|string $status = null,
        null|bool $no_email = null,
        null|string $custom_fields = null,
        null|array $attachments = null,
        null|string $created = null,
    ): array {
        return self::call('AddTicketReply', self::payload([
            'ticketid' => $ticket_id,
            'message' => $message,
            'markdown' => $markdown,
            'clientid' => $client_id,
            'contactid' => $contact_id,
            'adminusername' => $admin_username,
            'name' => $name,
            'email' => $email,
            'status' => $status,
            'noemail' => $no_email,
            'customfields' => $custom_fields,
            'attachments' => $attachments,
            'created' => $created,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function blockTicketSender(int $ticket_id, null|bool $delete = null): array
    {
        return self::call('BlockTicketSender', self::payload(['ticketid' => $ticket_id, 'delete' => $delete]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteAnnouncement(int $announcement_id): array
    {
        return self::call('DeleteAnnouncement', self::payload(['announcementid' => $announcement_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicket(int $ticket_id): array
    {
        return self::call('DeleteTicket', self::payload(['ticketid' => $ticket_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicketNote(int $note_id): array
    {
        return self::call('DeleteTicketNote', self::payload(['noteid' => $note_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteTicketReply(int $ticket_id, int $reply_id): array
    {
        return self::call('DeleteTicketReply', self::payload(['ticketid' => $ticket_id, 'replyid' => $reply_id]));
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
    public function mergeTicket(int $ticket_id, string $merge_ticket_ids, null|string $new_subject = null): array
    {
        return self::call('MergeTicket', self::payload([
            'ticketid' => $ticket_id,
            'mergeticketids' => $merge_ticket_ids,
            'newsubject' => $new_subject,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function openTicket(
        int $department_id,
        string $subject,
        string $message,
        null|int $client_id = null,
        null|int $user_id = null,
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
        null|bool $prevent_client_closure = null,
    ): array {
        return self::call('OpenTicket', self::payload([
            'deptid' => $department_id,
            'subject' => $subject,
            'message' => $message,
            'clientid' => $client_id,
            'userid' => $user_id,
            'contactid' => $contact_id,
            'name' => $name,
            'email' => $email,
            'priority' => $priority,
            'created' => $created,
            'serviceid' => $service_id,
            'domainid' => $domain_id,
            'admin' => $admin,
            'noemail' => $no_email,
            'markdown' => $markdown,
            'customfields' => $custom_fields,
            'attachments' => $attachments,
            'preventClientClosure' => $prevent_client_closure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTicket(
        int $ticket_id,
        null|int $department_id = null,
        null|string $status = null,
        null|string $subject = null,
        null|int $user_id = null,
        null|string $name = null,
        null|string $email = null,
        null|string $cc = null,
        null|string $priority = null,
        null|string $created = null,
        null|int $flag = null,
        null|bool $remove_flag = null,
        null|string $message = null,
        null|bool $markdown = null,
        null|string $custom_fields = null,
        null|bool $prevent_client_closure = null,
    ): array {
        return self::call('UpdateTicket', self::payload([
            'ticketid' => $ticket_id,
            'deptid' => $department_id,
            'status' => $status,
            'subject' => $subject,
            'userid' => $user_id,
            'name' => $name,
            'email' => $email,
            'cc' => $cc,
            'priority' => $priority,
            'created' => $created,
            'flag' => $flag,
            'removeFlag' => $remove_flag,
            'message' => $message,
            'markdown' => $markdown,
            'customfields' => $custom_fields,
            'preventClientClosure' => $prevent_client_closure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTicketReply(
        int $reply_id,
        string $message,
        null|bool $markdown = null,
        null|string $created = null,
    ): array {
        return self::call('UpdateTicketReply', self::payload([
            'replyid' => $reply_id,
            'message' => $message,
            'markdown' => $markdown,
            'created' => $created,
        ]));
    }
}
