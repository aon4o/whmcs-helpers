<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum ProductsServices: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#afterproductupgrade
     */
    case AfterProductUpgrade = 'AfterProductUpgrade';

    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#productdelete
     */
    case ProductDelete = 'ProductDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#productedit
     */
    case ProductEdit = 'ProductEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#serveradd
     */
    case ServerAdd = 'ServerAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#serverdelete
     */
    case ServerDelete = 'ServerDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/products-and-services/#serveredit
     */
    case ServerEdit = 'ServerEdit';
}
