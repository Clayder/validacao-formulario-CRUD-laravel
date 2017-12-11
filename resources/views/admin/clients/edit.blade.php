@extends('layouts.layout')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3> Novo cliente </h3>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    {{$error}}
                </div>
            @endforeach
            <form method="POST" action="{{route('clients.update', ['client' => $client->id])}}">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
                </div>

                <div class="form-group">
                    <label for="document_number">Document:</label>
                    <input type="text" class="form-control" id="document_number" name="document_number" value="{{$client->document_number}}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}">
                </div>

                <div class="form-group">
                    <label for="phone"> Telefone: </label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                </div>

                <div class="form-group">
                    <label for="marital_status">Estado civil </label>
                    <select name="marital_status" id="marital_status" class="form-control" value="{{$client->marital_status}}">
                        <option value="">Selecione o estado civil</option>
                        <option value="1" {{$client->marital_status == 1 ? 'selected="selected"' : ''}}>Solteiro</option>
                        <option value="2" {{$client->marital_status == 2 ? 'selected="selected"' : ''}}>Casado</option>
                        <option value="3" {{$client->marital_status == 3 ? 'selected="selected"' : ''}}>Divorciado</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date_birth">Data Nasc</label>
                    <input type="date" class="form-control" name="date_birth" id="date_birth" value="{{$client->date_birth}}">
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="m" {{$client->sex == 'm' ? 'checked = "checked"':''}}> Masculino
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="f" {{$client->sex == 'f' ? 'checked = "checked"':''}}> Feminino
                    </label>
                </div>
                <div class="form-group">
                    <label for="physical_disability">Deficiência Física</label>
                    <input type="text" class="form-control" name="physical_disability" id="physical_disability" value="{{$client->physical_disability}}">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="" name="defaulter" id="defaulter" {{$client->defaulter ? 'checked = "checked"':''}}> Inadimplente ?
                    </label>
                </div>
                <button type="submit" class="btn"> Enviar</button>
            </form>
        </div>
    </div>
</div>
@section('content')

@endsection