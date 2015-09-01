<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use DB;

class Admins extends ReportWidgetBase
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
                'default'           => 'indikator.backend::lang.widgets.admins.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'users' => [
                'title'             => 'indikator.backend::lang.properties.users',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'groups' => [
                'title'             => 'indikator.backend::lang.properties.groups',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'login' => [
                'title'             => 'indikator.backend::lang.properties.login',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['users'] = DB::table('backend_users')->count();
        $this->vars['groups'] = DB::table('backend_user_groups')->count();

        if (DB::table('backend_users')->where('last_login', '!=', 'NULL')->count() == 1) {
            $this->vars['login'] = DB::table('backend_users')->where('id', 1)->pluck('login');
            $this->vars['userid'] = DB::table('backend_users')->where('id', 1)->pluck('id');
        }
        else {
            $this->vars['login'] = DB::table('backend_users')->where('id', '>', 1)->orderBy('last_login', 'desc')->pluck('login');
            $this->vars['userid'] = DB::table('backend_users')->where('id', '>', 1)->orderBy('last_login', 'desc')->pluck('id');
        }
    }
}
