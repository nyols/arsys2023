<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div>
        <div class="text-right">
    <x-adminlte-button class="btn-xs" wire:click="$emit('cancelAddTodo')" label="X" theme="danger"/>
            </div>
    <div class="card">
        <div class="card-header">
            <b>Add Todo</b>
        </div>
        <div class="card-body">
            <div>
                <x-adminlte-input wire:model="todoText" name="iBasic"/>
            </div>
            <div>
                <x-adminlte-button wire:click="saveTodo" label="Save" theme="success" icon="fas fa-save"/>
            </div>
        </div>
        <div class="card-footer">
            <p class="card-text">©Kelompok6</p>
        </div>
        
    </div>
</div>
</div>
