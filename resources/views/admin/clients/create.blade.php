@extends('layouts.layout')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3> Novo cliente </h3>
            <form method="POST" action="/admin/clients">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="document_number">Document:</label>
                    <input type="text" class="form-control" id="document_number" name="document_number">
                </div>

                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="email" class="form-control" id="email" type="email">
                </div>

                <div class="form-group">
                    <label for="phone"> Telefone: </label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="marital_status"></label>
                    <select name="marital_status" id="marital_status" class="form-control">
                        <option value="">Selecione o estado civil</option>
                        <option value="1">Solteiro</option>
                        <option value="2">Casado</option>
                        <option value="3">Divorciado</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date_birth">Data Nasc</label>
                    <input type="date" class="form-control" name="date_birth" id="date_birth">
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="m"> Masculino
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="sex" value="f"> Feminino
                    </label>
                </div>
                <div class="form-group">
                    <label for="physical_disability">Deficiência Física</label>
                    <input type="text" class="form-control" name="physical_disability" id="physical_disability">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="form-control" name="defaulter" id="defaulter"> Inadimplente ?
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
@section('content')

@endsection