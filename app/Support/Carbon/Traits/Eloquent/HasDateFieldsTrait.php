<?php namespace TIOp\Support\Carbon\Traits\Eloquent;

use TIOp\Support\Carbon\Helpers\Dates as DateHelper;

trait HasDateFieldsTrait
{
    /**
     * @param \DateTime|\Carbon\Carbon|string $value
     *
     * @return \Carbon\Carbon|null
     */
    protected function valueToCarbonObject($value)
    {
        if(empty($value)) {
            return null;
        }

        return DateHelper::toCarbonObject($value);
    }
}