<?php

namespace puzzle9\DactAdminWangEditor;

use Dcat\Admin\Form\Field;
use Illuminate\Support\Str;

class Editor extends Field
{
    protected static $js = [
        '@extension/dact-admin-wang-editor/wangEditor.min.js',
    ];

    protected $options = [

    ];

    protected $view = 'dact-admin-wang-editor::editor';

    /**
     * 设置编辑器高度
     * @param int $height 高度 xx px
     * @return Editor
     */
    public function height(int $height)
    {
        $this->options['height'] = $height;
        return $this;
    }

    protected function generateId()
    {
        return 'editor-'.Str::random(8);
    }

    public function render()
    {
        $this->attribute('id', $id = $this->generateId());

        $name = $this->formatName($this->column);

        $config = json_encode(array_merge(DactAdminWangEditor::make()->config('config', []), $this->options));

        $uploadImgServer = route('WangEditorUpFile');

        $this->script = <<<JS
const E = window.wangEditor
var editor = new E(replaceNestedFormIndex('#{$this->id}'))
Object.assign(editor.config, {$config})
editor.config.onchange = (html) => $('input[name=$name]').val(html)

editor.config.uploadImgServer = '$uploadImgServer'
editor.config.uploadFileName = 'files'
editor.config.withCredentials = true
editor.create()
JS;

        return parent::render();
    }
}
