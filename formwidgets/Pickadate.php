<?php namespace Indikator\Backend\FormWidgets;

use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;
use App;
use File;

class Pickadate extends FormWidgetBase
{
    const TIME_PREFIX = '___time_';

    protected $defaultAlias = 'pickadate';

    public $mode = 'datetime';

    public $selectYears = false;

    public $selectMonths = false;

    public $interval = 30;

    public function init()
    {
        $this->fillFromConfig([
            'mode',
            'selectYears',
            'selectMonths',
            'interval'
        ]);

        $this->mode = strtolower($this->mode);
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('pickadate');
    }

    protected function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['field'] = $this->formField;

        $this->vars['timeName'] = self::TIME_PREFIX.$this->formField->getName(false);
        $this->vars['timeValue'] = null;

        if ($value = $this->getLoadValue()) {
            // Date and time
            if ($this->mode == 'datetime') {
                if (is_object($value)) {
                    $value = $value->toDateTimeString();
                }

                $dateTime = explode(' ', $value);
                $value = $dateTime[0];

                $this->vars['timeValue'] = isset($dateTime[1]) ? substr($dateTime[1], 0, 5) : '';
            }

            // Only date
            else if ($this->mode == 'date') {
                if (is_string($value)) {
                    $value = substr($value, 0, 10);
                }
                else if (is_object($value)) {
                    $value = $value->toDateString();
                }
            }

            // Only time
            elseif ($this->mode == 'time') {
                if (is_object($value)) {
                    $value = $value->toTimeString();
                }
            }
        }

        $this->vars['value'] = $value ?: '';
        $this->vars['mode'] = $this->mode;
        $this->vars['selectYears'] = $this->selectYears;
        $this->vars['selectMonths'] = $this->selectMonths;
        $this->vars['interval'] = $this->interval;
    }

    protected function loadAssets()
    {
        // Default
        $this->addCss('/plugins/indikator/backend/formwidgets/pickadate/assets/css/default.css');
        $this->addJs('/plugins/indikator/backend/formwidgets/pickadate/assets/js/picker.js');

        // Date
        $this->addCss('/plugins/indikator/backend/formwidgets/pickadate/assets/css/default.date.css');
        $this->addJs('/plugins/indikator/backend/formwidgets/pickadate/assets/js/picker.date.js');

        // Time
        $this->addCss('/plugins/indikator/backend/formwidgets/pickadate/assets/css/default.time.css');
        $this->addJs('/plugins/indikator/backend/formwidgets/pickadate/assets/js/picker.time.js');

        // Locale
        $locale = App::getLocale();
        if ($locale != 'en' && File::exists('plugins/indikator/backend/formwidgets/pickadate/assets/js/translations/'.$locale.'.js')) {
            $this->addJs('/plugins/indikator/backend/formwidgets/pickadate/assets/js/translations/'.$locale.'.js');
        }
    }

    public function getSaveValue($value)
    {
        if ($this->formField->disabled) {
            return FormField::NO_SAVE_DATA;
        }

        if (!strlen($value)) {
            return null;
        }

        $timeValue = post(self::TIME_PREFIX.$this->formField->getName(false));

        if ($this->mode == 'datetime' && $timeValue) {
            $value .= ' '.$timeValue.':00';
        }

        else if ($this->mode == 'time') {
            $value = substr($value, 0, 5).':00';
        }

        return $value;
    }
}
