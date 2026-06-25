<?php

declare(strict_types=1);

namespace OpenEMR\Plugin;

use Symfony\Component\Console\Command\Command;

/**
 * @phpstan-type CommandLike Command|callable-object
 */
interface CliPluginInterface extends PluginInterface
{
    /**
     * Provide a list of `doctrine/console` commands that the plugin exposes.
     * This must return the class names of the commands, not instantiated
     * objects.
     *
     * Commands MUST be registered in the DI container
     *
     * Invokble commands (which do not need to extend `Command` nor have an
     * `execute()` method) are preferred.
     *
     * @return class-string<CommandLike>[]
     */
    public static function getCommandClasses(): array;
}
