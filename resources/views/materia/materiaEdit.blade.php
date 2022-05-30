<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Materia</title>
    @include('links')

    <script type="text/javascript" src="{{ asset('js/alumnosValidar.js') }}"></script>
</head>

<body>
    @include('top')
    <div class="container" style="width: 100%; max-width: 1400px; margin-top: 40px;">
        <div class="card mb-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>Crear Materia</h1>
                    </div>
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger t-center txt21">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Listado</h5>
                <form action="{{ route('materia.store') }}" id='formulario' method="POST" class="form-inline">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="lblnombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                minlength="1" maxlength="100" value="{{ $materia->nombre }}">
                        </div>
                        <div class="col-6">
                            <label for="lblprofe" class="form-label">Profesor</label>
                            <input type="text" class="form-control" id="profesor" name="profesor"
                                placeholder="Profesor" minlength="9" maxlength="9" value="{{ $materia->profesor }}">
                        </div>
                        <div class="col-6">
                            <label for="lblDisponible" class="form-label">Turno</label>
                            <select name="turno" id="turno" class="form-select">
                                <option value="Matutino" {{ $materia->turno == 'Matutino' ? 'selected' : '' }}>
                                    Matutino
                                </option>
                                <option value="Vespertino" {{ $materia->turno == 'Matutino' ? 'selected' : '' }}>
                                    Vespertino</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="lblcreditos" class="form-label">Créditos</label>
                            <input type="number" class="form-control" id="creditos" name="creditos"
                                placeholder="Creditos" value="{{ old('creditos') }}">
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <br>
                                <input class="form-check-input" type="checkbox" value="" id="disponible"
                                    name="disponible">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Disponible
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer" style="text-align: right">
                <button class="btn btn-success" type="submit">Crear</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    @include('footer')

</body>

</html>
