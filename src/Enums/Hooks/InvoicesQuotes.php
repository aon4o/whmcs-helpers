<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum InvoicesQuotes: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#acceptquote
     */
    case AcceptQuote = 'AcceptQuote';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#addinvoicelatefee
     */
    case AddInvoiceLateFee = 'AddInvoiceLateFee';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#addinvoicepayment
     */
    case AddInvoicePayment = 'AddInvoicePayment';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#addtransaction
     */
    case AddTransaction = 'AddTransaction';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#afterinvoicinggenerateinvoiceitems
     */
    case AfterInvoicingGenerateInvoiceItems = 'AfterInvoicingGenerateInvoiceItems';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#cancelandrefundorder
     */
    case CancelAndRefundOrder = 'CancelAndRefundOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicecancelled
     */
    case InvoiceCancelled = 'InvoiceCancelled';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicechangegateway
     */
    case InvoiceChangeGateway = 'InvoiceChangeGateway';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicecreated
     */
    case InvoiceCreated = 'InvoiceCreated';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicecreation
     */
    case InvoiceCreation = 'InvoiceCreation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicecreationpreemail
     */
    case InvoiceCreationPreEmail = 'InvoiceCreationPreEmail';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicepaid
     */
    case InvoicePaid = 'InvoicePaid';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicepaidpreemail
     */
    case InvoicePaidPreEmail = 'InvoicePaidPreEmail';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicepaymentreminder
     */
    case InvoicePaymentReminder = 'InvoicePaymentReminder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicerefunded
     */
    case InvoiceRefunded = 'InvoiceRefunded';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoicesplit
     */
    case InvoiceSplit = 'InvoiceSplit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#invoiceunpaid
     */
    case InvoiceUnpaid = 'InvoiceUnpaid';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#logtransaction
     */
    case LogTransaction = 'LogTransaction';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#manualrefund
     */
    case ManualRefund = 'ManualRefund';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#preinvoiceautomaticcancellation
     */
    case PreInvoiceAutomaticCancellation = 'PreInvoiceAutomaticCancellation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#preinvoicinggenerateinvoiceitems
     */
    case PreInvoicingGenerateInvoiceItems = 'PreInvoicingGenerateInvoiceItems';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#quotecreated
     */
    case QuoteCreated = 'QuoteCreated';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#quotestatuschange
     */
    case QuoteStatusChange = 'QuoteStatusChange';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#updateinvoicetotal
     */
    case UpdateInvoiceTotal = 'UpdateInvoiceTotal';

    /**
     * @link https://developers.whmcs.com/hooks-reference/invoices-and-quotes/#viewinvoicedetailspage
     */
    case ViewInvoiceDetailsPage = 'ViewInvoiceDetailsPage';
}
