@extends('layouts.app')

@section('content')
<h1>criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label>Loja</label>
            <input type="text" name="name" id="" class="form-control">
            
        </div>
        
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" name="description" id="" class="form-control">
            
        </div>
        
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" id="" class="form-control">
            
        </div>
        
        <div class="form-group">
            <label>Celular/whats</label>
            <input type="text" name="mobile_phone" id="" class="form-control">
            
        </div>
        <div>
            <label>slug</label>
            <input type="text" name="slug" id="" class="form-control">
            
        </div>

        <div class="form-group">
            <label>usuario</label>
            <select name="user" id="" class="form-control">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
                
            </select>
            
            
        </div>
        
        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
        </div>
    
</form>
@endsection