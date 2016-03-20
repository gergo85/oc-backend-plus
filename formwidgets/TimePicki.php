<?php namespace Indikator\Backend\FormWidgets;

use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;

class TimePicki extends FormWidgetBase
{
    protected $defaultAlias = 'timepicki';

    public $increaseDirection = 'down';

    public $customClasses = '';

    public $minHourValue = 0;

    public $maxHourValue = 23;

    public $showMeridian = false;

    public $stepSizeHours = 1;

    public $stepSizeMinutes = 1;

    public $overflowMinutes = false;

    public $disableKeyboardMobile = false;

    public $reset = false;

    public function init()
    {
        $this->fillFromConfig([
            'increaseDirection',
            'customClasses',
            'minHourValue',
            'maxHourValue',
            'showMeridian',
            'stepSizeHours',
            'stepSizeMinutes',
            'overflowMinutes',
            'disableKeyboardMobile',
            'reset'
        ]);
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('timepicki');
    }

    protected function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;

        $this->vars['increaseDirection'] = $this->increaseDirection;
        $this->vars['customClasses'] = $this->customClasses;
        $this->vars['minHourValue'] = $this->minHourValue;
        $this->vars['maxHourValue'] = $this->maxHourValue;
        $this->vars['showMeridian'] = $this->showMeridian;
        $this->vars['stepSizeHours'] = $this->stepSizeHours;
        $this->vars['stepSizeMinutes'] = $this->stepSizeMinutes;
        $this->vars['overflowMinutes'] = $this->overflowMinutes;
        $this->vars['disableKeyboardMobile'] = $this->disableKeyboardMobile;
        $this->vars['reset'] = $this->reset;
    }

    protected function loadAssets()
    {
        $this->addCss('/plugins/indikator/backend/formwidgets/timepicki/assets/css/timepicki.css');
        $this->addJs('/plugins/indikator/backend/formwidgets/timepicki/assets/js/timepicki.js');
    }

    public function getSaveValue($value)
    {
        if ($this->formField->disabled) {
            return FormField::NO_SAVE_DATA;
        }

        if (!strlen($value)) {
            return null;
        }

        $value = substr($value, 0, 5).':00';
        
        return $value;
    }
}
