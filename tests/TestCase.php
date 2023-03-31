<?php

namespace Descom\DescommarketSeo\Tests;

use Descom\DescommarketSeo\DescommarketSeoServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            DescommarketSeoServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
        $app['config']->set('app.lang', 'es');
    }
}