<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUT0CoEk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUT0CoEk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUT0CoEk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUT0CoEk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUT0CoEk\App_KernelDevDebugContainer([
    'container.build_hash' => 'UT0CoEk',
    'container.build_id' => '7726e48e',
    'container.build_time' => 1674983597,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUT0CoEk');
