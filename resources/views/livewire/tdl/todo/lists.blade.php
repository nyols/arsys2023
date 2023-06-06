<div>
    <b>
        <h1>To-Do List</h1>
    </b>
    <hr>

    @foreach ($allTodo as $index => $todo)
    <table class="table mb-4">
        <tbody>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                wire:model="allTodo.{{ $index }}.completed">
                            {{ $todo->todotext }}
                        </label>
                    </div>
                    <div>
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"
                            wire:model="allTodo.{{ $index }}.comment"></textarea>
                    </div>
                    <div>
                        <label for="submission_date">Tanggal Pengumpulan:</label>
                        <input type="date" class="form-control" id="submission_date"
                            wire:model="allTodo.{{ $index }}.submission_date">
                    </div>
                    <div>
                        <label for="deadline">Deadline:</label>
                        <input type="date" class="form-control" id="deadline"
                            wire:model="allTodo.{{ $index }}.deadline">
                    </div>
                    <div>
                        <button wire:click="$emitUp('editTodo', {{ $todo->id }})" type="submit"
                            class="btn btn-danger">Update</button>
                        <button wire:click="$emitUp('deleteTodo', {{ $todo->id }})" type="submit"
                            class="btn btn-success ms-1">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    @endforeach
</div>
