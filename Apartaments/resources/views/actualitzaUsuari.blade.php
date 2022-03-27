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
            <form method="post" action="{{ route('usuaris.update', $usuari->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="Nomcognoms">Nom i cognoms</label>
                    <input type="text" class="form-control" name="Nomcognoms" value="{{ $usuari->Nomcognoms }}" />
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" value="{{ $usuari->Email }}" />
                </div>
                <div class="form-group">
                    <label for="Contrasenya">Contrasenya</label>
                    <input type="text" class="form-control" name="Contrasenya" value="{{ $usuari->Contrasenya }}" />
                </div>
                <div class="form-group">
                    <label for="Tipus">Tipus d'empleat</label>
                    <input type="text" class="form-control" name="Tipus" value="{{ $usuari->Tipus }}" />
                </div>
                <div class="form-group">
                    <label for="Horaent">Hora d'entrada</label>
                    <input type="number" class="form-control" name="Horaent" value="{{ $usuari->Horaent }}" />
                </div>
                <div class="form-group">
                    <label for="Horasort">Hora de sortida</label>
                    <input type="number" class="form-control" name="Horasort" value="{{ $usuari->Horasort }}" />
                </div>


                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection
