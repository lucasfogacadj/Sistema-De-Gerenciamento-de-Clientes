@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

            <ol class="breadcrumb panel-heading">
            <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
            <li><a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a></li>
            <li class="active">Adicionar </li>
            </ol>

                    <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group {{$errors->has('titulo') ? 'has-error' : '' }}">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo do Telefone">
                            @if($errors->has('titulo'))
                        <span class="help-block">
                            <strong>{{$errors->first('titulo')}}</strong>
                        </span>
                        @endif
                        </div>
                        <div class="form-group {{$errors->has('telefone') ? 'has-error' : '' }}">
                            <label for="telefone">Numero</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Numero do Telefone">
                            @if($errors->has('telefone'))
                        <span class="help-block">
                            <strong>{{$errors->first('telefone')}}</strong>
                        </span>
                        @endif
                        </div>

                        <button class="btn btn-info">Adicionar</button>
                        
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
