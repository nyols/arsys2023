<?php

namespace App\Http\Livewire\Tdl\Todo;

use Livewire\Component;
use App\Models\Tdl\Todo;

class Add extends Component
{
    public $todoText;
    public function render()
    {
        return view('livewire.tdl.todo.add');
    }
    
    public function saveTodo(){
        //dd($this->todoText);
        Todo::create([
            'todotext' => $this->todoText,
        ]);
        $this->emitUp('cancelAddTodo');
        $this->emit('refreshlist');
    }
}
