<?php

declare(strict_types=1);

namespace PhpMyAdmin\ConfigStorage\Features;

use PhpMyAdmin\Identifiers\DatabaseName;
use PhpMyAdmin\Identifiers\TableName;

/** @psalm-immutable */
final class ColumnCommentsFeature
{
    public function __construct(public DatabaseName $database, public TableName $columnInfo)
    {
    }
}