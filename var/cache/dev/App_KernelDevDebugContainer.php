<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBjny1ac\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBjny1ac/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBjny1ac.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBjny1ac\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBjny1ac\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bjny1ac',
    'container.build_id' => 'bc33f0a5',
    'container.build_time' => 1602950224,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBjny1ac');
