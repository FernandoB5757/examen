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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_alumn').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
        });
    </script>
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
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Listado</h5>
                <div class="table-responsive ">
                    <table id="table_alumn" class="table table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th width="5%" class="wd-15p border-bottom-0">#</th>
                                <th width="40%" class="border-bottom-0">Nombre</th>
                                <th class="border-bottom-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $key => $alumno)
                                <tr>
                                    <td width="5%">{{ $alumno->id }}</td>
                                    <td>{{ $alumnos->name }}</td>
                                    <td width="10%" class="text-center">
                                        <a href="" class="text-primary"><i class="fa fa-info"></i></a>
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
