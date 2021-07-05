<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>REZERVISITE MESTO U VOZU!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex p-2 justify-content-center ">
        <table class="table table-danger">
            <thead class="thead-dark">
                <tr>
                    <th>Pocetna destinacija</th>
                    <th>Krajnja destinacija</th>
                    <th>Datum polaska</th>
                    <th>Broj mesta u vozu</th>
                    <th>Kompanija</th>
                    <th>Prijavi se!</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voznje as $voznja)
                    <tr>
                        <td>{{ $voznja->pocetna_destinacija }}</td>
                        <td>{{ $voznja->krajnja_destinacija }}</td>
                        <td>{{ $voznja->datum_polaska }}</td>
                        <td>{{ $voznja->broj_mesta_u_vozu}}</td>
                        <td>{{ $voznja->kompanija }}</td>
                        <td>
                            <a href={{ "http://127.0.0.1:8000/voznje/voznja?voznja_id=" . $voznja->id }}
                                class="btn btn-primary btn-block">Pregledaj</a>
                            <a id="{{ $voznja->id }}" class="btn btn-danger btn-block delete">Izbrisi voznju</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/scripts/script.js ') }}"></script>

    </div>
</body>

</html>
