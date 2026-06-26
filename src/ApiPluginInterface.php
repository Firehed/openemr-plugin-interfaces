<?php

declare(strict_types=1);

namespace OpenEMR\Plugin;

use Psr\Container\ContainerInterface;
use Slim\Routing\RouteCollectorProxy;

interface ApiPluginInterface extends PluginInterface
{
    /**
     * Register API routes with the provided route collector.
     *
     * Plugins receive a RouteCollectorProxy scoped to their routes. They can:
     * - Register routes via get(), post(), put(), patch(), delete(), etc.
     * - Add middleware to individual routes via $route->add()
     * - Create sub-groups with group-level middleware via group()->add()
     *
     * Plugins CANNOT remove or bypass system-level middleware.
     *
     * Route handlers must be invokable class strings (resolved from container):
     *   $routes->get('/path', MyController::class);
     *
     * Controllers must be registered in the plugin's DI config.
     *
     * @param RouteCollectorProxy<ContainerInterface> $routes
     */
    public static function registerRoutes(RouteCollectorProxy $routes): void;
}
