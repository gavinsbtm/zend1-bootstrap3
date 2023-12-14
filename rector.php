<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\CodeStyle\Rector\File\EnforceShortOpenTagStyleRector;
use Rector\CodeQuality\Rector\Class_\RemoveUnusedPrivateMethodRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector; 
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void
{
    $rectorConfig->paths([
        __DIR__ . '/application',
        __DIR__ . '/library',
        __DIR__ . '/public_html',
    ]);

    // register file extensions to process
    $rectorConfig->fileExtensions(['php', 'php4', 'php5', 'phtml']);

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // define sets of rules
    $rectorConfig->sets([
        SetList::PHP_81,
        SetList::DEAD_CODE,
    ]);
};