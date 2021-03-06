<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estudiantes</title>
        @include('links')
    </head>
</head>
@section('scripts')
@endsection

<body>
    @include('top')

    <div class="container" style="width: 100%; max-width: 1400px; margin-top: 40px;">
        <div class="card mb-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>Alumnos</h1>
                    </div>
                    <div class="col-6" style="text-align: right">
                        <a href="{{ route('alumno.create') }}" class="btn btn-success">Crear</a>
                    </div>
                    <div class="col-12">
                        @if (\Session::has('destroy'))
                            <div class="allert alert-danger t-center">
                                <p class="txt21">{{ \Session::get('destroy') }}</p>
                            </div>
                        @endif
                        @if (\Session::has('create'))
                            <div class="allert alert-success t-center">
                                <p class="txt21">{{ \Session::get('create') }}</p>
                            </div>
                        @endif
                        @if (\Session::has('edit'))
                            <div class="allert alert-success t-center">
                                <p class="txt21">{{ \Session::get('edit') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Listado</h5>
                <div class="table-responsive ">
                    <table id="table_alumn" class="table table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th width="5%" class="wd-15p border-bottom-0">#</th>
                                <th width="20%" class="border-bottom-0">Nombre</th>
                                <th width="20%" class="border-bottom-0">Codigo</th>
                                <th width="20%" class="border-bottom-0">Creditos</th>
                                <th class="border-bottom-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $key => $alumno)
                                <tr>
                                    <td width="5%">{{ $alumno->id }}</td>
                                    <td width="20%">{{ $alumno->nombre }}</td>
                                    <td width="20%">{{ $alumno->codigo }}</td>
                                    <td width="20%">{{ $alumno->creditos }}</td>
                                    <td width="10%" class="text-center">
                                        <a href="{{ route('alumno.edit', $alumno) }}" class="btn btn-warning">
                                            Editar
                                        </a>
                                        <a href="{{ route('alumno.show', $alumno) }}" class="btn btn-info">
                                            Mostrar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
