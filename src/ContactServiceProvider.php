<?php 

namespace ayazdev\Contact;
use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends serviceProvider{
	
	public function boot(){
		
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		
		$this->loadViewsFrom(__DIR__ . '/views', 'contact');
		$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
		$this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');
		$this->publishes([
        __DIR__.'/public/assets' => public_path('css/contact'),
		], 'public');
	}
	
	public function register(){
		
	}
	
}

