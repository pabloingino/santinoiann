<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0fl0nb0\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0fl0nb0/appProdProjectContainer.php') {
    touch(__DIR__.'/Container0fl0nb0.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container0fl0nb0\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container0fl0nb0\appProdProjectContainer(array(
    'container.build_hash' => '0fl0nb0',
    'container.build_id' => '12e2a037',
    'container.build_time' => 1542982726,
), __DIR__.\DIRECTORY_SEPARATOR.'Container0fl0nb0');