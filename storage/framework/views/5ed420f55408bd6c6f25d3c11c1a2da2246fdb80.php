<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

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
        <table class="table table-danger">
            <thead class="thead-dark">
                <tr>
                    <th>Ime i prezime</th>
                    <th>Email</th>
                    <th>Broj telefona</th>
                    <th>Broj karata</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $korisnici; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $korisnik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($korisnik->ime_prezime); ?></td>
                        <td><?php echo e($korisnik->email); ?></td>
                        <td><?php echo e($korisnik->broj_telefona); ?></td>
                        <td><?php echo e($korisnik->broj_karata); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Aleksandar\Documents\Fakultet\ITEH\nov\avionske_karte\resources\views/korisnici.blade.php ENDPATH**/ ?>