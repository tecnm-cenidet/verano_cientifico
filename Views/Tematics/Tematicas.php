<?php headerAdmin($data) ?>;
<!-- Inicia encabezado de Titulo e imagen (esto es opcional a mi punto de vista lo quitamos) -->
<div class="container">
    <div class="row">
        <section id="imagen" class="col-md-12 mt-2">
            <img style="width:100%;height:auto; min-width:80px" src="<?= media() ?>/img/headers/tematicasEjemplo1.png">
        </section>
    </div>
</div>
<!-- Termina encabezado de Titulo e imagen -->
<!-- Inicia contenido -->
<div class="container border">
    <div class="row">
        <section id="imagen" class="col-md-12 mt-2">
            <h1>Aqui va el contenido</h1>
            <div class="my-5">&nbsp;</div>
        </section>
    </div>
</div>
<?php footerAdmin($data); ?>