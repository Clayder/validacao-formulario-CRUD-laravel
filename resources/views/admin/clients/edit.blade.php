@extends('layouts.layout')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3> Novo cliente </h3>
            @include('admin.form._form_erros')
            <form method="POST" action="{{route('clients.update', ['client' => $client->id])}}">
                {{method_field('PUT')}}
                @include('admin.clients._form')
                <button type="submit" class="btn"> Salvar </button>
            </form>
        </div>
    </div>
</div>
@section('content')

@endsection