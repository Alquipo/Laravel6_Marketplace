@extends('layouts.app')

@section('content')
<h1>criar Loja</h1>
<form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Loja</label>
    <input type="text" name="name" id="" value="{{$store->name}}" class="form-control">
        
    </div>
    
    <div class="form-group">
        <label>Descricao</label>
        <input type="text" name="description" id="" value="{{$store->description}}" class="form-control">
        
    </div>
    
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" id="" value="{{$store->phone}}" class="form-control">
        
    </div>
    
    <div class="form-group">
        <label>Celular/whats</label>
        <input type="text" name="mobile_phone" id=""value="{{$store->mobile_phone}}" class="form-control">
        
    </div>
    <div>
        <label>slug</label>
        <input type="text" name="slug" id="" value="{{$store->slug}}" class="form-control">
        
    </div>
            
    <div>
        <button type="submit" class="btn btn-lg btn-success mt-2">Atualizar Loja</button>
    </div>
    
</form>
@endsection