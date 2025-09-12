<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Tickets extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getSupportDepartments(null|bool $ignore_dept_assignments = null): array
    {
        return self::call('GetSupportDepartments', self::payload([
            'ignore_dept_assignments' => $ignore_dept_assignments,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getSupportStatuses(null|int $department_id = null): array
    {
        return self::call('GetSupportStatuses', self::payload(['deptid' => $department_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicket(
        null|string $ticket_num = null,
        null|int $ticket_id = null,
        null|string $replies_sort = null,
    ): array {
        return self::call('GetTicket', self::payload([
            'ticketnum' => $ticket_num,
            'ticketid' => $ticket_id,
            'repliessort' => $replies_sort,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketAttachment(int $related_id, string $type, int $index): array
    {
        return self::call('GetTicketAttachment', self::payload([
            'relatedid' => $related_id,
            'type' => $type,
            'index' => $index,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketCounts(
        null|bool $ignore_department_assignments = null,
        null|bool $include_counts_by_status = null,
    ): array {
        return self::call('GetTicketCounts', self::payload([
            'ignoreDepartmentAssignments' => $ignore_department_assignments,
            'includeCountsByStatus' => $include_counts_by_status,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketNotes(int $ticket_id): array
    {
        return self::call('GetTicketNotes', self::payload(['ticketid' => $ticket_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketPredefinedCats(): array
    {
        return self::call('GetTicketPredefinedCats', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getticketpredefinedreplies/
     */
    public function getTicketPredefinedReplies(null|int $category_id = null): array
    {
        return self::call('GetTicketPredefinedReplies', self::payload(['catid' => $category_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTickets(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $department_id = null,
        null|int $client_id = null,
        null|string $email = null,
        null|string $status = null,
        null|string $subject = null,
        null|bool $ignore_dept_assignments = null,
    ): array {
        return self::call('GetTickets', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'deptid' => $department_id,
            'clientid' => $client_id,
            'email' => $email,
            'status' => $status,
            'subject' => $subject,
            'ignore_dept_assignments' => $ignore_dept_assignments,
        ]));
    }
}
