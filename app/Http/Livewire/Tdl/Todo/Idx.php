<?php

namespace App\Http\Livewire\Tdl\Todo;

use Livewire\Component;

class Idx extends Component
{
    public $modeTodo = null;
    public $todoId = null;
    public $editEnable = null;
    public $addEnable = null;
    protected $listeners = ['cancelAddTodo', 'editTodo', 'cancelEditTodo'];
    public function render()
    {
        return view('livewire.tdl.todo.idx');
    }

    public function addTodo(){
        $this->addEnable = true;
        
    }

    public function cancelAddTodo(){
        $this->addEnable= false;
    }

    public function editTodo($id){
        $this->todoId = $id;
        $this->editEnable = true; 
        //dd('this is todo edit with id: ', $id );

    }

    public function cancelEditTodo(){
        $this->editEnable= false;
    }
    
}
