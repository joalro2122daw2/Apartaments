@extends('disseny')

@section('content')

<div class="card mt-5">
    <div class="card-header">
    Login
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
        <form method="get" action= "/menu">
        @csrf
            <div class="form-group">
                <label for="Email">Usuari</label>
                <input type="text" class="form-control" name="Email"/>
            </div>
            <div>
                <label for="Contrasenya">Contrasenya</label>
                <input type="password" class="form-control" name="Contrasenya"/>
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-success">Login</button>
        </form>
    </div>
</div>