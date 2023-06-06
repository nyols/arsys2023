<?php

namespace App\Http\Livewire\Tdl\Todo;

use Livewire\Component;
use App\Models\Tdl\Todo;

class Edit extends Component
{
    public $todoId = null;
    public $todoText = null;
    
    public function render()
    {
        return view('livewire.tdl.todo.edit');
    }

    public function mount($todoId){
        $this->todoId = $todoId;
        $todo = Todo::Where('id', $this->todoId)->first();
        $this->todotext = $todo->todotext;
    }

    public function updateTodo(){
        Todo::find($this->todoId)->update([
            'todotext' => $this->todotext
        ]);
        $this->emitUp('cancelEditTodo');
    }
}
