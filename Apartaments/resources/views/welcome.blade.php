@extends('disseny')

@section('content')

    <h1>Aplicació d'administració d'apartaments</h1>
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou apartament
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('apartaments.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id"/>
                </div>
                <div class="form-group">
                    <label for="Referenciacatastral">Referencia catastral</label>
                    <input type="text" class="form-control" name="Referenciacatastral"/>
                </div>
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input type="text" class="form-control" name="Ciutat"/>
                </div>
                <div class="form-group">
                    <label for="Barri">Barri</label>
                    <input type="text" class="form-control" name="Barri"/>
                </div>
                <div class="form-group">
                    <label for="Nomcarrer">Nom del carrer</label>
                    <input type="text" class="form-control" name="Nomcarrer"/>
                </div>
                <div class="form-group">
                    <label for="Numcarrer">Nombre de porteria</label>
                    <input type="number" class="form-control" name="Numcarrer"/>
                </div>
                <div class="form-group">
                    <label for="Pis">Pis</label>
                    <input type="text" class="form-control" name="Pis"/>
                </div>
                <div class="form-group">
                    <label for="Nombrellits">Nombre de llits</label>
                    <input type="number" class="form-control" name="Nombrellits"/>
                </div>
                <div class="form-group">
                    <label for="Nombrehabitacions">Nombre d'habitacions</label>
                    <input type="number" class="form-control" name="Nombrehabitacions"/>
                </div>
                <div class="form-group">
                    <label for="Ascensor">Ascensor</label>
                    <input type="number" class="form-control" name="Ascensor"/>
                </div>
                <div class="form-group">
                    <label for="Calefaccio">Calefacció</label>
                    <input type="text" class="form-control" name="Calefaccio"/>
                </div>
                <div class="form-group">
                    <label for="Airecondicionat">Aire condicionat</label>
                    <input type="number" class="form-control" name="Airecondicionat"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('apartaments') }}">Accés directe a la Llista d'apartaments</a>
@endsection
