<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class ProjectManagement extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addProjectMessage(int $projectid, string $message, null|int $adminid = null): array
    {
        return self::call('AddProjectMessage',
            self::payload(['projectid' => $projectid, 'message' => $message, 'adminid' => $adminid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addProjectTask(
        int $projectid,
        string $duedate,
        null|int $adminid = null,
        null|string $task = null,
        null|string $notes = null,
        null|bool $completed = null,
        null|bool $billed = null,
    ): array {
        return self::call('AddProjectTask', self::payload([
            'projectid' => $projectid, 'duedate' => $duedate, 'adminid' => $adminid, 'task' => $task, 'notes' => $notes,
            'completed' => $completed, 'billed' => $billed,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createProject(
        string $title,
        int $adminid,
        null|int $userid = null,
        null|string $status = null,
        null|string $created = null,
        null|string $duedate = null,
        null|bool $completed = null,
        null|string $ticketids = null,
        null|string $invoiceids = null,
    ): array {
        return self::call('CreateProject', self::payload([
            'title' => $title, 'adminid' => $adminid, 'userid' => $userid, 'status' => $status, 'created' => $created,
            'duedate' => $duedate, 'completed' => $completed, 'ticketids' => $ticketids, 'invoiceids' => $invoiceids,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteProjectTask(int $projectid, int $taskid): array
    {
        return self::call('DeleteProjectTask', self::payload(['projectid' => $projectid, 'taskid' => $taskid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function endTaskTimer(
        int $timerid,
        null|int $projectid = null,
        null|int $adminid = null,
        null|int $end_time = null,
    ): array {
        return self::call('EndTaskTimer', self::payload([
            'timerid' => $timerid, 'projectid' => $projectid, 'adminid' => $adminid, 'end_time' => $end_time,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getProject(int $projectid): array
    {
        return self::call('GetProject', self::payload(['projectid' => $projectid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getProjects(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $userid = null,
        null|string $title = null,
        null|string $ticketids = null,
        null|string $invoiceids = null,
        null|string $notes = null,
        null|int $adminid = null,
        null|string $status = null,
        null|string $created = null,
        null|string $duedate = null,
        null|bool $completed = null,
        null|string $lastmodified = null,
    ): array {
        return self::call('GetProjects', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'userid' => $userid, 'title' => $title,
            'ticketids' => $ticketids, 'invoiceids' => $invoiceids, 'notes' => $notes, 'adminid' => $adminid,
            'status' => $status, 'created' => $created, 'duedate' => $duedate, 'completed' => $completed,
            'lastmodified' => $lastmodified,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function startTaskTimer(
        int $timerid,
        int $projectid,
        null|int $adminid = null,
        null|int $start_time = null,
        null|int $end_time = null,
    ): array {
        return self::call('StartTaskTimer', self::payload([
            'timerid' => $timerid, 'projectid' => $projectid, 'adminid' => $adminid, 'start_time' => $start_time,
            'end_time' => $end_time,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateProject(
        int $projectid,
        null|int $adminid = null,
        null|int $userid = null,
        null|string $status = null,
        null|string $created = null,
        null|string $duedate = null,
        null|bool $completed = null,
        null|string $title = null,
        null|string $ticketids = null,
        null|string $invoiceids = null,
        null|string $notes = null,
    ): array {
        return self::call('UpdateProject', self::payload([
            'projectid' => $projectid, 'adminid' => $adminid, 'userid' => $userid, 'status' => $status,
            'created' => $created, 'duedate' => $duedate, 'completed' => $completed, 'title' => $title,
            'ticketids' => $ticketids, 'invoiceids' => $invoiceids, 'notes' => $notes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateProjectTask(
        int $taskid,
        null|int $projectid = null,
        null|string $duedate = null,
        null|int $adminid = null,
        null|string $task = null,
        null|string $notes = null,
        null|bool $completed = null,
    ): array {
        return self::call('UpdateProjectTask', self::payload([
            'taskid' => $taskid, 'projectid' => $projectid, 'duedate' => $duedate, 'adminid' => $adminid,
            'task' => $task, 'notes' => $notes, 'completed' => $completed,
        ]));
    }
}
