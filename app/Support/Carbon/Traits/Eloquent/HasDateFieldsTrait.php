<?php namespace App\Support\Traits\Eloquent;

use App\Support\Helpers\Dates as DateHelper;

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