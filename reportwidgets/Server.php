<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Request;

class Server extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.server.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'host' => [
                'title'   => 'indikator.backend::lang.properties.url',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'ip' => [
                'title'   => 'indikator.backend::lang.properties.ip',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'os' => [
                'title'   => 'indikator.backend::lang.properties.os',
                'default' => true,
                'type'    => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['host'] = php_uname('n');
        $this->vars['ip']   = Request::ip();
        $this->vars['os']   = php_uname('s');

        foreach ($this->vars as $key=>$item) {
            $this->vars[$key] = utf8_encode($this->vars[$key]);
        }
    }
}
