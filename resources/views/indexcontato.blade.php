@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista Contatos</div>

                <div class="card-body">
                    <a href="/contato/create">Novo Contato</a>

                    @foreach($contatos as $contato)
                        <p>{{ $contato->nome }} - {{ $contato->telefone }}</p>
                        <a href="/contato/{{ $contato->id }}">Ver Contato</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
