@extends('disseny')

@section('content')

    <h1>Aplicació d'administració de lloguers</h1>
    <div class="card mt-5">
        <div class="card-header">
            Afegeix un nou lloguer
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
            <form method="post" action="{{ route('lloguers.store') }}">
                <div class="form-group">
                    <label for="Dni">Dni</label>
                    <input type="text" class="form-control" name="Dni"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id"/>
                </div>
                <div class="form-group">
                    <label for="Datainici">Data d'inici</label>
                    <input type="date" class="form-control" name="Datainici"/>
                </div>
                <div class="form-group">
                    <label for="Horainici">Hora d'inici</label>
                    <input type="number" class="form-control" name="Horainici"/>
                </div>
                <div class="form-group">
                    <label for="Datafi">Data final</label>
                    <input type="date" class="form-control" name="Datafi"/>
                </div>
                <div class="form-group">
                    <label for="Horafi">Hora final</label>
                    <input type="number" class="form-control" name="Horafi"/>
                </div>
                <div class="form-group">
                    <label for="Lloclliuclaus">Lloc de lliurament de claus</label>
                    <input type="text" class="form-control" name="Lloclliuclaus"/>
                </div>
                <div class="form-group">
                    <label for="Llocdevclaus">Lloc de devolució de claus</label>
                    <input type="text" class="form-control" name="Llocdevclaus"/>
                </div>
                <div class="form-group">
                    <label for="Preudia">Preu per dia</label>
                    <input type="number" class="form-control" name="Preudia"/>
                </div>
                <div class="form-group">
                    <label for="Diposit">Diposit</label>
                    <input type="number" class="form-control" name="Diposit"/>
                </div>
                <div class="form-group">
                    <label for="Quantdiposit">Quantitat depositada</label>
                    <input type="number" class="form-control" name="Quantdiposit"/>
                </div>
                <div class="form-group">
                    <label for="Tipusasseguranca">Tipus d'assegurança</label>
                    <input type="text" class="form-control" name="Tipusasseguranca"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Envia</button>
            </form>
        </div>
    </div>
    <br><a href="{{ url('lloguers') }}">Accés directe a la Llista de lloguers</a>
@endsection
