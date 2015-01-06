<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class Php extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.php.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'upload_limit' => [
                'title'             => 'indikator.backend::lang.properties.upload_limit',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'memory_limit' => [
                'title'             => 'indikator.backend::lang.properties.memory_limit',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'timezone' => [
                'title'             => 'indikator.backend::lang.properties.timezone',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['upload_limit'] = str_replace('M', ' MB', ini_get('upload_max_filesize'));
        $this->vars['memory_limit'] = str_replace('M', ' MB', ini_get('memory_limit'));
        $this->vars['timezone'] = str_replace('/', ' / ', ini_get('date.timezone'));
    }
}
