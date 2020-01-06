@extends("layout.master")

@section("content")
<link href="/css/table.css" rel="stylesheet">


    <h2>Compnay Customer Databse</h2>
    <br>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Investment</th>
  </tr>
  <tr>
    
    @foreach ($tasks as $task)

    <td>
        <a href="/tasks/{{ $task->id }}">
            {{ $task->id }}
        </a> 
    </td>

    <td>
        {{ $task->name }}
       
    </td>

    <td>
        {{ $task->investment  }}
    
    </td>
    


    @endforeach
    </tr>



</table>


@endsection

