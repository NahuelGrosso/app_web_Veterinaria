<?php

class VerMascotas
{

    function mostrarMascotas($mascotas)
    {
        require_once 'Templates/header.phtml';
        require_once 'Templates/main.phtml';
?>
        <div class="container text-center">

            <div class="col-6">
                <div class="p-3">
                    <h1>Mascotas</h1>
                    <div class="Clientes">
                        <ul class="list-group">
                            <?php foreach ($mascotas as $mascota) { ?>
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> <b><?php echo $mascota->nombre; ?></b></h5>
                                        <h5 class="card-title"> <b><?php echo $mascota->tipo; ?></b></h5>
                                        <h5 class="card-title"> <b><?php echo $mascota->raza; ?></b></h5>
                                        <h5 class="card-title"> <b><?php echo $mascota->edad; ?></b></h5>
                                    </div>
                                </div>



                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>


        </div>

<?php
    }
}
