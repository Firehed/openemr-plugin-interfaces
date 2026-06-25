<?php

declare(strict_types=1);

namespace OpenEMR\Plugin;

interface DatabasePluginInterface extends PluginInterface
{
    /**
     * Provides namespace->directory mappings for doctrine migrations provided
     * by this plugin.
     *
     * @return array<string, string>
     */
    public static function getMigrationsPaths(): array;
}
