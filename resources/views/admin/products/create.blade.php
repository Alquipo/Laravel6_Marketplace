@extends('layouts.app')

@section('content')
<h1>criar Produto</h1>
<form action="{{route('admin.products.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" name="name" id="" class="form-control">
            
        </div>
        
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="description" id="" class="form-control">
            
        </div>
        
        <div class="form-group">
            <label>Conteudo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
            
        </div>
        
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" id="" class="form-control">
            
        </div>
        <div>
            <label>slug</label>
            <input type="text" name="slug" id="" class="form-control">
            
        </div>

        <div class="form-group">
            <label>Lojas</label>
            <select name="store" id="" class="form-control">
                @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
                
            </select>
            
            
        </div>
        
        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    
</form>
@endsection