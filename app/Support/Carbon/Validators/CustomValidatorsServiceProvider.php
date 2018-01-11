<?php namespace App\Support\Validators;

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
            'App\Support\Validators\DateField@rule'
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
