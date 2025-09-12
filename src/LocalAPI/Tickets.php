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
        return self::call('GetSupportDepartments',
            self::payload(['ignore_dept_assignments' => $ignore_dept_assignments]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getSupportStatuses(null|int $deptid = null): array
    {
        return self::call('GetSupportStatuses', self::payload(['deptid' => $deptid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicket(
        null|string $ticketnum = null,
        null|int $ticketid = null,
        null|string $repliessort = null,
    ): array {
        return self::call('GetTicket',
            self::payload(['ticketnum' => $ticketnum, 'ticketid' => $ticketid, 'repliessort' => $repliessort]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketAttachment(int $related_id, string $type, int $index): array
    {
        return self::call('GetTicketAttachment',
            self::payload(['relatedid' => $related_id, 'type' => $type, 'index' => $index]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketCounts(
        null|bool $ignoreDepartmentAssignments = null,
        null|bool $includeCountsByStatus = null,
    ): array {
        return self::call('GetTicketCounts', self::payload([
            'ignoreDepartmentAssignments' => $ignoreDepartmentAssignments,
            'includeCountsByStatus' => $includeCountsByStatus,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketNotes(int $ticketid): array
    {
        return self::call('GetTicketNotes', self::payload(['ticketid' => $ticketid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketPredefinedCats(): array
    {
        return self::call('GetTicketPredefinedCats', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTicketPredefinedReplies(null|int $catid = null): array
    {
        return self::call('GetTicketPredefinedReplies', self::payload(['catid' => $catid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTickets(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $deptid = null,
        null|int $client_id = null,
        null|string $email = null,
        null|string $status = null,
        null|string $subject = null,
        null|bool $ignore_dept_assignments = null,
    ): array {
        return self::call('GetTickets', self::payload([
            'limitstart' => $limit_start, 'limitnum' => $limit_num, 'deptid' => $deptid, 'clientid' => $client_id,
            'email' => $email, 'status' => $status, 'subject' => $subject,
            'ignore_dept_assignments' => $ignore_dept_assignments,
        ]));
    }
}
