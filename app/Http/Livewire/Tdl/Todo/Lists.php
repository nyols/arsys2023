<?php

namespace App\Http\Livewire\Tdl\Todo;

use Livewire\Component;
use App\Models\Tdl\Todo;

class Lists extends Component
{
    protected $listeners =['deleteTodo','cancelAddTodo', 'refreshlist' => '$refresh'];
    public function render()
    {
        $allTodo = Todo::all();
        return view('livewire.tdl.todo.lists', ['allTodo'=> $allTodo]);
    }

    public function deleteTodo($todoId){
        Todo::find($todoId)->delete();
    }

}
 