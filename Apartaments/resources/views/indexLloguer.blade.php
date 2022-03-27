@extends('disseny')

@section('content')

    <h1>Llista de lloguers</h1>
    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td># Dni</td>
                <td>id</td>
                <td>Data inici</td>
                <td>Hora inici</td>
                <td>Data final</td>
                <td>Hora final</td>
                <td>Lloc lliurament claus</td>
                <td>Lloc devolució claus</td>
                <td>Preu per dia</td>
                <td>Diposit</td>
                <td>Quantitat dipositada</td>
                <td>Tipus d'assegurança</td>
            </tr>
            </thead>
            <tbody>
            @foreach($lloguer as $llog)
                <tr>
                    <td>{{$llog->Dni}}</td>
                    <td>{{$llog->id}}</td>
                    <td>{{$llog->Datainici}}</td>
                    <td>{{$llog->Horainici}}</td>
                    <td>{{$llog->Datafi}}</td>
                    <td>{{$llog->Horafi}}</td>
                    <td>{{$llog->Lloclliuclaus}}</td>
                    <td>{{$llog->Llocdevclaus}}</td>
                    <td>{{$llog->Preudia}}</td>
                    <td>{{$llog->Diposit}}</td>
                    <td>{{$llog->Quantdiposit}}</td>
                    <td>{{$llog->Tipusasseguranca}}</td>
                    <td class="text-left">
                        <a href="{{ route('lloguers.edit', $llog->id)}}" class="btn btn-success btn-sm">Edita</a>
                        <form action="{{ route('lloguers.destroy', $llog->id)}}" method="post" style="display: inline-block">
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
            <br><a href="{{ url('lloguers/create') }}">Accés directe a la vista de creació de lloguers</a>
@endsection
