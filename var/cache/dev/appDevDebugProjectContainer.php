<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTtw6akg\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTtw6akg/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTtw6akg.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTtw6akg\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTtw6akg\appDevDebugProjectContainer();