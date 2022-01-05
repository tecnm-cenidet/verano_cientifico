<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $data['page_tag'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Cenidet">
    <link rel="shortcut icon" href="<?= media() ?>/img/favicon/tecnmicono.ico">
    <title><?= $data['page_tittle'] ?></title>
    <style>
        body {
            opacity: 0;
        }
    </style>
    <script src="<?= media() ?>/js/login/settings.js"></script>
</head>

<body class="theme-blue">
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <!-- Inicia contenedor de card -->
    <div class="container"">

        <div class=" text-center mt-4">
        <h1 class="h2">Bienvenidos</h1>
        <p class="lead">
            Seleccione una opción para inicio de Sesión
        </p>
    </div>

    <div class=" row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/login/2.jpg" class="card-img-top" alt="profesores">
                <div class="card-body">
                    <a href="<?= base_url() . "/loginprofesor" ?>" class=" btn btn-primary">Acceso Profesores Investigadores</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/login/3.jpg" class="card-img-top" alt="Estudiantes">
                <div class="card-body">
                    <a href="<?= base_url() . "/login" ?>" class="btn btn-primary">Estudiantes y Evaluadores</a>
                    <a href="<?= base_url() . "/evaluadores" ?>" class="btn btn-primary">Registro Evaluadores</a>
                    <a href="<?= base_url() . "/estudiantes" ?>" class="btn btn-primary">Registro Estudiantes</a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <script src="<?= media() ?>/js/login/app.js"></script>
    <script src="<?= media() ?>/js/login/<?= $data['page_functions_js'] ?>"></script>
    <script src="<?= media() ?>/js/dependencias/sweetalert2.all.min.js"></script>

</body>

</html>