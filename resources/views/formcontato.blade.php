@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulário</div>

                <div class="card-body">
                    @if(isset($contato))
                        <form action="/contato/{{ $contato->id }}" method="post">
                            @method('PUT')
                    @else
                        <form action="/contato" method="post">
                    @endif
                        @csrf
                        <input type="text" name="nome" value="{{ $contato->nome ?? '' }}" placeholder="Digite o nome">
                        <input type="text" name="telefone" value="{{ $contato->telefone ?? '' }}" placeholder="Digite o Telefone">
                        <button type="submit">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
