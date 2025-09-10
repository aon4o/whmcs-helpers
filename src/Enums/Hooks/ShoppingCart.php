<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum ShoppingCart: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#acceptorder
     */
    case AcceptOrder = 'AcceptOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#addonfraud
     */
    case AddonFraud = 'AddonFraud';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#aftercalculatecarttotals
     */
    case AfterCalculateCartTotals = 'AfterCalculateCartTotals';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#afterfraudcheck
     */
    case AfterFraudCheck = 'AfterFraudCheck';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#aftershoppingcartcheckout
     */
    case AfterShoppingCartCheckout = 'AfterShoppingCartCheckout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#cancelorder
     */
    case CancelOrder = 'CancelOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#cartitemstax
     */
    case CartItemsTax = 'CartItemsTax';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#cartsubdomainvalidation
     */
    case CartSubdomainValidation = 'CartSubdomainValidation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#carttotaladjustment
     */
    case CartTotalAdjustment = 'CartTotalAdjustment';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#deleteorder
     */
    case DeleteOrder = 'DeleteOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#fraudcheckawaitinguserinput
     */
    case FraudCheckAwaitingUserInput = 'FraudCheckAwaitingUserInput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#fraudcheckfailed
     */
    case FraudCheckFailed = 'FraudCheckFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#fraudcheckpassed
     */
    case FraudCheckPassed = 'FraudCheckPassed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#fraudorder
     */
    case FraudOrder = 'FraudOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#orderaddonpricingoverride
     */
    case OrderAddonPricingOverride = 'OrderAddonPricingOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#orderdomainpricingoverride
     */
    case OrderDomainPricingOverride = 'OrderDomainPricingOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#orderpaid
     */
    case OrderPaid = 'OrderPaid';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#orderproductpricingoverride
     */
    case OrderProductPricingOverride = 'OrderProductPricingOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#orderproductupgradeoverride
     */
    case OrderProductUpgradeOverride = 'OrderProductUpgradeOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#overrideordernumbergeneration
     */
    case OverrideOrderNumberGeneration = 'OverrideOrderNumberGeneration';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#pendingorder
     */
    case PendingOrder = 'PendingOrder';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#precalculatecarttotals
     */
    case PreCalculateCartTotals = 'PreCalculateCartTotals';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#prefraudcheck
     */
    case PreFraudCheck = 'PreFraudCheck';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#preshoppingcartcheckout
     */
    case PreShoppingCartCheckout = 'PreShoppingCartCheckout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#runfraudcheck
     */
    case RunFraudCheck = 'RunFraudCheck';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#shoppingcartcheckoutcompletepage
     */
    case ShoppingCartCheckoutCompletePage = 'ShoppingCartCheckoutCompletePage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#shoppingcartvalidatecheckout
     */
    case ShoppingCartValidateCheckout = 'ShoppingCartValidateCheckout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#shoppingcartvalidatedomain
     */
    case ShoppingCartValidateDomain = 'ShoppingCartValidateDomain';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#shoppingcartvalidatedomainsconfig
     */
    case ShoppingCartValidateDomainsConfig = 'ShoppingCartValidateDomainsConfig';

    /**
     * @link https://developers.whmcs.com/hooks-reference/shopping-cart/#shoppingcartvalidateproductupdate
     */
    case ShoppingCartValidateProductUpdate = 'ShoppingCartValidateProductUpdate';
}
