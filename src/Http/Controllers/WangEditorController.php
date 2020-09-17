<?php

namespace Dcat\Admin\Extension\WangEditor\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

use Dcat\Admin\Extension\WangEditor\WangEditor;

use Illuminate\Support\Facades\Storage;

class WangEditorController extends Controller
{
    // todo: 根据 config 验证 上传文件数 / 文件大小
    public function upFile(Request $request)
    {
        $request->validate([
            'files' => 'file',
        ]);

        $disk = WangEditor::make()->config('disk', config('admin.upload.disk'));
        $storage = Storage::disk($disk);

        $urls = [];
        foreach ($request->allFiles() as $file) {
            $path = $storage->putFile('files', $file);
            $urls[] = $storage->url($path);
        }

        return response()->json([
            'errno' => 0,
            'data' => $urls,
        ]);
    }
}
