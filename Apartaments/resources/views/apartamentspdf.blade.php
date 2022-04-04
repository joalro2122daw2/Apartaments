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
                <tr>
                    <td>{{$apart->id}}</td>
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
                </tr>
            </tbody>
        </table>
        <div>
@endsection
