<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXOGT0OR\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXOGT0OR/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXOGT0OR.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXOGT0OR\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerXOGT0OR\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'XOGT0OR',
    'container.build_id' => '5491bce1',
    'container.build_time' => 1532774254,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXOGT0OR');
