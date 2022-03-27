@extends('disseny')

@section('content')

    <h1>Llista d'apartaments</h1>
    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td># Codi</td>
                <td>Ref Catastral</td>
                <td>Ciutat</td>
                <td>Barri</td>
                <td>Nom del carrer</td>
                <td>Nombre de porteria</td>
                <td>Pis</td>
                <td>Nombre de llits</td>
                <td>Nombre d'habitacions</td>
                <td>Ascensor</td>
                <td>Calefacció</td>
                <td>Aire acondicionat</td>
            </tr>
            </thead>
            <tbody>
            @foreach($apartament as $apart)
                <tr>
                    <td>{{$apart->Codi_unic}}</td>
                    <td>{{$apart->Referenciacatastral}}</td>
                    <td>{{$apart->Ciutat}}</td>
                    <td>{{$apart->Barri}}</td>
                    <td>{{$apart->Nomcarrer}}</td>
                    <td>{{$apart->Numcarrer}}</td>
                    <td>{{$apart->Pis}}</td>
                    <td>{{$apart->Nombrellits}}</td>
                    <td>{{$apart->Nombrehabitacions}}</td>
                    <td>{{$apart->Ascensor}}</td>
                    <td>{{$apart->Calefaccio}}</td>
                    <td>{{$apart->Airecondicionat}}</td>
                    <td class="text-left">
                        <a href="{{ route('apartaments.edit', $apart->Codi_unic)}}" class="btn btn-success btn-sm">Edita</a>
                        <form action="{{ route('apartaments.destroy', $apart->Codi_unic)}}" method="post" style="display: inline-block">
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
            <br><a href="{{ url('apartaments/create') }}">Accés directe a la vista de creació d'apartaments</a>
@endsection
