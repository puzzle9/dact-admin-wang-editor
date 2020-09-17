<?php

use puzzle9\DactAdminWangEditor\Http\Controllers;

Route::post('wang-editor/upFile', Controllers\DactAdminWangEditorController::class.'@upFile')->middleware(config('admin.route.middleware'))->name('WangEditorUpFile');