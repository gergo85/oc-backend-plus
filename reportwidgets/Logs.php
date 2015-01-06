<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use DB;

class Logs extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.logs.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'access' => [
                'title'             => 'indikator.backend::lang.properties.access',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'event' => [
                'title'             => 'indikator.backend::lang.properties.event',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'request' => [
                'title'             => 'indikator.backend::lang.properties.request',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'total' => [
                'title'             => 'indikator.backend::lang.properties.total',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['access'] = DB::table('backend_access_log')->count();
        $this->vars['event'] = DB::table('system_event_logs')->count();
        $this->vars['request'] = DB::table('system_request_logs')->count();
    }
}
