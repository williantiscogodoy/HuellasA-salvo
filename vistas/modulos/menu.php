<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        
        <!-- Logo y Marca -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <img src="vistas/imagenes/logoprincipal.jpg" alt="Logo MascotasFelices" width="55" height="55" class="rounded-circle shadow-sm" style="object-fit: cover; border: 2px solid #27ae60; padding: 2px;">
            
            <span class="fw-bold mb-0" style="color: #27ae60; font-size: 1.6rem; letter-spacing: -0.5px;">MascotasFelices</span>
        </a>
            
        <!-- Botón Hamburguesa para móviles -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- Enlaces del Menú -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="index.php?ruta=inicio" style="color: #1b4f31;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="index.php?ruta=login" style="color: #1b4f31;">Administracion</a>
                </li>
                
                <!-- Menú Desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1b4f31;">
                        Guías por Mascota
                    </a>
                    <!-- Añadida sombra y sin borde para un look más moderno -->
                    <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#gatos">Gatos</a></li>
                        <li><a class="dropdown-item" href="#perros">Perros</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#otros">Otras Mascotas</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#contacto" style="color: #1b4f31;">Contacto</a>
                </li>

                <!-- Botón de Acción Directa en el Menú -->
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a class="btn btn-danger btn-sm fw-bold px-4 rounded-pill shadow-sm" href="index.php?ruta=denunciar">
                        Denunciar Maltrato
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>