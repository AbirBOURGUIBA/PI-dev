<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNhkbr35\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNhkbr35/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNhkbr35.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNhkbr35\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNhkbr35\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Nhkbr35',
    'container.build_id' => '59da0760',
    'container.build_time' => 1646737212,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNhkbr35');