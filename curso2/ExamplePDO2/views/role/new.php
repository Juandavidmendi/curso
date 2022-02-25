<main class="container">

    <div class="row">
        <h1 class="col-12 d-flex justify-content-center">Nuevo Usuario</h1>
    </div>

    <section class="row mt-5">

        <div class="card w-50 m-auto">

            <div class="card-header container">
                <h2 class="m-auto">Agregar Usuario</h2>
            </div>

            <div class="card-body">
                <form method="POST" action="?controller=role&method=save">

                    <div class="form-group">
                        <label for="firstname">Rol</label>
                        <input type="text" name="role" class="form-control" placeholder="Ingrese el rol">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </section>
</main>