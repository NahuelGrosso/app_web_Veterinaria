<?php

class verClientes
{

    function mostrarClientes($clientes)
    {
        require_once 'Templates/header.phtml';
        require_once 'Templates/main.phtml';
?>
        <div class="container text-center">

            <div class="col-6">
                <div class="p-3">
                    <h1>Clientes</h1>
                    <div class="Clientes">
                        <ul class="list-group">
                            <?php foreach ($clientes as $cliente) { ?>
                                <li class="list-group-item">
                                    <a href="mostrar/<?php echo $cliente->id ?>">
                                        <b><?php echo $cliente->Apellido; ?></b>
                                        <b><?php echo $cliente->Nombre; ?></b>
                                    </a>
                                <?php
                            }
                                ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center">
            <div class="col-6">
                <div class="col-6">
                    <div class="p-3">
                        <h1>Informacion del Cliente</h1>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $cliente->Apellido; ?></b></h5>
                                <h5 class="card-title"><b><?php echo $cliente->Nombre; ?></b></h5>
                                <li class="list-group-item">ID: <?php echo $cliente->id; ?> </li>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Telefono: <?php echo $cliente->Telefono; ?> </li>
                                <li class="list-group-item">Email: <?php echo $cliente->Email; ?> </li>
                                <li class="list-group-item">Dirección: <?php echo $cliente->Direccion; ?> </li>
                                <li class="list-group-item">Ciudad: <?php echo $cliente->Ciudad; ?> </li>
                            </ul>
                            <div class="card-body">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <a href="eliminarCliente/<?php echo $cliente->id ?>" class="btn btn-danger margenBoton">Eliminar Cliente</a>
                                        </div>
                                        <div class="col">
                                            <div class="btn-group dropend">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Modificar Cliente
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <div class="card-header" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                Modificar Cliente
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <form action="modificarCliente" method="POST">
                                                                    <li class="list-group-item">Apellido</li>
                                                                    <input required name="apellido" type="text" class="form-control" placeholder="<?php echo $cliente->Apellido; ?>">
                                                                    <li class="list-group-item">Nombre</li>
                                                                    <input required name="nombre" type="text" class="form-control" placeholder="<?php echo $cliente->Nombre; ?>">
                                                                    <li class="list-group-item">Telefono</li>
                                                                    <input required name="telefono" type="number" class="form-control" placeholder="<?php echo $cliente->Telefono; ?>">
                                                                    <li class="list-group-item">Email</li>
                                                                    <input name="email" type="email" class="form-control" placeholder="<?php echo $cliente->Email; ?>">
                                                                    <li class="list-group-item">Direccion</li>
                                                                    <input required name="direccion" type="text" class="form-control" placeholder="<?php echo $cliente->Direccion; ?>">
                                                                    <li class="list-group-item">Ciudad</li>
                                                                    <input required name="ciudad" type="text" class="form-control" placeholder="<?php echo $cliente->Ciudad; ?>">

                                                                    <button id="btn-cargarCliente" type="submit" class="btn btn-primary margenBoton margenBoton">Modificar Cliente</button>
                                                                </form>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="btn-group dropend">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Agregar Mascota
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <div class="col">
                                                                <h2>Formulario Mascotas</h2>
                                                                <form action="agregarMascota" method="POST">

                                                                    <!-- formulario Bootstrap -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">ID Cliente</label>
                                                                        <input required type="number" class="form-control" placeholder="<?php echo $cliente->id; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nombre</label>
                                                                        <input required type="text" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tipo</label>
                                                                        <input required type="text" class="form-control" placeholder="Perro/Gato...">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Raza</label>
                                                                        <input required type="text" class="form-control" placeholder="Callejero...">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Edad</label>
                                                                        <input required type="number" class="form-control">
                                                                    </div>

                                                                    <button type="submit" class="btn btn-primary margenBoton">Cargar Mascota</button>

                                                                    <!-- Fin formulario Bootstrap -->

                                                                </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#" class="btn btn-success margenBoton">Mostrar Mascotas</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                require_once 'Templates/footer.phtml';
            }
            function mostrarCliente($id)
            {
            }


            function mostrarError($msj)
            {
                echo '<div class="alert alert-danger" role="alert">
                ERROR!
              </div>';
                echo '<div class="alert alert-danger" role="alert">'
                    . $msj .
                    '</div>';
            }
        }
