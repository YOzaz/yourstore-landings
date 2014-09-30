<?php namespace YourStore\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'YourStore\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'YourStore\Http\Filters\AuthFilter',
		'auth.basic' => 'YourStore\Http\Filters\BasicAuthFilter',
		'csrf' => 'YourStore\Http\Filters\CsrfFilter',
		'guest' => 'YourStore\Http\Filters\GuestFilter',
	];

}
