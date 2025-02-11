<?php

declare (strict_types=1);
namespace RectorPrefix20220421;

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([\Rector\Set\ValueObject\SetList::PHP_73, \Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_72]);
    // parameter must be defined after import, to override imported param version
    $rectorConfig->phpVersion(\Rector\Core\ValueObject\PhpVersion::PHP_73);
};
