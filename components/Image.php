<?php namespace Indikator\Backend\Components;

use Cms\Classes\ComponentBase;

class Image extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.backend::lang.component.image.name',
            'description' => 'indikator.backend::lang.component.image.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'width' => [
                'title'             => 'indikator.backend::lang.properties.width',
                'type'              => 'string',
                'default'           => '400',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'indikator.backend::lang.widgets.images.error'
            ],
            'height' => [
                'title'             => 'indikator.backend::lang.properties.height',
                'type'              => 'string',
                'default'           => '200',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'indikator.backend::lang.widgets.images.error'
            ],
            'text' => [
                'title'             => 'indikator.backend::lang.properties.text',
                'type'              => 'string',
                'default'           => ''
            ]
        ];
    }

    public function onRun()
    {
        $this->page['width'] = $this->property('width');
        $this->page['height'] = $this->property('height');

        if ($this->property('text') == '') $this->page['text'] = '';
        else $this->page['text'] = '&text='.urlencode($this->property('text'));
    }
}
