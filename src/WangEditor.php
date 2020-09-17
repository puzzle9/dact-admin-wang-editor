<?php

namespace Dcat\Admin\Extension\WangEditor;

use Dcat\Admin\Extension;

class WangEditor extends Extension
{
    const NAME = 'wang-editor';

    protected $serviceProvider = WangEditorServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';
}
