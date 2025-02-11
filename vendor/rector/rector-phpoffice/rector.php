<?php

declare (strict_types=1);
namespace RectorPrefix20220421;

use Rector\Config\RectorConfig;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([\Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_81, \Rector\Set\ValueObject\SetList::CODE_QUALITY, \Rector\Set\ValueObject\SetList::DEAD_CODE, \Rector\Set\ValueObject\SetList::NAMING]);
    $rectorConfig->importNames();
    $rectorConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);
    $rectorConfig->skip([\Rector\Php55\Rector\String_\StringClassNameToClassConstantRector::class => [__DIR__ . '/config']]);
    $rectorConfig->parallel();
};
