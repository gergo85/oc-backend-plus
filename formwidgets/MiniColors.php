<?php namespace Indikator\Backend\FormWidgets;

use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;

class MiniColors extends FormWidgetBase
{
    protected $defaultAlias = 'minicolors';

    public $animationSpeed = 50;

    public $animationEasing = 'swing';

    public $changeDelay = 0;

    public $control = 'hue';

    public $format = 'hex';

    public $hideSpeed = 100;

    public $keywords = '';

    public $letterCase = 'lowercase';

    public $position = 'bottom left';

    public $showSpeed = 100;

    public function init()
    {
        $this->fillFromConfig([
            'animationSpeed',
            'animationEasing',
            'changeDelay',
            'control',
            'format',
            'hideSpeed',
            'keywords',
            'letterCase',
            'position',
            'showSpeed'
        ]);
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('minicolors');
    }

    protected function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;

        $this->vars['animationSpeed'] = $this->animationSpeed;
        $this->vars['animationEasing'] = $this->animationEasing;
        $this->vars['changeDelay'] = $this->changeDelay;
        $this->vars['control'] = $this->control;
        $this->vars['format'] = $this->format;
        $this->vars['hideSpeed'] = $this->hideSpeed;
        $this->vars['keywords'] = $this->keywords;
        $this->vars['letterCase'] = $this->letterCase;
        $this->vars['position'] = $this->position;
        $this->vars['showSpeed'] = $this->showSpeed;
    }

    protected function loadAssets()
    {
        $this->addCss('/plugins/indikator/backend/formwidgets/minicolors/assets/css/minicolors.css');
        $this->addJs('/plugins/indikator/backend/formwidgets/minicolors/assets/js/minicolors.js');
    }

    public function getSaveValue($value)
    {
        return trim($value);
    }
}
