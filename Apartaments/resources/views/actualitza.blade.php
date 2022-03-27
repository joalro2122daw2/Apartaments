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
            <form method="post" action="{{ route('apartaments.update', $apartament->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" value="{{ $apartament->id }}" />
                </div>
                <div class="form-group">
                    <label for="Referenciacatastral">Ref catastral</label>
                    <input type="text" class="form-control" name="Referenciacatastral" value="{{ $apartament->Referenciacatastral }}" />
                </div>
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input type="text" class="form-control" name="Ciutat" value="{{ $apartament->Ciutat }}" />
                </div>
                <div class="form-group">
                    <label for="Barri">Barri</label>
                    <input type="text" class="form-control" name="Barri" value="{{ $apartament->Barri }}" />
                </div>
                <div class="form-group">
                    <label for="Nomcarrer">Nom del carrer</label>
                    <input type="text" class="form-control" name="Nomcarrer" value="{{ $apartament->Nomcarrer }}" />
                </div>
                <div class="form-group">
                    <label for="Numcarrer">Nombre de porteria</label>
                    <input type="number" class="form-control" name="Numcarrer" value="{{ $apartament->Numcarrer }}" />
                </div>
                <div class="form-group">
                    <label for="Pis">Pis</label>
                    <input type="text" class="form-control" name="Pis" value="{{ $apartament->Pis }}" />
                </div>
                <div class="form-group">
                    <label for="Nombrellits">Nombre de llits</label>
                    <input type="number" class="form-control" name="Nombrellits" value="{{ $apartament->Nombrellits }}" />
                </div>
                <div class="form-group">
                    <label for="Nombrehabitacions">Nombre d'habitacions</label>
                    <input type="number" class="form-control" name="Nombrehabitacions" value="{{ $apartament->Nombrehabitacions }}" />
                </div>
                <div class="form-group">
                    <label for="Ascensor">Ascensor</label>
                    <input type="number" class="form-control" name="Ascensor" value="{{ $apartament->Ascensor }}" />
                </div>
                <div class="form-group">
                    <label for="Calefaccio">Calefaccio</label>
                    <input type="text" class="form-control" name="Calefaccio" value="{{ $apartament->Calefaccio }}" />
                </div>
                <div class="form-group">
                    <label for="Airecondicionat">Aire acondicionat</label>
                    <input type="number" class="form-control" name="Airecondicionat" value="{{ $apartament->Airecondicionat }}" />
                </div>

                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('apartaments') }}">Accés directe a la Llista d'apartaments</a
@endsection
