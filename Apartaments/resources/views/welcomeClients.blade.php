@extends('disseny')

@section('content')

    <h1>Aplicació d'administració de clients</h1>
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou client
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
            <form method="post" action="{{ route('clients.store') }}">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="num" class="form-control" name="id"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="Dni">Dni</label>
                    <input type="text" class="form-control" name="Dni"/>
                </div>
                <div class="form-group">
                    <label for="Nomcognoms">Nom i Cognoms</label>
                    <input type="text" class="form-control" name="Nomcognoms"/>
                </div>
                <div class="form-group">
                    <label for="Edat">Ciutat</label>
                    <input type="number" class="form-control" name="Edat"/>
                </div>
                <div class="form-group">
                    <label for="Tel">Telèfon</label>
                    <input type="number" class="form-control" name="Tel"/>
                </div>
                <div class="form-group">
                    <label for="Adreca">Adreça</label>
                    <input type="text" class="form-control" name="Adreca"/>
                </div>
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input type="text" class="form-control" name="Ciutat"/>
                </div>
                <div class="form-group">
                    <label for="Pis">Pis</label>
                    <input type="text" class="form-control" name="Pis"/>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email"/>
                </div>
                <div class="form-group">
                    <label for="Tipustargeta">Tipus de targeta</label>
                    <input type="text" class="form-control" name="Tipustargeta"/>
                </div>
                <div class="form-group">
                    <label for="Numtargeta">Nombre de targeta</label>
                    <input type="number" class="form-control" name="Numtargeta"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a>
@endsection
