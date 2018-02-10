@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

            <ol class="breadcrumb panel-heading">
            <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
            <li><a href="{{ route('cliente.detalhe', $telefone->cliente->id) }}">Detalhe</a></li>
            <li class="active">Editar </li>
            </ol>

                    <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo do Telefone" value="{{$telefone->titulo}}">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Numero</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Numero do Telefone"  value="{{$telefone->telefone}}">
                        </div>

                        <button class="btn btn-info">Atualizar</button>
                        
                    </form>
                    
               


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
