<?php namespace JetCMS\Menu;

class Menu extends BaseModelTree {

	protected $table = 'menus';
	static protected $prefix_name_chahe = 'active_menu';

	use TraitTreeActive;
}