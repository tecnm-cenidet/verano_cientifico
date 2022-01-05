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
    <link href="<?= media() ?>/css/modern.css" rel="stylesheet">
    <script src="<?= media() ?>/js/login/settings.js"></script>
</head>

<body class="theme-blue">
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <main class="content">
        <div class="container-fluid">

            <div class="text-center mt-4">
                <h1 class="h2">Solicitud de Registro de Evaluadores</h1>
                <p>Ingresa los siguientes datos. Posteriormente, será contactado vía correo electrónico para activar su perfil.</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="formRegistroEvaluador" name="formRegistroEvaluador">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="validationCustom01" class="form-label">*Nombre:</label>
                                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustom02" class="form-label">*Apellido Paterno:</label>
                                        <input type="text" id="txtPaterno" name="txtPaterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Apellido Materno:</label>
                                        <input type="text" id="txtMaterno" name="txtMaterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*RFC:</label>
                                        <input type="text" id="txtRfc" name="txtRfc" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Correo Institucional:</label>
                                        <input type="email" id="txtEmailInst" name="txtEmailInst" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Correo Alterno:</label>
                                        <input type="email" id="txtEmailAlt" name="txtEmailAlt" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Teléfono:</label>
                                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Extensión:</label>
                                        <input type="text" id="txtExt" name="txtExt" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustom04" class="form-label">*Institución de Procedencia:</label>
                                        <select id="txtInstitucion" name="txtInstitucion" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Password de acceso:</label>
                                        <input type="password" id="txtPassword" name="txtPassword" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="validationCustomUsername" class="form-label">*Confirmar password:</label>
                                        <input type="password" id="txtConfirmarPass" name="txtConfirmarPass" class="form-control" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Enviar solicitud de alta</button>
                                <a href="<?= base_url() . "/" ?>" class="btn btn-danger">Salir sin guardar</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
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
    <script src="<?= media() ?>/js/scripts/<?= $data['page_functions_js'] ?>"></script>
    <script src="<?= media() ?>/js/dependencias/sweetalert2.all.min.js"></script>

</body>

</html>