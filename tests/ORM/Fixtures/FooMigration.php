<?php

declare(strict_types=1);

namespace Tests\Tempest\ORM\Fixtures;

use Tempest\Database\Migration;
use Tempest\Database\Query;

class FooMigration implements Migration
{
    public function getName(): string
    {
        return 'foo';
    }

    public function up(): Query|null
    {
        return new Query("CREATE TABLE Foo (
            `id` INTEGER PRIMARY KEY AUTOINCREMENT,
            `bar` TEXT
        )");
    }

    public function down(): Query|null
    {
        return null;
    }
}
