<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6tegdwj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6tegdwj/appProdProjectContainer.php') {
    touch(__DIR__.'/Container6tegdwj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container6tegdwj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container6tegdwj\appProdProjectContainer([
    'container.build_hash' => '6tegdwj',
    'container.build_id' => 'b6d97088',
    'container.build_time' => 1643119100,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6tegdwj');
