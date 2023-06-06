<div>
    <div>
        <div class="text-right">
    <x-adminlte-button class="btn-xs" wire:click="$emit('cancelEditTodo')" label="X" theme="danger"/>
            </div>
    <div class="card">
        <div class="card-header">
            <b>Edit Todo</b>
        </div>
        
        <div class="card-body">
            <div>
                <x-adminlte-input wire:model="todotext" name="iBasic"/>
            </div>
            <div>
                <x-adminlte-button wire:click="updateTodo" label="Save" theme="warning" icon="fas fa-update"/>
            </div>
        </div>
        <div class="card-footer">
            <p class="card-text">©Kelompok6</p>
        </div>
        
    </div>
</div>
</div>
