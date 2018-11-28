<?php namespace Wiz\Blog;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = [
        'ToughDeveloper.ImageResizer',
    ];

    public function pluginDetails()
    {
        return [
            'name' => 'Blog',
            'description' => 'Allows management of blog posts and tags',
            'author' => 'Wiz Comunicaciones',
            'icon' => 'oc-icon-cogs',
            'iconSvg' =>  'plugins/wiz/blog/assets/images/plugin-icon.svg',
            'homepage' => 'https://github.com/bombozama/wiz-cl'
        ];
    }

    public function boot()
    {

    }
    
    public function registerNavigation()
    {
        return [
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('wiz/blog/posts'),
                'icon'        => 'icon-newspaper-o',
                'iconSvg'     => 'plugins/wiz/blog/assets/images/plugin-icon.svg',
                'order'       => 200,
                'permissions' => ['wiz.blog.manage_posts'],
            ]
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'wiz_blog_image'           => ['Wiz\Blog\Classes\ListColumnTypes', 'imageColumnType'],
            'wiz_blog_translate_id'    => ['Wiz\Blog\Classes\ListColumnTypes', 'translateIdColumnType'],
            'wiz_blog_url'             => ['Wiz\Blog\Classes\ListColumnTypes', 'urlColumnType'],
            'wiz_blog_html'            => ['Wiz\Blog\Classes\ListColumnTypes', 'htmlColumnType'],
            'wiz_blog_attachmentcount' => ['Wiz\Blog\Classes\ListColumnTypes', 'attachmentCountColumnType'],
            'wiz_blog_number'          => ['Wiz\Blog\Classes\ListColumnTypes', 'numberColumnType'],
            'wiz_blog_translate_opts'  => ['Wiz\Blog\Classes\ListColumnTypes', 'optionsColumnType'],
        ];
    }
}