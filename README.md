Dcat Admin扩展 - WangEditor
======

注: 使用此扩展将会导致 `/admin/helpers/extensions` 打开报错
因  配置文件不是 key / value 格式

`WangEditor` [4.x](https://github.com/wangeditor-team/we-next) 版本编辑器

<http://www.wangeditor.com/doc/>

## 安装

```sh
composer require dcat-admin-extensions/WangEditor
```

```sh
php artisan admin:import WangEditor
```

`config/admin-extensions.php`

```php
    'extensions' => [
        'wang-editor' => [
            'enable' => true,
            // 储存 disk
            'disk' => 'public',
            // http://www.wangeditor.com/doc/pages/03-配置菜单/
            'config' => [
                // 粘贴样式的过滤
                'pasteFilterStyle' => true,
                // 粘贴内容中的图片
                'pasteIgnoreImg' => true,
                // 上传图片大小
                'uploadImgMaxSize' => 5 * 1024 * 1024, // 2M
                // 一次最多能传几张图片
                'uploadImgMaxLength' => 5,
                // 插入网络图片的功能
                'showLinkImg' => false,
                // 菜单
                'menus' => [
                    'head',
                    'bold',
                    'customFontSize',
                    'fontName',
                    'italic',
                    'underline',
                    'strikeThrough',
                    'indent',
                    'lineHeight',
                    'foreColor',
                    'backColor',
                    // 'link',
                    'list',
                    'justify',
                    // 'quote',
                    // 'emoticon',
                    'image',
                    // 'video',
                    // 'table',
                    // 'code',
                    'splitLine',
                    'undo',
                    'redo',
                ],
            ],
        ],
    ],
```
## 使用

### 基本使用
```php
$form->editor('content')->height(500)->required();
```

### 修改编辑器高度
```php
$form->editor('content')->height(500);
```
