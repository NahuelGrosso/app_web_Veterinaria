
<div class="container text-center">
    <h1>Formularios de Alta</h1>
    <div class="row align-items-start">
        <div class="col">
            <h2>Formulario Clientes</h2>
            <form action="agregarCliente" method="$_POST">

                <!-- formulario Bootstrap -->
                <div class="mb-3">
                    <label class="form-label">D.N.I.</label>
                    <input required type="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input required type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input required type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input required type="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Direccion</label>
                    <input required type="text" class="form-control">
                </div>
                <label for="exampleDataList" class="form-label">Ciudad</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Seleccionar ciudad...">
                <datalist id="datalistOptions">
                    <option value="Tandil">
                    <option value="Gardey">
                    <option value="Vela">
                    <option value="Rauch">
                    <option value="Ayacucho">
                    <option value="Benito Juarez">
                    <option value="Azul">
                    <option value="Ayacucho">
                    <option value="Chillar">
                    <option value="Olavarria">
                    <option value="Sierras Bayas">
                    <option value="Balcarce">
                    <option value="Napaleofu">
                    <option value="Loberia">
                </datalist>

                <button type="submit" class="btn btn-primary">Cargar Cliente</button>

                <!-- Fin formulario Bootstrap -->

            </form>

        </div>

        <div class="col">
            <h2>Formulario Mascotas</h2>
            <form action="agregarMascota" method="$_POST">

                <!-- formulario Bootstrap -->
                <div class="mb-3">
                    <label class="form-label">D.N.I. Cliente</label>
                    <input required type="number" class="form-control">
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

                <button type="submit" class="btn btn-primary">Cargar Mascota</button>

                <!-- Fin formulario Bootstrap -->

            </form>

        </div>
    </div>
</div>