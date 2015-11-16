<?php namespace Indikator\Backend;

use System\Classes\PluginBase;
use Backend\Classes\Controller as BackendController;
use Event;
use Backend;
use BackendAuth;
use Backend\Models\UserPreferences;
use System\Classes\PluginManager;
use File;
use BackendMenu;

class Plugin extends PluginBase
{
    public $elevated = true;

    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.backend::lang.plugin.name',
            'description' => 'indikator.backend::lang.plugin.description',
            'author'      => 'indikator.backend::lang.plugin.author',
            'icon'        => 'icon-cogs',
            'homepage'    => 'https://github.com/gergo85/oc-backend-plus'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\Backend\ReportWidgets\Status' => [
                'label'   => 'indikator.backend::lang.widgets.system.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Version' => [
                'label'   => 'indikator.backend::lang.widgets.version.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Logs' => [
                'label'   => 'indikator.backend::lang.widgets.logs.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Admins' => [
                'label'   => 'indikator.backend::lang.widgets.admins.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Logins' => [
                'label'   => 'indikator.backend::lang.widgets.logins.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Server' => [
                'label'   => 'indikator.backend::lang.widgets.server.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Php' => [
                'label'   => 'indikator.backend::lang.widgets.php.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Rss' => [
                'label'   => 'indikator.backend::lang.widgets.rss.title',
                'context' => 'dashboard'
            ],
            'Indikator\Backend\ReportWidgets\Images' => [
                'label'   => 'indikator.backend::lang.widgets.images.title',
                'context' => 'dashboard'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Indikator\Backend\Components\Image' => 'image',
            'Indikator\Backend\Components\Text'  => 'text'
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function($form)
        {
            if ($form->model instanceof Backend\Models\BackendPreferences) {
                $form->addFields([
                    'focus_searchfield' => [
                        'label'   => 'indikator.backend::lang.settings.search_label',
                        'type'    => 'switch',
                        'span'    => 'left',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.search_comment'
                    ],
                    'rounded_avatar' => [
                        'label'   => 'indikator.backend::lang.settings.avatar_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.avatar_comment'
                    ],
                    'form_clearbutton' => [
                        'label'   => 'indikator.backend::lang.settings.clearbutton_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.clearbutton_comment'
                    ],
                    'virtual_keyboard' => [
                        'label'   => 'indikator.backend::lang.settings.keyboard_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.keyboard_comment'
                    ],
                    'sidebar_description' => [
                        'label'   => 'indikator.backend::lang.settings.sidebar_desc_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.sidebar_desc_comment'
                    ],
                    'sidebar_search' => [
                        'label'   => 'indikator.backend::lang.settings.sidebar_search_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.sidebar_search_comment'
                    ],
                    'media_menu' => [
                        'label'   => 'indikator.backend::lang.settings.media_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.media_comment'
                    ],
                    'more_themes' => [
                        'label'   => 'indikator.backend::lang.settings.themes_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.themes_comment'
                    ],
                    'delete_plugin' => [
                        'label'   => 'indikator.backend::lang.settings.delete_plugin_label',
                        'type'    => 'switch',
                        'span'    => 'auto',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.delete_plugin_comment'
                    ]
                ]);
            }
        });

        BackendController::extend(function($controller)
        {
            if (BackendAuth::check()) {
                $preferences = UserPreferences::forUser()->get('backend::backend.preferences');

                if (isset($preferences['focus_searchfield']) && $preferences['focus_searchfield']) {
                    $controller->addJs('/plugins/indikator/backend/assets/js/setting-search.js');
                }

                if (isset($preferences['rounded_avatar']) && $preferences['rounded_avatar']) {
                    $controller->addCss('/plugins/indikator/backend/assets/css/rounded-avatar.css');
                }

                if (isset($preferences['form_clearbutton']) && $preferences['form_clearbutton']) {
                    $controller->addJs('/plugins/indikator/backend/assets/js/form-clearbutton.js');
                }

                if (isset($preferences['virtual_keyboard']) && $preferences['virtual_keyboard']) {
                    $controller->addCss('/plugins/indikator/backend/assets/css/ml-keyboard.css');
                    $controller->addJs('/plugins/indikator/backend/assets/js/ml-keyboard.js');
                }

                if (isset($preferences['sidebar_search']) && $preferences['sidebar_search']) {
                    $controller->addCss('/plugins/indikator/backend/assets/css/sidebar-search.css');
                }

                if (isset($preferences['media_menu']) && $preferences['media_menu']) {
                    if (PluginManager::instance()->exists('RainLab.Pages')) {
                        $controller->addCss('/plugins/indikator/backend/assets/css/media-menu-pages.css');
                    }
                    else {
                        $controller->addCss('/plugins/indikator/backend/assets/css/media-menu.css');
                    }
                }

                if (isset($preferences['more_themes']) && $preferences['more_themes']) {
                    $controller->addJs('/plugins/indikator/backend/assets/js/setting-theme.js');
                }

                if (isset($preferences['delete_plugin']) && $preferences['delete_plugin'] && File::exists('plugins/october/demo')) {
                    File::deleteDirectory('plugins/october/demo');
                }
            }
        });

        BackendMenu::registerContextSidenavPartial(
            'October.System',
            'system',
            '~/plugins/indikator/backend/partials/_system_sidebar.htm'
        );
    }
}
