@extends('disseny')

@section('content')

<?php

use App\Models\Lloguers;

$llog = Lloguers::where('Dni', $Dni)->first();
$dades = unserialize($llog->dades_lloguer);

?>

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
                <td>Dni</td>
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
                </tr>
            </tbody>
        </table>
    <div>
@endsection
