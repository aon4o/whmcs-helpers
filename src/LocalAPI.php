<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers;

use Aon4o\WhmcsHelpers\LocalAPI\Addons;
use Aon4o\WhmcsHelpers\LocalAPI\Affiliates;
use Aon4o\WhmcsHelpers\LocalAPI\Authentication;
use Aon4o\WhmcsHelpers\LocalAPI\Billing;
use Aon4o\WhmcsHelpers\LocalAPI\Client;
use Aon4o\WhmcsHelpers\LocalAPI\Domains;
use Aon4o\WhmcsHelpers\LocalAPI\Module;
use Aon4o\WhmcsHelpers\LocalAPI\Orders;
use Aon4o\WhmcsHelpers\LocalAPI\Products;
use Aon4o\WhmcsHelpers\LocalAPI\ProjectManagement;
use Aon4o\WhmcsHelpers\LocalAPI\Servers;
use Aon4o\WhmcsHelpers\LocalAPI\Service;
use Aon4o\WhmcsHelpers\LocalAPI\Support;
use Aon4o\WhmcsHelpers\LocalAPI\System;
use Aon4o\WhmcsHelpers\LocalAPI\Tickets;
use Aon4o\WhmcsHelpers\LocalAPI\Users;

class LocalAPI
{
    /**
     * Orders
     *
     * @return Orders
     */
    public static function orders(): Orders
    {
        return new Orders();
    }

    /**
     * Billing
     *
     * @return Billing
     */
    public static function billing(): Billing
    {
        return new Billing();
    }

    /**
     * Module
     *
     * @return Module
     */
    public static function module(): Module
    {
        return new Module();
    }

    /**
     * Support
     *
     * @return Support
     */
    public static function support(): Support
    {
        return new Support();
    }

    /**
     * System
     *
     * @return System
     */
    public static function system(): System
    {
        return new System();
    }

    /**
     * Client
     *
     * @return Client
     */
    public static function client(): Client
    {
        return new Client();
    }

    /**
     * Products
     *
     * @return Products
     */
    public static function products(): Products
    {
        return new Products();
    }

    /**
     * Project Management
     *
     * @return ProjectManagement
     */
    public static function projectManagement(): ProjectManagement
    {
        return new ProjectManagement();
    }

    /**
     * Users
     *
     * @return Users
     */
    public static function users(): Users
    {
        return new Users();
    }

    /**
     * Affiliates
     *
     * @return Affiliates
     */
    public static function affiliates(): Affiliates
    {
        return new Affiliates();
    }

    /**
     * Authentication
     *
     * @return Authentication
     */
    public static function authentication(): Authentication
    {
        return new Authentication();
    }

    /**
     * Domains
     *
     * @return Domains
     */
    public static function domains(): Domains
    {
        return new Domains();
    }

    /**
     * Servers
     *
     * @return Servers
     */
    public static function servers(): Servers
    {
        return new Servers();
    }

    /**
     * Tickets
     *
     * @return Tickets
     */
    public static function tickets(): Tickets
    {
        return new Tickets();
    }

    /**
     * Service
     *
     * @return Service
     */
    public static function service(): Service
    {
        return new Service();
    }

    /**
     * Addons
     *
     * @return Addons
     */
    public static function addons(): Addons
    {
        return new Addons();
    }
}
