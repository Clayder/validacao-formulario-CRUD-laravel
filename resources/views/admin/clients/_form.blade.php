{{csrf_field()}}
<div class="form-group">
    <label for="name">Nome: </label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$client->name)}}">
</div>

<div class="form-group">
    <label for="document_number">Document:</label>
    <input type="text" class="form-control" id="document_number" name="document_number"
           value="{{old('document_number',$client->document_number)}}">
</div>

<div class="form-group">
    <label for="email">E-mail: </label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email',$client->email)}}">
</div>

<div class="form-group">
    <label for="phone"> Telefone: </label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone',$client->phone)}}">
</div>

@php
    $marital_status = $client->marital_status;
@endphp
@if($clientType == \App\Client::TYPE_INDIVIDUAL)
    <div class="form-group">
        <label for="marital_status">Estado civil </label>
        <select name="marital_status" id="marital_status" class="form-control" value="{{$marital_status}}">
            <option value="">Selecione o estado civil</option>
            <option value="1" {{old('marital_status', $marital_status) == 1 ? 'selected="selected"' : ''}}>Solteiro
            </option>
            <option value="2" {{old('marital_status', $marital_status) == 2 ? 'selected="selected"' : ''}}>Casado
            </option>
            <option value="3" {{old('marital_status', $marital_status) == 3 ? 'selected="selected"' : ''}}>Divorciado
            </option>
        </select>
    </div>

    <div class="form-group">
        <label for="date_birth">Data Nasc</label>
        <input type="date" class="form-control" name="date_birth" id="date_birth"
               value="{{old('date_birth',$client->date_birth)}}">
    </div>

    @php
        $sex = $client->sex;
    @endphp
    <div class="radio">
        <label>
            <input type="radio" name="sex" value="m" {{old('sex',$sex == 'm' ? 'checked = "checked"':'')}}> Masculino
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="sex" value="f" {{old('sex',$sex == 'f' ? 'checked = "checked"':'')}}> Feminino
        </label>
    </div>
    <div class="form-group">
        <label for="physical_disability">Deficiência Física</label>
        <input type="text" class="form-control" name="physical_disability" id="physical_disability"
               value="{{old('physical_disability',$client->physical_disability)}}">
    </div>
@else
    <div class="form-group">
        <label for="company_name">Nome da empresa: </label>
        <input type="text" class="form-control" id="company_name" name="company_name"
               value="{{old('company_name',$client->name)}}">
    </div>
@endif
<div class="checkbox">
    <label>
        <input type="checkbox" class="" name="defaulter"
               id="defaulter" {{old('defaulter',$client->defaulter) ? 'checked = "checked"':''}}> Inadimplente ?
    </label>
</div>

