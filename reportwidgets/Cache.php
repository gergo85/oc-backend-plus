<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class Cache extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.cache.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ]
        ];
    }

    public function onClearCache()
    {
        \Artisan::call('cache:clear');
        try {
            \Artisan::call('view:clear');
        }
        catch (Exception $ex) {
            // ...
        }

        return [
            'partial' => $this->makePartial('widget', ['size' => $this->loadData()])
        ];
    }

    protected function loadData()
    {
        $this->vars['cache']     = $this->formatSize($cache = $this->folderSize(storage_path().'/cms/cache'));
        $this->vars['combiner']  = $this->formatSize($combiner = $this->folderSize(storage_path().'/cms/combiner'));
        $this->vars['twig']      = $this->formatSize($twig = $this->folderSize(storage_path().'/cms/twig'));
        $this->vars['framework'] = $this->formatSize($framework = $this->folderSize(storage_path().'/framework/cache'));
        $this->vars['all']       = $this->formatSize($cache + $combiner + $twig + $framework);
    }

    protected function formatSize($size)
    {
        return round($size / 1024, 0).' KB';
    }

    protected function folderSize($directory)
    {
        if (count(scandir($directory)) == 2) {
            return 0;
        }

        $size = 0;

        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file) {
            $size += $file->getSize();
        }

        return $size;
    }
}
