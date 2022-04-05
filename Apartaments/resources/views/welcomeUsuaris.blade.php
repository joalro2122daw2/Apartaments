@extends('disseny')

@section('content')

    <h1>Aplicació d'administració d'usuaris</h1>
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou usuari
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
            <form method="post" action="{{ route('usuaris.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="Nomcognoms">Nom i cognoms</label>
                    <input type="text" class="form-control" name="Nomcognoms"/>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email"/>
                </div>
                <div class="form-group">
                    <label for="Contrasenya">Contrasenya</label>
                    <input type="password" class="form-control" name="Contrasenya" /> <!--pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}"-->
                </div>
                <div class="form-group">
                    <label for="Tipus">Tipus d'empleat</label>
                    <input type="text" class="form-control" name="Tipus"/>
                </div>
                <div class="form-group">
                    <label for="Horaent">Hora d'entrada</label>
                    <input type="number" class="form-control" name="Horaent"/>
                </div>
                <div class="form-group">
                    <label for="Horasort">Hora de sortida</label>
                    <input type="number" class="form-control" name="Horasort"/>
                </div>

                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection
