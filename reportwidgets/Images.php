<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Lang;

class Images extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.images.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'category' => [
                'title'             => 'indikator.backend::lang.properties.category',
                'default'           => '',
                'type'              => 'dropdown',
                'options'           => ['' => Lang::get('indikator.backend::lang.category.all'), 'abstract' => Lang::get('indikator.backend::lang.category.abstract'), 'animals' => Lang::get('indikator.backend::lang.category.animals'), 'business' => Lang::get('indikator.backend::lang.category.business'), 'cats' => Lang::get('indikator.backend::lang.category.cats'), 'city' => Lang::get('indikator.backend::lang.category.city'), 'food' => Lang::get('indikator.backend::lang.category.food'), 'nightlife' => Lang::get('indikator.backend::lang.category.nightlife'), 'fashion' => Lang::get('indikator.backend::lang.category.fashion'), 'people' => Lang::get('indikator.backend::lang.category.people'), 'nature' => Lang::get('indikator.backend::lang.category.nature'), 'sports' => Lang::get('indikator.backend::lang.category.sports'), 'technics' => Lang::get('indikator.backend::lang.category.technics'), 'transport' => Lang::get('indikator.backend::lang.category.transport')]
            ],
            'type' => [
                'title'             => 'indikator.backend::lang.properties.type',
                'default'           => 'simple',
                'type'              => 'dropdown',
                'options'           => ['simple' => Lang::get('indikator.backend::lang.widgets.images.simple'), 'slideshow' => Lang::get('indikator.backend::lang.widgets.images.slideshow')]
            ],
            'number' => [
                'title'             => 'indikator.backend::lang.properties.number',
                'default'           => 6,
                'type'              => 'string',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'indikator.backend::lang.widgets.images.error'
            ],
            'width' => [
                'title'             => 'indikator.backend::lang.properties.width',
                'default'           => 960,
                'type'              => 'string',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'indikator.backend::lang.widgets.images.error'
            ],
            'height' => [
                'title'             => 'indikator.backend::lang.properties.height',
                'default'           => 540,
                'type'              => 'string',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'indikator.backend::lang.widgets.images.error'
            ]
        ];
    }
}
