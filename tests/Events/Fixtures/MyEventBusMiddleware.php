<?php

declare(strict_types=1);

namespace Tests\Tempest\Events\Fixtures;

use Tempest\Events\EventBusMiddleware;

class MyEventBusMiddleware implements EventBusMiddleware
{
    public static bool $hit = false;

    public function __invoke(object $event, callable $next): void
    {
        self::$hit = true;

        $next($event);
    }
}
