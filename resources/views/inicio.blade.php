<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @include('links')
</head>

<body>
    @include('top')
    <div class="container" style="width: 100%; max-width: 1400px; margin-top: 40px;">
        <div class="card mb-3">
            <img src="https://i1.sndcdn.com/avatars-000157311143-2dm9aj-t500x500.jpg" class="card-img-top" alt="..."
                style="width: 50%; height: 50%;">
            <div class="card-body">
                <h5 class="card-title">Examen</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted">3 horas.</small></p>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>
