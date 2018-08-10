<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

class Rss extends ReportWidgetBase
{
    public function render()
    {
        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'indikator.backend::lang.widgets.rss.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'rss' => [
                'title'   => 'indikator.backend::lang.properties.rss_title',
                'default' => 'indikator.backend::lang.properties.rss_url',
                'type'    => 'string'
            ],
            'news' => [
                'title'   => 'indikator.backend::lang.properties.news',
                'default' => 5,
                'type'    => 'dropdown',
                'options' => [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10]
            ],
            'date' => [
                'title'   => 'indikator.backend::lang.properties.date',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'description' => [
                'title'   => 'indikator.backend::lang.properties.description',
                'default' => true,
                'type'    => 'checkbox'
            ]
        ];
    }
}
