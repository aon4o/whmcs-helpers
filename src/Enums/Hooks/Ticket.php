<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Ticket: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#adminareaviewticketpage
     */
    case AdminAreaViewTicketPage = 'AdminAreaViewTicketPage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#adminareaviewticketpagesidebar
     */
    case AdminAreaViewTicketPageSidebar = 'AdminAreaViewTicketPageSidebar';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#adminsupportticketpagepretickets
     */
    case AdminSupportTicketPagePreTickets = 'AdminSupportTicketPagePreTickets';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#clientareapagesubmitticket
     */
    case ClientAreaPageSubmitTicket = 'ClientAreaPageSubmitTicket';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#clientareapagesupporttickets
     */
    case ClientAreaPageSupportTickets = 'ClientAreaPageSupportTickets';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#clientareapageviewticket
     */
    case ClientAreaPageViewTicket = 'ClientAreaPageViewTicket';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#submitticketanswersuggestions
     */
    case SubmitTicketAnswerSuggestions = 'SubmitTicketAnswerSuggestions';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketaddnote
     */
    case TicketAddNote = 'TicketAddNote';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketadminreply
     */
    case TicketAdminReply = 'TicketAdminReply';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketclose
     */
    case TicketClose = 'TicketClose';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketdelete
     */
    case TicketDelete = 'TicketDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketdeletereply
     */
    case TicketDeleteReply = 'TicketDeleteReply';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketdepartmentchange
     */
    case TicketDepartmentChange = 'TicketDepartmentChange';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketflagged
     */
    case TicketFlagged = 'TicketFlagged';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketmerge
     */
    case TicketMerge = 'TicketMerge';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketopen
     */
    case TicketOpen = 'TicketOpen';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketopenadmin
     */
    case TicketOpenAdmin = 'TicketOpenAdmin';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketopenvalidation
     */
    case TicketOpenValidation = 'TicketOpenValidation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketpiping
     */
    case TicketPiping = 'TicketPiping';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketprioritychange
     */
    case TicketPriorityChange = 'TicketPriorityChange';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketsplit
     */
    case TicketSplit = 'TicketSplit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketstatuschange
     */
    case TicketStatusChange = 'TicketStatusChange';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketsubjectchange
     */
    case TicketSubjectChange = 'TicketSubjectChange';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#ticketuserreply
     */
    case TicketUserReply = 'TicketUserReply';

    /**
     * @link https://developers.whmcs.com/hooks-reference/ticket/#transliteratetickettext
     */
    case TransliterateTicketText = 'TransliterateTicketText';
}
