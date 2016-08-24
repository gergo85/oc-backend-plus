<?php namespace Indikator\Backend\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use System\Classes\SettingsManager;
use File;
use DB;
use Flash;
use Lang;

class Trash extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Indikator.Backend', 'trash');
    }

    public function onSearchItems()
    {
        // Trash database rows
        $sql = DB::table('system_settings')->get();

        foreach ($sql as $row) {
            $name = explode('_', $row->item);

            if ($name[0] != 'backend' && $name[0] != 'system' && isset($name[2]) && !File::exists(base_path().'/plugins/'.$name[0].'/'.$name[1]) && DB::table('indikator_backend_trash')->where('path', $row->item)->count() == 0) {
                DB::table('indikator_backend_trash')->insertGetId([
                    'type' => 3,
                    'path' => $row->item,
                    'size' => strlen($row->value)
                ]);
            }
        }

        // Trash files and folders
        $trash = [
            'modules/backend/assets/css/controls.css' => [1, 128471],
            'modules/backend/assets/font' => [2, 4116420],
            'modules/backend/assets/images/bitmap-icons.png' => [1, 3598],
            'modules/backend/assets/images/flag-icons-large.png' => [1, 163939],
            'modules/backend/assets/images/flag-icons-small.png' => [1, 62845],
            'modules/backend/assets/images/loading-indicator.gif' => [1, 3783],
            'modules/backend/assets/images/loading-indicator.svg' => [1, 1408],
            'modules/backend/assets/images/loading-indicator-transparent.svg' => [1, 1422],
            'modules/backend/assets/images/loading-indicator-white.svg' => [1, 1425],
            'modules/backend/assets/images/primary-tab-shape.png' => [1, 1636],
            'modules/backend/assets/images/tab-link.png' => [1, 188],
            'modules/backend/assets/js/editorpreferences' => [2, 1523],
            'modules/backend/assets/js/vendor/modernizr.min.js' => [1, 15406],
            'modules/backend/assets/js/vendor/moment.js' => [1, 99200],
            'modules/backend/assets/js/vendor/mousewheel.js' => [1, 7348],
            'modules/backend/assets/js/vendor/raphael.js' => [1, 299814],
            'modules/backend/assets/js/vendor/vendor.js' => [1, 1185],
            'modules/backend/assets/js/vendor/vendor-min.js' => [1, 431448],
            'modules/backend/assets/less/controls.less' => [1, 1204],
            'modules/backend/assets/less/core/bootstrap.less' => [1, 1817],
            'modules/backend/assets/less/core/flags.less' => [1, 11419],
            'modules/backend/assets/less/core/fonts.less' => [1, 7109],
            'modules/backend/assets/less/core/icons.less' => [1, 28403],
            'modules/backend/assets/vendor/flot' => [2, 322112],
            'modules/backend/assets/vendor/jcrop/MIT-LICENSE.txt' => [1, 1103],
            'modules/backend/assets/vendor/jcrop/OCTOBER-README.md' => [1, 165],
            'modules/backend/assets/vendor/jcrop/README.md' => [1, 2253],
            'modules/backend/assets/vendor/mustache' => [2, 5498],
            'modules/backend/assets/vendor/select2' => [2, 295075],
            'modules/backend/assets/vendor/sweet-alert/sweet-alert.html' => [1, 833],
            'modules/backend/formwidgets/colorpicker/assets/vendor/colpick/LICENSE' => [1, 18069],
            'modules/backend/formwidgets/colorpicker/assets/vendor/colpick/README.md' => [1, 1169],
            'modules/backend/formwidgets/datepicker/assets/vendor/moment/README.md' => [1, 1599],
            'modules/backend/formwidgets/datepicker/assets/vendor/pikaday/README.md' => [1, 10988],
            'modules/backend/formwidgets/richeditor/assets/vendor/redactor' => [2, 307615],
            'modules/cms/assets/less/css' => [2, 2993],
            'modules/system/assets/css/settings.css' => [1, 1655],
            'modules/system/assets/css/updates.css' => [1, 926],
            'modules/system/assets/font' => [2, 352990],
            'modules/system/assets/less/settings.less' => [1, 1874],
            'modules/system/assets/less/updates.less' => [1, 987],
            'modules/system/assets/vendor/bootstrap' => [2, 149549],
            'modules/system/assets/vendor/font-autumn' => [2, 803504],
            'modules/system/assets/vendor/syntaxhighlighter/LGPL-LICENSE' => [1, 7638],
            'modules/system/assets/vendor/syntaxhighlighter/MIT-LICENSE' => [1, 1061],
            'plugins/indikator/backend/assets/js/media-menu.js' => [1, 85],
            'plugins/indikator/backend/partials' => [2, 2740]
        ];

        foreach ($trash as $path => $data) {
            if (File::exists(base_path().'/'.$path) && DB::table('indikator_backend_trash')->where('path', '/'.$path)->count() == 0) {
                DB::table('indikator_backend_trash')->insertGetId([
                    'type' => $data[0],
                    'path' => '/'.$path,
                    'size' => $data[1]
                ]);
            }
        }

        $this->scanVendor();

        if (DB::table('indikator_backend_trash')->count() > 0) {
            Flash::success(Lang::get('indikator.backend::lang.trash.success'));
        }
        else {
            Flash::success(Lang::get('indikator.backend::lang.trash.no_items'));
        }

        return $this->listRefresh('manage');
    }

    public function scanVendor($folder = 'vendor', $deph = 0)
    {
        // Improve speed
        if ($deph == 6) {
            return;
        }

        // Actual folder
        $elements = scandir(base_path().'/'.$folder);

        // Scan folder
        foreach ($elements as $element) {
            if ($element != '.' && $element != '..') {
                // Folder
                if (filetype($folder.'/'.$element) == 'dir') {
                    $this->scanVendor($folder.'/'.$element, $deph + 1);
                }

                // File
                else if ((substr_count($element, 'LICENSE') == 1 || substr_count($element, 'README') == 1 || substr_count($element, 'CHANGELOG') == 1) && DB::table('indikator_backend_trash')->where('path', '/'.$folder.'/'.$element)->count() == 0) {
                    DB::table('indikator_backend_trash')->insertGetId([
                        'type' => 1,
                        'path' => '/'.$folder.'/'.$element,
                        'size' => File::size(base_path().'/'.$folder.'/'.$element)
                    ]);
                }
            }
        }

        return;
    }

    public function onRemoveItems()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (DB::table('indikator_backend_trash')->where('id', $objectId)->count() == 1) {
                    $item = DB::table('indikator_backend_trash')->where('id', $objectId)->first();
                    // File
                    if ($item->type == 1) {
                        File::delete(base_path().$item->path);
                    }

                    // Folder
                    else if ($item->type == 2) {
                        File::deleteDirectory(base_path().$item->path);
                    }

                    // Database
                    else if ($item->type == 3) {
                        DB::table('system_settings')->where('item', $item->path)->delete();
                    }

                    DB::table('indikator_backend_trash')->where('id', $objectId)->delete();
                }
            }

            Flash::success(Lang::get('indikator.backend::lang.trash.remove'));
        }

        return $this->listRefresh('manage');
    }

    public function onRemoveAllItems()
    {
        $sql = DB::table('indikator_backend_trash')->get();

        foreach ($sql as $item) {
            // File
            if ($item->type == 1) {
                File::delete(base_path().$item->path);
            }

            // Folder
            else if ($item->type == 2) {
                File::deleteDirectory(base_path().$item->path);
            }

            // Database
            else if ($item->type == 3) {
                DB::table('system_settings')->where('item', $item->path)->delete();
            }

            DB::table('indikator_backend_trash')->where('id', $item->id)->delete();
        }

        Flash::success(Lang::get('indikator.backend::lang.trash.remove'));

        return $this->listRefresh('manage');
    }
}
