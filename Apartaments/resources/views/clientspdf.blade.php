@extends('disseny')

@section('content')

    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="center">
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
                </tr>
            </tbody>
        </table>
    </div>
@endsection
