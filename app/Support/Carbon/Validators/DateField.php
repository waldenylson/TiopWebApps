<?php namespace TIOp\Support\Carbon\Validators;

use TIOp\Support\Helpers\Dates as DateHelper;

class DateField
{
    /**
     * @param string $attribute
     * @param mixed $value
     * @param array $parameters
     * @param \Illuminate\Validation\Validator $validator
     *
     * @return bool
     */
    public function rule($attribute, $value, $parameters, $validator)
    {
        return DateHelper::isValidDate($value);
    }
}