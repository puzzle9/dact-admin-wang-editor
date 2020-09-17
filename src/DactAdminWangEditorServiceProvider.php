<?php

namespace puzzle9\DactAdminWangEditor;

use Dcat\Admin\Form;
use Illuminate\Support\ServiceProvider;

class DactAdminWangEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $extension = DactAdminWangEditor::make();

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, DactAdminWangEditor::NAME);
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