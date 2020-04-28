@extends('layouts.app')

@section('content')
    @if(!$store)
        <a href="{{route('admin.stores.create')}}" class="btn  btn-success mb-2">Criar loja</a>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Total de Produtos</th>
                <th>Açoes</th>
                
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->products->count()}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary mr-1">Editar</a>
                            <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                    </div>
                </form>
                </td>
            </tr>
          
        </tbody>
    </table>
    
@endsection