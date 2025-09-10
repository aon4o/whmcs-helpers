<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum SupportTools: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#announcementadd
     */
    case AnnouncementAdd = 'AnnouncementAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#announcementedit
     */
    case AnnouncementEdit = 'AnnouncementEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#filedownload
     */
    case FileDownload = 'FileDownload';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#networkissueadd
     */
    case NetworkIssueAdd = 'NetworkIssueAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#networkissueclose
     */
    case NetworkIssueClose = 'NetworkIssueClose';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#networkissuedelete
     */
    case NetworkIssueDelete = 'NetworkIssueDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#networkissueedit
     */
    case NetworkIssueEdit = 'NetworkIssueEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/support-tools/#networkissuereopen
     */
    case NetworkIssueReopen = 'NetworkIssueReopen';
}
