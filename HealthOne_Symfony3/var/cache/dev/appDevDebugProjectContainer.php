<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOpdfwg7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOpdfwg7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOpdfwg7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOpdfwg7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerOpdfwg7\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Opdfwg7',
    'container.build_id' => '16e3fdeb',
    'container.build_time' => 1544094236,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOpdfwg7');
