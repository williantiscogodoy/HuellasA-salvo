<section class="container my-5" data-aos="fade-in">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 p-4">
                <h3 class="text-center fw-bold mb-4" style="color: #27ae60;">Acceso Administrativo</h3>
                
                <form id="loginAdmin">
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="emailAdmin" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passAdmin" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold" onclick="window.location.href='index.php?ruta=admin';">
                        Ingresar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>