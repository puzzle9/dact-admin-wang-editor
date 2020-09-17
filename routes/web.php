<?php

use Dcat\Admin\Extension\WangEditor\Http\Controllers;

Route::post('wang-editor/upFile', Controllers\WangEditorController::class.'@upFile')->middleware(config('admin.route.middleware'))->name('WangEditorUpFile');
