<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Alumno</title>
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
                        <h1>Crear Alumno</h1>
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
                <form action="{{ route('alumno.store') }}" id='formulario' method="POST" class="form-inline">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="lblnombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                minlength="1" maxlength="100" value="{{ old('nombre') }}">
                        </div>
                        <div class="col-6">
                            <label for="lblcodigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código"
                                minlength="9" maxlength="9" value="{{ old('codigo') }}">
                        </div>
                        <div class="col-6">
                            <label for="lblemail" class="form-label">Carrera</label>
                            <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Carrera"
                                value="{{ old('carrera') }}">
                        </div>
                        <div class="col-6">
                            <label for="lblcreditos" class="form-label">Créditos</label>
                            <input type="number" class="form-control" id="creditos" name="creditos"
                                placeholder="Creditos" value="{{ old('creditos') }}">
                        </div>
                        <div class="col-6">
                            <label for="lblcorreo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo"
                                placeholder="name@ejemplo.com" maxlength="100" value="{{ old('correo') }}">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer" style="text-align: right">
                <button class="btn btn-success" type="button" onclick="validar()">Crear</button>
            </div>
        </div>
    </div>
    </div>
    @include('footer')

</body>

</html>
