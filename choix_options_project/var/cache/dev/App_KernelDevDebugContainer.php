<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQDeBCLg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQDeBCLg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQDeBCLg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQDeBCLg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQDeBCLg\App_KernelDevDebugContainer([
    'container.build_hash' => 'QDeBCLg',
    'container.build_id' => 'deae9f31',
    'container.build_time' => 1675088345,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQDeBCLg');
