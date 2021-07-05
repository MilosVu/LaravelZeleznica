<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>REZERVISITE MESTO U VOZU!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex p-2 justify-content-center ">
        <form action="http://127.0.0.1:8000/korisnici/post" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    Pocetna destinacija:
                    <input type="text" value="{{ $voznja->pocetna_destinacija }}" class="form-control" disabled id="">

                </div>
                =>
                <div class="col">
                    Krajnja destinacija:
                    <input type="text" value="{{ $voznja->krajnja_destinacija }}" class="form-control" disabled id="">

                </div>
            </div>
            <input type="text" name="voznja_id" value="{{ $voznja->id }}" hidden class="form-control">
            <div class="row">
                <div class="col">
                    Duzina voznje:
                    <input type="text" value="~{{ intval($voznja->duzina_voznje / 3600) }} sati" class="form-control"
                        disabled id="">

                </div>
                <div class="col">
                    Ostalo mesta:
                    <input type="text" value="{{ $voznja->broj_mesta_u_vozu }}" class="form-control" disabled id="">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    Kompaniija:
                    <input type="text" value="{{ $voznja->kompanija }}" class="form-control" disabled id="">

                </div>

            </div>
            <div class="row">
                <div class="col">
                    Vase ime:
                    <input type="text" name="ime" class="form-control" id="">

                </div>
                <div class="col">
                    Vase prezime:
                    <input type="text" name="prezime" class="form-control" id="">

                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Pozivni:
                    <input value="+381" type="text" name="pozivni" class="form-control">

                </div>
                <div class="col">
                    Broj telefona:
                    <input type="text" name="broj_telefona" class="form-control" id="">

                </div>
                <div class="col">
                    Broj karata:
                    <input type="text" name="broj_karata" class="form-control" id="">

                </div>

            </div>
            <div class="row">
                <div class="col">
                    Email:
                    <input type="text" name="email" class="form-control" id="">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Naruci karte" class="btn btn-success form-control">

                </div>
            </div>

        </form>
    </div>
</body>

</html>
