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
            <form method="post" action="{{ route('lloguers.update', $lloguer->id) }}">
                <div class="form-group">
                    <label for="Dni">Dni</label>
                    <input type="text" class="form-control" name="Dni" value="{{ $lloguer->Dni }}" />
                </div>
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" value="{{ $lloguer->id }}" />
                </div>
                <div class="form-group">
                    <label for="Datainici">Data d'inici</label>
                    <input type="date" class="form-control" name="Datainici" value="{{ $lloguer->Datainici }}" />
                </div>
                <div class="form-group">
                    <label for="Horainici">Hora d'inici</label>
                    <input type="num" class="form-control" name="Horainici" value="{{ $lloguer->Horainici }}" />
                </div>
                <div class="form-group">
                    <label for="Datafi">Data final</label>
                    <input type="date" class="form-control" name="Datafi" value="{{ $lloguer->Datafi }}" />
                </div>
                <div class="form-group">
                    <label for="Horafi">Hora final</label>
                    <input type="number" class="form-control" name="Horafi" value="{{ $lloguer->Horafi }}" />
                </div>
                <div class="form-group">
                    <label for="Lloclliuclaus">Lloc de lliurament de claus</label>
                    <input type="text" class="form-control" name="Lloclliuclaus" value="{{ $lloguer->Lloclliuclaus }}" />
                </div>
                <div class="form-group">
                    <label for="Llocdevclaus">Lloc de lliurament de claus</label>
                    <input type="text" class="form-control" name="Llocdevclaus" value="{{ $lloguer->Llocdevclaus }}" />
                </div>
                <div class="form-group">
                    <label for="Preudia">Preu per dia</label>
                    <input type="number" class="form-control" name="Preudia" value="{{ $lloguer->Preudia }}" />
                </div>
                <div class="form-group">
                    <label for="Diposit">Diposit</label>
                    <input type="number" class="form-control" name="Diposit" value="{{ $lloguer->Diposit }}" />
                </div>
                <div class="form-group">
                    <label for="Quantdiposit">Quantitat dipositada</label>
                    <input type="number" class="form-control" name="Quantdiposit" value="{{ $lloguer->Quantdiposit }}" />
                </div>
                <div class="form-group">
                    <label for="Tipusasseguranca">Tipus d'assegurança</label>
                    <input type="text" class="form-control" name="Tipusasseguranca" value="{{ $lloguer->Tipusasseguranca }}" />
                </div>


                <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('lloguers') }}">Accés directe a la Llista de lloguers</a
@endsection
