<?php

namespace Bazucompany\Modules\Tests;

use Module;

class FacadeTest extends BaseTestCase
{
    /** @test */
    public function it_can_work_with_container()
    {
        $this->assertInstanceOf(\Bazucompany\Modules\RepositoryManager::class, $this->app['modules']);
    }

    /** @test */
    public function it_can_work_with_facade()
    {
        $this->assertSame('Bazucompany\Modules\Facades\Module', (new \ReflectionClass(Module::class))->getName());
    }
}