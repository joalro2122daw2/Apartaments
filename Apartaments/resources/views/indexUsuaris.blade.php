@extends('disseny')

@section('content')

    <h1>Llista d'usuaris</h1>
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
            @foreach($usuari as $usu)
                <tr>
                    <td>{{$usu->id}}</td>
                    <td>{{$usu->Nomcognoms}}</td>
                    <td>{{$usu->Email}}</td>
                    <td>{{$usu->Contrasenya}}</td>
                    <td>{{$usu->Tipus}}</td>
                    <td>{{$usu->Horaent}}</td>
                    <td>{{$usu->Horasort}}</td>
                    <td class="text-left">
                        <a href="{{ route('usuaris.edit', $usu->id)}}" class="btn btn-success btn-sm">Edita</a>
                        <form action="{{ route('usuaris.destroy', $usu->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                        </form>
                        <a href="{{ route('usuaris.show', $usu->id)}}" class="btn btn-primary btn-sm">Baixa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a>
            <br><a href="{{ url('/menu') }}">Accés directe al menú</a>
@endsection
