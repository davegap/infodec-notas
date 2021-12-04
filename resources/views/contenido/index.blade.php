@extends('home')
@section('contenido')
<div class="container w-50 border p-4">
    <h3 class="text-center">NOTAS</h3>
    <div class="d-flex justify-content-end">
        <a href="/formulario" class="btn btn-success">
            nuevo
        </a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Parcial1</th>
                <th>Parcial2</th>
                <th>Parcial3</th>
                <th>Final</th>
            </tr>
        </thead>
        <tbody>
          @foreach($notas as $item)
            <tr>
                <td>{{$item->nombres}}</td>
                <td>{{$item->nota1}}</td>
                <td>{{$item->nota2}}</td>
                <td>{{$item->nota3}}</td>
                <td>{{$item->promedio}}</td>
                <td>
                    <a href="{{route('editar',$item->id)}}"
                      class="btn btn-warning">
                        Editar
                    </a>
                </td>
                <td>
                <form action="{{route('eliminar',$item->id)}}" method="POST" role="form">
                         @method('DELETE')
                         @csrf
                         <input type="submit" class="btn btn-danger" value="Eliminar">
                     </form> 
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

    @if (session('delete'))

        <div class="alert alert-success">
            {{session('delete')}}
        </div>

    @endif
</div>
@endsection