<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>LETOVI, NARUCITE LET</title>

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
                    <th>Datum poletanja</th>
                    <th>Broj mesta u avionu</th>
                    <th>Kompanija</th>
                    <th>Prijavi se!</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $letovi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $let): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($let->pocetna_destinacija); ?></td>
                        <td><?php echo e($let->krajnja_destinacija); ?></td>
                        <td><?php echo e($let->datum_poletanja); ?></td>
                        <td><?php echo e($let->broj_mesta_u_avionu); ?></td>
                        <td><?php echo e($let->kompanija); ?></td>
                        <td>
                            <a href=<?php echo e('http://127.0.0.1:8000/letovi/let?let_id=' . $let->id); ?>

                                class="btn btn-primary btn-block">Pregledaj</a>
                            <a id="<?php echo e($let->id); ?>" class="btn btn-danger btn-block delete">Izbrisi let</a>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="<?php echo e(URL::asset('js/scripts/script.js ')); ?>"></script>

    </div>
</body>

</html>
<?php /**PATH C:\Users\Aleksandar\Documents\Fakultet\ITEH\nov\avionske_karte\resources\views/letovi.blade.php ENDPATH**/ ?>