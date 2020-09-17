<?php

namespace Dcat\Admin\Extension\WangEditor;

use Dcat\Admin\Form;
use Illuminate\Support\ServiceProvider;

class WangEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $extension = WangEditor::make();

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, WangEditor::NAME);
        }

        $this->app->booted(function () use ($extension) {
            $extension->routes(__DIR__.'/../routes/web.php');
        });

        Form::extend('editor', Editor::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
