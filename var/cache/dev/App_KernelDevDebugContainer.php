<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYfKuEPn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYfKuEPn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYfKuEPn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYfKuEPn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYfKuEPn\App_KernelDevDebugContainer([
    'container.build_hash' => 'YfKuEPn',
    'container.build_id' => 'c39e7856',
    'container.build_time' => 1688120517,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYfKuEPn');
