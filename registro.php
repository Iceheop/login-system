
<?php include_once('includes/header.php')?>
<!-- Inicio del contenido -->
    <main class="w-100 vh-100 d-flex justify-content-center align-items-center">
        <section>
            <h2 class="fs-4 mb-0">registro</h2>
            <p>Registrate con tus credenciales.</p>
            <form action="handlers/handlers.php" method="post" enctype="multipart/form-data" style="width: 450px;">
                <section class="mb-2">
                    <label for="username" class="mb-2">Nombre de usuario</label>
                    <input type="text" name="username" placeholder="Inserta un nombre de usuario" class="form-control py-2">
                </section>
                <section class="mb-2">
                    <label for="name" class="mb-2">Nombre</label>
                    <input type="text" name="name" placeholder="Jhon Doe" class="form-control py-2">
                </section>
                <section class="mb-2">
                    <label for="photo" class="mb-2">Foto de perfil</label>
                    <input type="file" name="photo" class="form-control py-2">
                </section>
                <section class="mb-2">
                    <label for="email" class="mb-2">Correo:</label>
                    <input type="email" name="email" placeholder="you@example.com" class="form-control py-2">
                </section>
                <section class="mb-2">
                    <label for="password" class="mb-2">Contraseña:</label>
                    <input type="password" name="password" placeholder="Inserta tu contraseña" class="form-control py-2">
                </section>
                <button class="btn btn-primary form-control" name="register">Registrate</button>
            </form>
            <p class="mt-2">Ya tienes una cuenta? Inicia seción en <a href="login.php">Login</a></p>
        </section>
    </main>
<!-- Fin del contenido -->
<?php include_once('includes/footer.php')?>
