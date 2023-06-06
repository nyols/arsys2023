<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <hr>


    @if($addEnable)
        @livewire('tdl.todo.add') 
    @else
    <div>
        <x-adminlte-button wire:click="addTodo" label="Add Todo" theme="success" icon="fas fa-pills"/>
    </div>     
     
    @endif 

    <!--Daftar Todo -->

    @if($editEnable)
        @livewire('tdl.todo.edit', ['todoId' => $todoId])
    @else
        @livewire('tdl.todo.lists')
    @endif
</div>
