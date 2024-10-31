
<?php include_once('includes/header.php')?>
<!-- Inicio del contenido -->
    <main class="w-100 vh-100 d-flex justify-content-center align-items-center">
        <section>
            <h2 class="fs-4 mb-0">Login</h2>
            <p>inserta tus credenciales para iniciar seción.</p>
            <form action="handlers/handlers.php" method="post" style="width: 450px;">
                <section class="mb-2">
                    <label for="email" class="mb-2">Correo:</label>
                    <input type="email" name="email" placeholder="you@example.com" class="form-control py-2">
                </section>
                <section class="mb-2">
                    <label for="Password" class="mb-2">Contraseña:</label>
                    <input type="password" name="Password" placeholder="Inserta tu contraseña" class="form-control py-2">
                </section>
                <button class="btn btn-primary form-control" name="login">Iniciar seción</button>
            </form>
            <p class="mt-2">No tienes una cuenta? create una <a href="registro.php">registro</a></p>
        </section>
    </main>
<!-- Fin del contenido -->
<?php include_once('includes/footer.php')?>
