@extends('layouts.layout')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3> {{$clientType == \App\Client::TYPE_INDIVIDUAL ? "Pessoa Física" : "Pessoa Jurídica"}} </h3>
            <h4> Novo cliente </h4>
            <a href="{{route('clients.create', ['client_type' => \App\Client::TYPE_INDIVIDUAL])}}"> Pessoa Física</a> |
            <a href="{{route('clients.create', ['client_type' => \App\Client::TYPE_LEGAL])}}"> Pessoa Jurídica</a>
            @include('admin.form._form_erros')
            <form method="POST" action="{{route('clients.store')}}">
                @include('admin.clients._form')
                <button type="submit" class="btn"> Enviar</button>
            </form>
        </div>
    </div>
</div>
@section('content')

@endsection