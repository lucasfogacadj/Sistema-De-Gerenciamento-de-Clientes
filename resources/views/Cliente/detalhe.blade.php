@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <ol class="breadcrumb panel-heading">
            <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
            <li class="active">Detalhe</li>
            </ol>

                <div class="panel-body">
                <p>
                <b>Cliente: </b>{{$cliente->nome}}
                </p>
                <p>
                <b>E-Mail: </b>{{$cliente->email}}
                </p>
                <p>
                <b>Endereco: </b>{{$cliente->endereco}}
                </p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Numero</th>
                                <th>Acao</th>
                                </tr>
                        </thead>
                        <tbody>
                       @foreach($cliente ->telefones as $telefone)
                        <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('telefone.editar',$telefone->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="{{ route('telefone.deletar',$telefone->id)}}">Deletar</a>
                                </td>
                            <tr>
                            @endforeach
                            
                        </tbody>

                    </table>

                    <p>
                <a class="btn btn-info" href="{{route('telefone.adicionar', $cliente->id)}}">Adicionar Telefone</a>
                </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
