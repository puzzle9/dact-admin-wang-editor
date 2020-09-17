<?php

namespace puzzle9\DactAdminWangEditor;

use Dcat\Admin\Extension;

class DactAdminWangEditor extends Extension
{
    const NAME = 'dact-admin-wang-editor';

    protected $serviceProvider = DactAdminWangEditorServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';
}
