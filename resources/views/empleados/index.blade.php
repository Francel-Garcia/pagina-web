



@extends('layouts.plantillabase');



<div class="container">
@extends('layouts.app')

@section('content')
<div class="container">

MOSTRAR LA LISTA DE DATOS DE RENAP 

@if (Session::has('mensaje'))
    {{ Session::get('mensaje')}} 
@endif
<div>
    <a href="{{url('empleados/create')}}"> REGISTRAR EMPLEADO </a>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th> # </th>
           <th>Cedula</th>
           <th><th>Foto</th></th>
           <th>fecha_nacimiento</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Direccion</th>
           <th>telefono</th>
           <th>Departamento</th>
           <th>Municipio</th> 
           <th>Email</th> 
           <th>ACICIONES</th> 
        </tr>
    </thead>
    <tbody>

 
    
        @foreach ($empl as $empleados);

        <tr> 

            <td></td>
            <td>{{$empleados->id}}</td>
            
            <td>{{$empleados->Cedula}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleados->Foto }}" width="100" alt="">
                </td>
            <td>{{$empleados->Fecha_nacimiento}}</td>
            <td>{{$empleados->Nonbre}}</td>
            <td>{{$empleados->Apellido}}</td>
            <td>{{$empleados->Direccion}}</td>
            <td>{{$empleados->telefono}}</td>
            <td>{{$empleados->Departamento}}</td>
            <td>{{$empleados->Municipio}}</td>
            
            <td>{{$empleados->Email}}</td>
            <td>
                <a href="{{url('/empleados/'.$empleados->id.'/edit/')}}">
                    EDITAR
                </a>
                <form action="{{url('/empleados/'.$empleados->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}

            <input type="submit" anclic ="return cofirm ('quieres borrar')"value="borrar">
                
         </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
