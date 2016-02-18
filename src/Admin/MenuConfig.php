<?php namespace JetCMS\Menu\Admin;

use App\Menu;

use Request;
use Sentinel;
use Carbon;

use Admin;
use AdminDisplay;
use ColumnFilter;
use Column;
use AdminForm;
use FormItem;

use JetCMS\Core\AdminConfig;


class MenuConfig extends AdminConfig
{
    Protected $accessMenu = 'admin.menu.*';
    Protected $model = Menu::class;
    Protected $modelTitle = 'Menu';
    Protected $modelAlias = 'menu';

    static Protected $action = [];

    Protected function addMenu(){
        Admin::menu(Menu::class)->icon('fa-sitemap');
    }

    static Protected function addColumn(){
        $display = AdminDisplay::tree();
        $display->value('name|lable|url');
        return $display;
    }

    Protected function addCreate($id){
        return $this->addEdit($id);
    }

    Protected function addEdit($id){
        $form = AdminForm::form();
        $form->ajax_validation(true);

        $form->horizontal(true);
        $form->label_size('col-sm-offset-1 col-sm-1');
        $form->field_size('col-sm-3');

        $form->items([
            FormItem::text('lable', 'Lable')->required(),
            FormItem::text('url', 'URL'),
            //FormItem::bsselect('url_page_id', 'URL')->model('App\Page')->display('id|title|url'),
            FormItem::text('name')->label('Name')->unique(),
            FormItem::text('accesskey')->label('Accesskey'),
            FormItem::text('tabindex')->label('Tabindex'),
            FormItem::checkbox('active')->label('Active'),
        ]);

        return $form;
    }
}