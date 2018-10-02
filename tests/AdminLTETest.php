<?php

namespace RenderbitTechnologies\AdminLTE\Tests;

use RenderbitTechnologies\AdminLTE\Facades\AdminLTE;
use RenderbitTechnologies\AdminLTE\ServiceProvider;
use Orchestra\Testbench\TestCase;

class AdminLTETest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'adminlte' => AdminLTE::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
