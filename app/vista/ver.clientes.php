<?php

class verCliente
{

    function mostrarClientes($clientes)
    {
        require_once 'Templates/header.phtml';
        require_once 'Templates/main.phtml';
?>
        <div class="container text-center">
            <div class="row g-2">
                <div class="col-6">
                    <div class="p-3">
                        <h1>Clientes</h1>
                        <div class="Clientes">
                            <ul class="list-group">
                                <?php foreach ($clientes as $cliente) { ?>
                                    <li class="list-group-item">
                                        <a href="mostrar/<?php echo $cliente->dni ?>">
                                            <b><?php echo $cliente->Apellido; ?></b>
                                            <b><?php echo $cliente->Nombre; ?></b>
                                        </a>
                                    <?php
                                }
                                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-6">
                        <div class="p-3">
                            <h1>Informacion del Cliente</h1>

                        </div>
                    </div>

                </div>
            </div>
    <?php
        require_once 'Templates/footer.phtml';
    }
    function mostrarError($msj){
        echo '<div class="alert alert-danger" role="alert">
                ERROR!
              </div>';
        echo '<div class="alert alert-danger" role="alert">'
               .$msj. 
              '</div>';


    }
}
