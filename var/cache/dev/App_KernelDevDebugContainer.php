<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHxLBxS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHxLBxS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHxLBxS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHxLBxS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHxLBxS\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHxLBxS',
    'container.build_id' => '3af8444f',
    'container.build_time' => 1688385251,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHxLBxS');
