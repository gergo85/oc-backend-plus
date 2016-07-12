<?php namespace Indikator\Backend;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use Backend\Classes\Controller as BackendController;
use Backend;
use BackendAuth;
use Event;

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
            ],
            'Indikator\Backend\ReportWidgets\Cache' => [
                'label'   => 'indikator.backend::lang.widgets.cache.title',
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

    public function registerFormWidgets()
    {
        return [
            'Indikator\Backend\FormWidgets\Pickadate' => [
                'label' => 'Pickadate',
                'code'  => 'pickadate'
            ],
            'Indikator\Backend\FormWidgets\TimePicki' => [
                'label' => 'TimePicki',
                'code'  => 'timepicki'
            ],
            'Indikator\Backend\FormWidgets\MiniColors' => [
                'label' => 'MiniColors',
                'code'  => 'minicolors'
            ]
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function($form)
        {
            if ($form->model instanceof Backend\Models\Preference) {
                $form->addTabFields([
                    'rounded_avatar' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_display',
                        'label'   => 'indikator.backend::lang.settings.avatar_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.avatar_comment'
                    ],
                    'sidebar_description' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_display',
                        'label'   => 'indikator.backend::lang.settings.sidebar_desc_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.sidebar_desc_comment'
                    ],
                    'sidebar_search' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_display',
                        'label'   => 'indikator.backend::lang.settings.sidebar_search_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.sidebar_search_comment'
                    ],
                    'more_themes' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_display',
                        'label'   => 'indikator.backend::lang.settings.themes_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.themes_comment'
                    ],
                    'focus_searchfield' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_behavior',
                        'label'   => 'indikator.backend::lang.settings.search_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.search_comment'
                    ],
                    'form_clearbutton' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_behavior',
                        'label'   => 'indikator.backend::lang.settings.clearbutton_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.clearbutton_comment'
                    ],
                    'virtual_keyboard' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_behavior',
                        'label'   => 'indikator.backend::lang.settings.keyboard_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.keyboard_comment'
                    ],
                    'delete_plugin' => [
                        'tab'     => 'indikator.backend::lang.settings.tab_behavior',
                        'label'   => 'indikator.backend::lang.settings.delete_plugin_label',
                        'type'    => 'switch',
                        'default' => 'false',
                        'comment' => 'indikator.backend::lang.settings.delete_plugin_comment'
                    ]
                ]);
            }
        });

        BackendController::extend(function($controller)
        {
            if (BackendAuth::check()) {
                $preferenceModel = class_exists('Backend\Models\UserPreference')
                    ? Backend\Models\UserPreference::forUser()
                    : Backend\Models\UserPreferences::forUser();
                $preferences = $preferenceModel->get('backend::backend.preferences');

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

                if (isset($preferences['sidebar_description']) && $preferences['sidebar_description']) {
                    $controller->addCss('/plugins/indikator/backend/assets/css/sidebar-description.css');
                }

                if (isset($preferences['more_themes']) && $preferences['more_themes']) {
                    $controller->addJs('/plugins/indikator/backend/assets/js/setting-theme.js');
                }

                if (isset($preferences['delete_plugin']) && $preferences['delete_plugin'] && PluginManager::instance()->exists('October.Demo')) {
                    PluginManager::instance()->deletePlugin('October.Demo');
                }
            }
        });
    }
}
