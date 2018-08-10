<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use System\Classes\UpdateManager;
use Cms\Models\MaintenanceSetting;
use Db;
use File;

class Status extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'indikator.backend::lang.widgets.system.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'webpage' => [
                'title'   => 'indikator.backend::lang.properties.webpage',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'updates' => [
                'title'   => 'indikator.backend::lang.properties.updates',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'plugins' => [
                'title'   => 'indikator.backend::lang.properties.plugins',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'themes' => [
                'title'   => 'indikator.backend::lang.properties.themes',
                'default' => true,
                'type'    => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $manager = UpdateManager::instance();
        $manager->requestUpdateList();

        $this->vars['inMaintenance'] = MaintenanceSetting::get('is_enabled');
        $this->vars['updates'] = Db::table('system_parameters')->where('item', 'count')->value('value');
        $this->vars['plugins'] = Db::table('system_plugin_versions')->count();

        $count = 0;

        if ($themes = opendir('themes')) {
            while (false !== ($theme = readdir($themes))) {
                if ($theme != '.' && $theme != '..' && !File::isFile($theme)) {
                    $count++;
                }
            }

            closedir($themes);
        }

        $this->vars['themes'] = $count;
    }
}
