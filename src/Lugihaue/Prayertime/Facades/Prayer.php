<?php namespace Lugihaue\Prayertime\Facades	;

use Illuminate\Support\Facades\Facade;

class Prayer extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'prayer'; }

}