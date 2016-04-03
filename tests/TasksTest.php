<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TasksTest extends TestCase
{
    /**
     * Should see "Task" when opening /.
     *
     * @return void
     */
    public function testCanSeeTaskPage()
    {
        $this->visit('/')
             ->see('Task');
    }
    /**
     * Can add and delete a task
     *
     * @return void
     */
    public function testCanAddAndDeleteTask()
    {
        $randomThing = sprintf('random thing %d', mt_rand());
        // echo "Add and delete task \"$randomThing\"\n";
        $this->visit('/')
             ->dontSee($randomThing)
             ->type($randomThing, 'name')
             ->press('Add Task')
             ->seePageIs('/')
             ->see($randomThing)
             ->see('Delete')
             ->press('Delete')
             ->seePageIs('/')
             ->dontSee($randomThing);

    }
    /**
     * Should see key => val in table "tasks"
     *
     * @return void
     */
    public function _testCanSeeTasksInDatabase()
    {
        $this->seeInDatabase('tasks', ['key' => 'val']);
    }
}
