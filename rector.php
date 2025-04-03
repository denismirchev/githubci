<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $config): void {
    $config->paths([
        __DIR__ . '/tests',
        __DIR__ . '/add_two_numbers.php',
    ]);

    $config->importNames();

    $config->phpstanConfig(__DIR__ . '/phpstan.neon');

    $config->sets([
        LevelSetList::UP_TO_PHP_83,
        SetList::CODE_QUALITY,
        SetList::EARLY_RETURN,
        SetList::TYPE_DECLARATION,
    ]);

    $config->disableParallel();
    $config->cacheDirectory(__DIR__ . '/var/cache/rector');
};
