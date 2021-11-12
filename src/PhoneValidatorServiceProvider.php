<?php

namespace TimWassenburg\DutchPhoneNumberValidator;

use Illuminate\Support\ServiceProvider;
use Validator;

class PhoneValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'dutch-phone-number');
        $this->registerDutchPhoneNumberRule();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/dutch-phone-number'),
            ], 'translations');
        }
    }

    public function registerDutchPhoneNumberRule()
    {
        Validator::extend('DutchPhoneNumber', function ($attribute, $phoneNumber) {
            return preg_match('^((\+31)|(0031)|0)(\(0\)|)(\d{1,3})(\s|\-|)(\d{8}|\d{4}\s\d{4}|\d{2}\s\d{2}\s\d{2}\s\d{2})$^', $phoneNumber);
        }, trans('dutch-phone-number::validation.phone'));
    }
}
