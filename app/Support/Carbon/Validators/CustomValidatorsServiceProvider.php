<?php namespace TIOp\Support\Carbon\Validators;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Factory as ValidatorFactory;

class CustomValidatorsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->dateFormatValidator($this->app['validator']);
    }

    /**
     * @param ValidatorFactory $validator
     */
    private function dateFormatValidator(ValidatorFactory $validator)
    {
        $validator->extend(
            'valid_date_format',
            'TIOp\Support\Validators\DateField@rule'
        );
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}
