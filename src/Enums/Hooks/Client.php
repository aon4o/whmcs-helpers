<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Client: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#afterclientmerge
     */
    case AfterClientMerge = 'AfterClientMerge';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientadd
     */
    case ClientAdd = 'ClientAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientalert
     */
    case ClientAlert = 'ClientAlert';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientchangepassword
     */
    case ClientChangePassword = 'ClientChangePassword';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientclose
     */
    case ClientClose = 'ClientClose';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientdelete
     */
    case ClientDelete = 'ClientDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientdetailsvalidation
     */
    case ClientDetailsValidation = 'ClientDetailsValidation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#clientedit
     */
    case ClientEdit = 'ClientEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client/#predeleteclient
     */
    case PreDeleteClient = 'PreDeleteClient';
}
