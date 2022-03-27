@extends('disseny')

@section('content')


    <div class="card mt-5">
        <div class="card-header">
            Actualització de dades
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
            <form method="post" action="{{ route('clients.update', $client->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" value="{{ $client->id }}" />
                </div>
                <div class="form-group">
                    <label for="Dni">Dni</label>
                    <input type="text" class="form-control" name="Dni" value="{{ $client->Dni }}" />
                </div>
                <div class="form-group">
                    <label for="Nomcognoms">Nom i cognoms</label>
                    <input type="text" class="form-control" name="Nomcognoms" value="{{ $client->Nomcognoms }}" />
                </div>
                <div class="form-group">
                    <label for="Edat">Edat</label>
                    <input type="num" class="form-control" name="Edat" value="{{ $client->Edat }}" />
                </div>
                <div class="form-group">
                    <label for="Tel">Telèfon</label>
                    <input type="number" class="form-control" name="Tel" value="{{ $client->Tel }}" />
                </div>
                <div class="form-group">
                    <label for="Adreca">Adreça</label>
                    <input type="text" class="form-control" name="Adreca" value="{{ $client->Adreca }}" />
                </div>
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input type="text" class="form-control" name="Ciutat" value="{{ $client->Ciutat }}" />
                </div>
                <div class="form-group">
                    <label for="Pis">Pis</label>
                    <input type="text" class="form-control" name="Pis" value="{{ $client->Pis }}" />
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" value="{{ $client->Email }}" />
                </div>
                <div class="form-group">
                    <label for="Tipustargeta">Tipus de targeta</label>
                    <input type="text" class="form-control" name="Tipustargeta" value="{{ $client->Tipustargeta }}" />
                </div>
                <div class="form-group">
                    <label for="Numtargeta">Nombre de targeta</label>
                    <input type="number" class="form-control" name="Numtargeta" value="{{ $client->Numtargeta }}" />
                </div>
                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a
@endsection
