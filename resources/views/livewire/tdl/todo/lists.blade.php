<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <b>
        <h1>To-Do List</h1>
    </b>
    <hr>

     @foreach ($allTodo as $index => $todo)   

     <table class="table mb-4">
        <tbody>
          <tr>
            <th scope="row">{{$index+1}}</th>
            <td >{{$todo->todotext}} </td>
            <td class="text-right">
              <button wire:click="$emitUp('editTodo', {{$todo->id}})" type="submit" class="btn btn-danger">Update</button>
              <button wire:click="$emitUp('deleteTodo', {{$todo->id}})" type="submit" class="btn btn-success ms-1">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
     @endforeach
</div>
