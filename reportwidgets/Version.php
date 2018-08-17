<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Db;

class Version extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.version.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'cms' => [
                'title'   => 'indikator.backend::lang.properties.cms',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'php' => [
                'title'   => 'indikator.backend::lang.properties.php',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'gd' => [
                'title'   => 'indikator.backend::lang.properties.gd',
                'default' => true,
                'type'    => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['cms'] = substr(Db::table('system_parameters')->where('item', 'build')->value('value'), 1, -1);
        $this->vars['php'] = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION.'.'.PHP_RELEASE_VERSION;

        $gd = gd_info();
        $this->vars['gd'] = trim(str_replace(['bundled', 'compatible', '(', ')'], '', $gd['GD Version']));
    }
}
