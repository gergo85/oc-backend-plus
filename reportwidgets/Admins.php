<?php namespace Indikator\Backend\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Db;

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
                'title'   => 'indikator.backend::lang.properties.users',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'groups' => [
                'title'   => 'indikator.backend::lang.properties.groups',
                'default' => true,
                'type'    => 'checkbox'
            ],
            'login' => [
                'title'   => 'indikator.backend::lang.properties.login',
                'default' => true,
                'type'    => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['users']  = Db::table('backend_users')->count();
        $this->vars['groups'] = Db::table('backend_user_groups')->count();

        if (Db::table('backend_users')->where('last_login', '!=', 'NULL')->count() == 1) {
            $this->vars['login']  = Db::table('backend_users')->where('id', 1)->value('login');
            $this->vars['userid'] = Db::table('backend_users')->where('id', 1)->value('id');
        }
        else {
            $this->vars['login']  = Db::table('backend_users')->orderBy('last_login', 'desc')->value('login');
            $this->vars['userid'] = Db::table('backend_users')->orderBy('last_login', 'desc')->value('id');
        }
    }
}
