@extends('layouts.app')

@section('content')
<h1>Atualizar Produto</h1>
<form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
    @csrf
    @method("PUT")

        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" name="name" id="" class="form-control" value="{{$product->name}}">
            
        </div>
        
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="description" id="" class="form-control" value="{{$product->description}}">
            
        </div>
        
        <div class="form-group">
            <label>Conteudo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$product->body}}</textarea>
            
        </div>
        
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" id="" class="form-control" value="{{$product->price}}">
            
        </div>
        <div>
            <label>slug</label>
        <input type="text" name="slug" id="" class="form-control" value="{{$product->slug}}">
            
        </div>

                
        <div>
            <button type="submit" class="btn btn-lg btn-success mt-2">Atualizar Produto</button>
        </div>
    
</form>
@endsection