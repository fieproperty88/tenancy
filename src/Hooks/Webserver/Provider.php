<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel & Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Hooks\Webserver;

use Tenancy\Providers\Provides\ProvidesBindings;
use Tenancy\Support\HooksProvider;

class Provider extends HooksProvider
{
    use ProvidesBindings;

    protected $hooks = [
        Hooks\DatabaseMutation::class,
    ];

    protected $singletons = [
        Manager::class,
    ];
}
