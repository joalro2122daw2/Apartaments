@extends('disseny')

@section('content')

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
                <td>Nom i cognoms</td>
                <td>Email</td>
                <td>Contrasenya</td>
                <td>Tipus d'empleat</td>
                <td>Hora d'entrada</td>
                <td>Hora de sortida</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$usu->id}}</td>
                    <td>{{$usu->Nomcognoms}}</td>
                    <td>{{$usu->Email}}</td>
                    <td>{{$usu->Contrasenya}}</td>
                    <td>{{$usu->Tipus}}</td>
                    <td>{{$usu->Horaent}}</td>
                    <td>{{$usu->Horasort}}</td>
                </tr>
            </tbody>
        </table>
        <div>
@endsection
