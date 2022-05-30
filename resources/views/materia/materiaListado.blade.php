<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Materias</title>
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
                        <h1>Materias</h1>
                    </div>
                    <div class="col-6" style="text-align: right">
                        <a href="{{ route('materia.create') }}" class="btn btn-success">Crear</a>
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
                                <th width="20%" class="border-bottom-0">Creditos</th>
                                <th width="20%" class="border-bottom-0">Profesor</th>
                                <th width="20%" class="border-bottom-0">Turno</th>
                                <th class="border-bottom-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materias as $key => $materia)
                                <tr>
                                    <td width="5%">{{ $materia->id }}</td>
                                    <td width="20%">{{ $materia->nombre }}</td>
                                    <td width="20%">{{ $materia->profesor }}</td>
                                    <td width="20%">{{ $materia->creditos }}</td>
                                    <td width="20%">{{ $materia->turno }}</td>
                                    <td width="10%" class="text-center">
                                        <a href="{{ route('materia.edit', $materia) }}" class="btn btn-warning">
                                            Editar
                                        </a>
                                        <a href="{{ route('materia.show', $materia) }}" class="btn btn-info">
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
