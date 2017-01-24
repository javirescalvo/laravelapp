<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Nota;

class NotesTest extends TestCase
{
    use DatabaseTransactions;

    public function testNotesList()
    {
        //Having
        Nota::create(['nota' => 'My first note']);
        Nota::create(['nota' => 'Second note']);

        //When
        $this->visit('notas')
            //Then
            ->see('My first note')
            ->see('Second note');
    }
}
