<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQuBEdun\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQuBEdun/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQuBEdun.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQuBEdun\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQuBEdun\App_KernelDevDebugContainer([
    'container.build_hash' => 'QuBEdun',
    'container.build_id' => '77da9ab8',
    'container.build_time' => 1674466236,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQuBEdun');