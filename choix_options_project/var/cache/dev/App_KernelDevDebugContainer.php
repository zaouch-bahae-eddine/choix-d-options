<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWHtzgtk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWHtzgtk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWHtzgtk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWHtzgtk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWHtzgtk\App_KernelDevDebugContainer([
    'container.build_hash' => 'WHtzgtk',
    'container.build_id' => '29324753',
    'container.build_time' => 1674690113,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWHtzgtk');
