<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use System\Classes\UpdateManager;
use Cms\Models\MaintenanceSettings;
use DB;

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
                'title'             => 'indikator.backend::lang.properties.webpage',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'updates' => [
                'title'             => 'indikator.backend::lang.properties.updates',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'plugins' => [
                'title'             => 'indikator.backend::lang.properties.plugins',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'themes' => [
                'title'             => 'indikator.backend::lang.properties.themes',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $manager = UpdateManager::instance();
        $manager->requestUpdateList();

        $this->vars['inMaintenance'] = MaintenanceSettings::get('is_enabled');
        $this->vars['updates'] = DB::table('system_parameters')->where('item', 'count')->pluck('value');
        $this->vars['plugins'] = DB::table('system_plugin_versions')->count();

        $themes = 0;

        if ($handle = opendir('themes')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != '.' && $entry != '..' && !is_file($entry)) {
                    $themes++;
                }
            }

            closedir($handle);
        }

        $this->vars['themes'] = $themes;
    }
}
