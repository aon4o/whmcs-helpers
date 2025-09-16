<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Support extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/addannouncement/
     */
    public function addAnnouncement(
        string $date,
        string $title,
        string $announcement,
        bool|null $published = null,
    ): array {
        return self::call('AddAnnouncement', self::payload([
            'date' => $date,
            'title' => $title,
            'announcement' => $announcement,
            'published' => $published,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/addcancelrequest/
     */
    public function addCancelRequest(
        int $service_id,
        string|null $type = null,
        string|null $reason = null,
    ): array {
        return self::call('AddCancelRequest', self::payload([
            'serviceid' => $service_id,
            'type' => $type,
            'reason' => $reason,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/addclientnote/
     */
    public function addClientNote(
        int $user_id,
        string $notes,
        bool|null $sticky = null,
    ): array {
        return self::call('AddClientNote', self::payload([
            'userid' => $user_id,
            'notes' => $notes,
            'sticky' => $sticky,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/addticketnote/
     */
    public function addTicketNote(
        string $message,
        string|null $ticket_num = null,
        int|null $ticket_id = null,
        bool|null $markdown = null,
        array|null $attachments = null,
        string|null $created = null,
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
     * @link https://developers.whmcs.com/api-reference/addticketreply/
     */
    public function addTicketReply(
        int $ticket_id,
        string $message,
        bool|null $markdown = null,
        int|null $client_id = null,
        int|null $contact_id = null,
        string|null $admin_username = null,
        string|null $name = null,
        string|null $email = null,
        string|null $status = null,
        bool|null $no_email = null,
        string|null $custom_fields = null,
        array|null $attachments = null,
        string|null $created = null,
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
     * @link https://developers.whmcs.com/api-reference/blockticketsender/
     */
    public function blockTicketSender(
        int $ticket_id,
        bool|null $delete = null,
    ): array {
        return self::call('BlockTicketSender', self::payload([
            'ticketid' => $ticket_id,
            'delete' => $delete,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteannouncement/
     */
    public function deleteAnnouncement(
        int $announcement_id,
    ): array {
        return self::call('DeleteAnnouncement', self::payload([
            'announcementid' => $announcement_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteticket/
     */
    public function deleteTicket(
        int $ticket_id,
    ): array {
        return self::call('DeleteTicket', self::payload([
            'ticketid' => $ticket_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteticketnote/
     */
    public function deleteTicketNote(
        int $note_id,
    ): array {
        return self::call('DeleteTicketNote', self::payload([
            'noteid' => $note_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteticketreply/
     */
    public function deleteTicketReply(
        int $ticket_id,
        int $reply_id,
    ): array {
        return self::call('DeleteTicketReply', self::payload([
            'ticketid' => $ticket_id,
            'replyid' => $reply_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getannouncements/
     */
    public function getAnnouncements(
        int|null $limit_start = null,
        int|null $limit_num = null,
    ): array {
        return self::call('GetAnnouncements', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/mergeticket/
     */
    public function mergeTicket(
        int $ticket_id,
        string $merge_ticket_ids,
        string|null $new_subject = null,
    ): array {
        return self::call('MergeTicket', self::payload([
            'ticketid' => $ticket_id,
            'mergeticketids' => $merge_ticket_ids,
            'newsubject' => $new_subject,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/openticket/
     */
    public function openTicket(
        int $department_id,
        string $subject,
        string $message,
        int|null $client_id = null,
        int|null $user_id = null,
        int|null $contact_id = null,
        string|null $name = null,
        string|null $email = null,
        string|null $priority = null,
        string|null $created = null,
        int|null $service_id = null,
        int|null $domain_id = null,
        bool|null $admin = null,
        bool|null $no_email = null,
        bool|null $markdown = null,
        string|null $custom_fields = null,
        array|null $attachments = null,
        bool|null $prevent_client_closure = null,
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
     * @link https://developers.whmcs.com/api-reference/updateticket/
     */
    public function updateTicket(
        int $ticket_id,
        int|null $department_id = null,
        string|null $status = null,
        string|null $subject = null,
        int|null $user_id = null,
        string|null $name = null,
        string|null $email = null,
        string|null $cc = null,
        string|null $priority = null,
        string|null $created = null,
        int|null $flag = null,
        bool|null $remove_flag = null,
        string|null $message = null,
        bool|null $markdown = null,
        string|null $custom_fields = null,
        bool|null $prevent_client_closure = null,
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
     * @link https://developers.whmcs.com/api-reference/updateticketreply/
     */
    public function updateTicketReply(
        int $reply_id,
        string $message,
        bool|null $markdown = null,
        string|null $created = null,
    ): array {
        return self::call('UpdateTicketReply', self::payload([
            'replyid' => $reply_id,
            'message' => $message,
            'markdown' => $markdown,
            'created' => $created,
        ]));
    }
}
