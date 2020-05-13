@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Clientes</h2>
        </div>
        <div class="pull-right">

        @can('cliente-create')

            <a class="btn btn-success" href="{{ route('clients.create') }}"> + Novo cliente</a>

        @endcan

        </div>
    </div>
</div>
<br>

@if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th>E-mail</th>
     <th>Endereço</th>
     <th width="280px">Action</th>
  </tr>

    @foreach ($data as $key => $client)

    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->address }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}">Mostrar</a>

            @can('cliente-edit')
                <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Editar</a>
            @endcan

                {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $client->id],'style'=>'display:inline']) !!}
            
                @can('cliente-delete')
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                @endcan

                {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

</table>


@endsection