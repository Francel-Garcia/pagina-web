





@extends('layouts.app')
@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('MENU DE RENAP') }}</center></div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
    

                        </div>
                    @endif

                    {{ __('opciciones') }}
                    
                    <div>
                       <br> 
                        <center>
                            

                           

                            <a href="{{ route('crear-empleado') }}" class="btn btn-primary"><h1> EMPLEADO</h1></a>
                        </center>
                    </div>
                </br>

                    <div>
                        
                        <center>

                        <a href="{{ url('/empleados') }}" class="btn btn-primary"><h1>VER EMPLEADOS</h1></a>
            
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
                        </center>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection