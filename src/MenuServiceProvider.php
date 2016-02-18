<?php namespace JetCMS\Menu;

use View;

use JetCMS\Core\CoreServiceProvider;
use JetCMS\Core\AdminRoute;

use JetCMS\Menu\Admin\MenuConfig;

class MenuServiceProvider extends CoreServiceProvider {

	/**
	 * Define Service Providers from our dependencies
	 */
	protected $parent_providers = [];

	/**
	 * Define aliases to register
	 */
	protected $aliases = [];

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		AdminRoute::addModel(MenuConfig::class);

		$this->loadViewsFrom(__DIR__.'/../views', 'jetcms.menu');

		$this->publishConfig(__DIR__,'menu');

		$this->publishes([
			__DIR__.'/../publish' => base_path()
		]);

		$this->publishes([
			__DIR__.'/../migrations' => base_path('database/migrations')
		]);

		include __DIR__.'/../routes.php';

	}

}