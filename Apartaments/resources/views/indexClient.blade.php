@extends('disseny')

@section('content')

    <h1>Llista de clients</h1>
    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td>id</td>
                <td># Dni</td>
                <td>Nom i cognoms</td>
                <td>Edat</td>
                <td>Telèfon</td>
                <td>Adreça</td>
                <td>Ciutat</td>
                <td>Pis</td>
                <td>Email</td>
                <td>Tipus de targeta</td>
                <td>Nombre de targeta</td>
            </tr>
            </thead>
            <tbody>
            @foreach($client as $cli)
                <tr>
                    <td>{{$cli->id}}</td>
                    <td>{{$cli->Dni}}</td>
                    <td>{{$cli->Nomcognoms}}</td>
                    <td>{{$cli->Edat}}</td>
                    <td>{{$cli->Tel}}</td>
                    <td>{{$cli->Adreca}}</td>
                    <td>{{$cli->Ciutat}}</td>
                    <td>{{$cli->Pis}}</td>
                    <td>{{$cli->Email}}</td>
                    <td>{{$cli->Tipustargeta}}</td>
                    <td>{{$cli->Numtargeta}}</td>
                    <td class="text-left">
                        <a href="{{ route('clients.edit', $cli->id)}}" class="btn btn-success btn-sm">Edita</a>
                        <form action="{{ route('clients.destroy', $cli->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a>
            <br><a href="{{ url('/') }}">Accés directe al menú</a>
@endsection
