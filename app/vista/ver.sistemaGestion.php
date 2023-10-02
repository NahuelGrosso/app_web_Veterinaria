<?php

class VerClientes
{
    public function verClientes($clientes)
    {
        require_once 'Templates/header.php';

        require_once 'Templates/main.php';
?>

        <div class="row"> <!-- Fila para buscar y mostrar clientes -->


            <div class="col"> <!-- columna busqueda y cleintes -->

                <!-- me gustaria poder agregar un input de busqueda de clientes aqui -->
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Cliente" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </nav>

                <h1> Lista de clientes: </h1>
                <div class="overflow-auto"> <!-- Overflow para ver cleintes -->
                    <div class="clientes">
                        <ul class="list-group">
                            <?php foreach ($clientes as $cliente) { ?>
                                <li class="list-group-item">
                                    <a href="mostrarClientes/<?php echo $cliente->dni ?>">
                                        <b><?php echo $cliente->apellido;
                                            $cliente->nombre ?></b>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col"> <!-- columna card del cleinte -->

                <?php
                /* Aca quisiera agregar que si no hay ningun cliente seleccionado este en blanco  */
                ?>
                <!-- card  -->
                <h1> Informacion del cliente </h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">
                            <b><?php echo $cliente->apellido; ?></b>
                            <?php echo $cliente->nombre; ?>
                        </h3>
                        <ul>
                            <p class="card-text"> <b>Informacion:</b>
                                <li><?php echo $cliente->telefono; ?></li>
                                <li><?php echo $cliente->email; ?></li>
                                <li><?php echo $cliente->direccion; ?></li>
                                <li><?php echo $cliente->ciudad; ?></li>
                            </p>

                        </ul>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <a href="eliminarCliente/<?php echo $cliente->dni ?>">
                                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg> Eliminar</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="modificarCliente/<?php echo $cliente->dni ?>">
                                        <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                            </svg> Modificar Informacion </button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="mostrarMascota/<?php echo $mascotas->dni_cliente ?>">
                                        <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg> Modificar Informacion <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gitlab" viewBox="0 0 16 16">
                                                <path d="m15.734 6.1-.022-.058L13.534.358a.568.568 0 0 0-.563-.356.583.583 0 0 0-.328.122.582.582 0 0 0-.193.294l-1.47 4.499H5.025l-1.47-4.5A.572.572 0 0 0 2.47.358L.289 6.04l-.022.057A4.044 4.044 0 0 0 1.61 10.77l.007.006.02.014 3.318 2.485 1.64 1.242 1 .755a.673.673 0 0 0 .814 0l1-.755 1.64-1.242 3.338-2.5.009-.007a4.046 4.046 0 0 0 1.34-4.668Z" />
                                            </svg></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row"> <!-- Aca quiero poner un carrusel con card de cada mascota-->
            </div>
    <?php
        require_once 'Templates/footer.php';
    }
}
