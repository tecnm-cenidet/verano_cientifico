<?php headerAdmin($data) ?>;
<!-- Inicia encabezado de Titulo e imagen -->
<div class="container">
    <div class="row">
        <section id="imagen" class="col-md-12">
            <img style="width:100%;height:auto; min-width:80px" src="<?= media() ?>/img/headers/veranoejemplo1.png">
            <a href="#" class="btn btn-primary btn-sm">Conocer más...</a>
        </section>
    </div>
</div><!-- Termina encabezado de Titulo e imagen -->

<!-- Inicia contenedor de card -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/tematics/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Temática Vue</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/tematics/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Temática Angular</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/tematics/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Temática Reack</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= media() ?>/img/tematics/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Temática Redux</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Acceder</a>
                </div>
            </div>
        </div>
    </div> <!-- Termina contenedor de card -->
    <?php footerAdmin($data); ?>