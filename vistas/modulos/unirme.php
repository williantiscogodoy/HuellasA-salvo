<section class="container my-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 p-4">
                <h2 class="text-center fw-bold mb-4" style="color: #27ae60;">Formulario de Voluntariado</h2>
                <p class="text-center text-muted mb-4">Únete a nuestra misión. Completa tus datos y nos pondremos en contacto contigo.</p>
                
                <form id="formVoluntario">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Teléfono / WhatsApp</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" required>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label">¿En qué área te gustaría ayudar?</label>
                            <select class="form-select" id="areaInteres" required>
                                <option value="">Selecciona una opción...</option>
                                <option value="paseos">Paseo de perros</option>
                                <option value="limpieza">Limpieza de refugio</option>
                                <option value="rescate">Apoyo en rescates</option>
                                <option value="difusion">Redes sociales y difusión</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Cuéntanos sobre tu experiencia o motivación</label>
                            <textarea class="form-control" id="motivacion" rows="4"></textarea>
                        </div>
                        
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg px-5 rounded-pill text-white">Enviar Solicitud</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>