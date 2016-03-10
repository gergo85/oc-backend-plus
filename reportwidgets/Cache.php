<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Backend\Models\UserPreferences;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Exception;

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

    public function onClear()
    {
        \Artisan::call('cache:clear');

        return [
            'partial' => $this->makePartial('widget', ['size' => $this->loadData()])
        ];
    }

    protected function loadData()
    {
        $this->vars['cache']  = $this->formatSize($cache = $this->folderSize(storage_path().'/cms/cache'));
        $this->vars['combiner'] = $this->formatSize($combiner = $this->folderSize(storage_path().'/cms/combiner'));
        $this->vars['twig'] = $this->formatSize($twig = $this->folderSize(storage_path().'/cms/twig'));
        $this->vars['framework'] = $this->formatSize($framework = $this->folderSize(storage_path().'/framework/cache'));
        $this->vars['all'] = $this->formatSize($cache + $combiner + $twig + $framework);
    }

    protected function formatSize($size)
    {
        if ($size > 0) {
            $name = ['B', 'KB', 'MB', 'GB', 'TB'];
            $common = ['au', 'bn', 'bw', 'ch', 'cn', 'do', 'eg', 'gt', 'hk', 'hn', 'ie', 'il', 'in', 'jp', 'ke', 'kp', 'kr', 'lb', 'lk', 'mn', 'mo', 'mt', 'mx', 'my', 'ng', 'ni', 'np', 'nz', 'pa', 'ph', 'pk', 'sg', 'th', 'tw', 'tz', 'ug', 'uk', 'us', 'zw'];

            for ($i = 0; $size >= 1024; $i++) {
                $size /= 1024;

                if ($i < 1) {
                    $size = round($size, 0);
                }
                else {
                    $size = round($size, 1);
                }
            }

            $preferences = UserPreferences::forUser()->get('backend::backend.preferences');

            if (!in_array($preferences['locale'], $common)) {
                $size = str_replace('.', ',', $size);
            }

            return $size.' '.$name[$i];
        }

        return '0 B';
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
