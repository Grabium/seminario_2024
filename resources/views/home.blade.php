@extends('elements.headder_foot')

@section('titulo', $titulo)

@section('conteudo')



<div>
    <div>
        <a href="{{ route('users.create') }}">Cadastrar-se</a>
        <button>Ver Cadastro</button>
    </div>
</div>





@endsection