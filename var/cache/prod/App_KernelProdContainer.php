<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBJxAC0Y\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBJxAC0Y/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBJxAC0Y.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBJxAC0Y\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerBJxAC0Y\App_KernelProdContainer([
    'container.build_hash' => 'BJxAC0Y',
    'container.build_id' => '978f8f93',
    'container.build_time' => 1687786250,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBJxAC0Y');
