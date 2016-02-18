<?php
View::composer('jetcms.menu::widgets.top_menu', function($view)
{
    $menu_main_name = App\Menu::where('name','main')->first();
    $menu_map = App\Menu::createMapParent();

    if ($menu_main_name) {
        $menu_main = App\Menu::active()
            ->where('parent_id', $menu_main_name->id)
            ->orderBy('lft')
            ->get();
    }else{
        $menu_main = [];
    }

    if ($menu_main_name and $menu_main) {
        $view->with('menu', $menu_main);
    }else{
        if (isset($menu_map[0])) {
            $view->with('menu', $menu_map[0]);
        } else {
            $view->with('menu', []);
        }
    }

    $view->with('menu_map', $menu_map);
});


View::creator('jetcms.menu::widgets.sidebar', function($view)
{
        $page = App\Page::getActivePage();

        if ($page and $page->context == 'catalog'){
            $menu = $page->menu;
            $view->with('index', 1);
        }else{
            $menu = App\Menu::where('name','catalog')->first();

        }

        if ($menu) {
            $sidebar =  $menu->getMapLevel(true);
        }else{
            $sidebar = [];
        }

        $view->with('sidebar', $sidebar);
        $view->with('index', 1);
});
