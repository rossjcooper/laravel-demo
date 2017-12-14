<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Task;

class TasksTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $tasks = factory(Task::class)->times(10)->create();

        $this->json('get', '/api/tasks')
            ->assertStatus(200)
            ->assertExactJson($tasks->toArray());

    }
}
