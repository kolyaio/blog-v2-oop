<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIZjV3SY\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIZjV3SY/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIZjV3SY.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIZjV3SY\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerIZjV3SY\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'IZjV3SY',
    'container.build_id' => '17a2f406',
    'container.build_time' => 1532727115,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIZjV3SY');