<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQXzXWzN\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQXzXWzN/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQXzXWzN.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQXzXWzN\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerQXzXWzN\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'QXzXWzN',
    'container.build_id' => '85d17bd1',
    'container.build_time' => 1532777270,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerQXzXWzN');
