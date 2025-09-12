<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class ProjectManagement extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addProjectMessage(int $project_id, string $message, null|int $admin_id = null): array
    {
        return self::call('AddProjectMessage', self::payload([
            'projectid' => $project_id,
            'message' => $message,
            'adminid' => $admin_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addProjectTask(
        int $project_id,
        string $due_date,
        null|int $admin_id = null,
        null|string $task = null,
        null|string $notes = null,
        null|bool $completed = null,
        null|bool $billed = null,
    ): array {
        return self::call('AddProjectTask', self::payload([
            'projectid' => $project_id,
            'duedate' => $due_date,
            'adminid' => $admin_id,
            'task' => $task,
            'notes' => $notes,
            'completed' => $completed,
            'billed' => $billed,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createProject(
        string $title,
        int $admin_id,
        null|int $userid = null,
        null|string $status = null,
        null|string $created = null,
        null|string $due_date = null,
        null|bool $completed = null,
        null|string $ticket_ids = null,
        null|string $invoice_ids = null,
    ): array {
        return self::call('CreateProject', self::payload([
            'title' => $title,
            'adminid' => $admin_id,
            'userid' => $userid,
            'status' => $status,
            'created' => $created,
            'duedate' => $due_date,
            'completed' => $completed,
            'ticketids' => $ticket_ids,
            'invoiceids' => $invoice_ids,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteProjectTask(int $project_id, int $task_id): array
    {
        return self::call('DeleteProjectTask', self::payload(['projectid' => $project_id, 'taskid' => $task_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function endTaskTimer(
        int $timer_id,
        null|int $project_id = null,
        null|int $admin_id = null,
        null|int $end_time = null,
    ): array {
        return self::call('EndTaskTimer', self::payload([
            'timerid' => $timer_id,
            'projectid' => $project_id,
            'adminid' => $admin_id,
            'end_time' => $end_time,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getProject(int $project_id): array
    {
        return self::call('GetProject', self::payload(['projectid' => $project_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getProjects(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $userid = null,
        null|string $title = null,
        null|string $ticket_ids = null,
        null|string $invoice_ids = null,
        null|string $notes = null,
        null|int $admin_id = null,
        null|string $status = null,
        null|string $created = null,
        null|string $due_date = null,
        null|bool $completed = null,
        null|string $last_modified = null,
    ): array {
        return self::call('GetProjects', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'userid' => $userid,
            'title' => $title,
            'ticketids' => $ticket_ids,
            'invoiceids' => $invoice_ids,
            'notes' => $notes,
            'adminid' => $admin_id,
            'status' => $status,
            'created' => $created,
            'duedate' => $due_date,
            'completed' => $completed,
            'lastmodified' => $last_modified,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function startTaskTimer(
        int $timer_id,
        int $project_id,
        null|int $admin_id = null,
        null|int $start_time = null,
        null|int $end_time = null,
    ): array {
        return self::call('StartTaskTimer', self::payload([
            'timerid' => $timer_id,
            'projectid' => $project_id,
            'adminid' => $admin_id,
            'start_time' => $start_time,
            'end_time' => $end_time,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateProject(
        int $project_id,
        null|int $admin_id = null,
        null|int $userid = null,
        null|string $status = null,
        null|string $created = null,
        null|string $due_date = null,
        null|bool $completed = null,
        null|string $title = null,
        null|string $ticket_ids = null,
        null|string $invoice_ids = null,
        null|string $notes = null,
    ): array {
        return self::call('UpdateProject', self::payload([
            'projectid' => $project_id,
            'adminid' => $admin_id,
            'userid' => $userid,
            'status' => $status,
            'created' => $created,
            'duedate' => $due_date,
            'completed' => $completed,
            'title' => $title,
            'ticketids' => $ticket_ids,
            'invoiceids' => $invoice_ids,
            'notes' => $notes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateProjectTask(
        int $task_id,
        null|int $project_id = null,
        null|string $due_date = null,
        null|int $admin_id = null,
        null|string $task = null,
        null|string $notes = null,
        null|bool $completed = null,
    ): array {
        return self::call('UpdateProjectTask', self::payload([
            'taskid' => $task_id,
            'projectid' => $project_id,
            'duedate' => $due_date,
            'adminid' => $admin_id,
            'task' => $task,
            'notes' => $notes,
            'completed' => $completed,
        ]));
    }
}
