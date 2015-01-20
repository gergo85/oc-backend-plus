<?php namespace Indikator\Backend\Components;

use Cms\Classes\ComponentBase;
use Lang;

class Text extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.backend::lang.component.text.name',
            'description' => 'indikator.backend::lang.component.text.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'length' => [
                'title'   => 'indikator.backend::lang.component.text.length',
                'default' => 'some',
                'type'    => 'dropdown',
                'options' => ['bit' => Lang::get('indikator.backend::lang.component.text.bit'), 'some' => Lang::get('indikator.backend::lang.component.text.some'), 'lots' => Lang::get('indikator.backend::lang.component.text.lots')]
            ]
        ];
    }

    public function onRun()
    {
        $loremtext = array(
            'bit' => 'Lorem ipsum Reprehenderit do dolore irure.',
            'some' => 'Lorem ipsum Amet aliqua exercitation pariatur quis cupidatat officia aliquip magna nulla enim amet deserunt reprehenderit sit dolor irure culpa esse.',
            'lots' => 'Lorem ipsum Sed velit occaecat exercitation aliqua sit ex minim mollit minim exercitation velit dolor reprehenderit exercitation in enim anim ullamco aliqua sed consequat dolore eiusmod ut in aliqua sit deserunt Ut irure tempor irure exercitation exercitation irure exercitation.'
        );

        $this->page['text'] = $loremtext[$this->property('length')];
    }
}
