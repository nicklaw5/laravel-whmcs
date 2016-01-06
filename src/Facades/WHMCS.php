<?php 

namespace WHMCS\Facades;

use Illuminate\Support\Facades\Facade;

class WHMCS extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'whmcs'; }
}