@extends('layouts.app')

@section('content')
<h1>Criar Produto</h1>
<form action="{{route('admin.products.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="description" id="" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
            
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Conteudo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('body')}}</textarea>
            
            @error('body')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" id="" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}"">
            
            @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label>slug</label>
            <input type="text" name="slug" id="" class="form-control">
            
        </div>
              
        <div>
            <button type="submit" class="btn btn-lg btn-success mt-2">Criar Produto</button>
        </div>
    
</form>
@endsection