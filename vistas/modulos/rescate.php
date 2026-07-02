<section class="container my-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 p-4" style="border-left: 5px solid #dc3545;">
                <h2 class="fw-bold mb-3" style="color: #dc3545;">
                    <i class="bi bi-exclamation-triangle-fill"></i> Solicitud de Rescate
                </h2>
                <p class="text-muted mb-4">
                    Si has encontrado un animal en peligro, herido o en situación de abandono crítico, completa este formulario para que nuestro equipo pueda evaluar la situación a la brevedad.
                </p>
                
                <form id="formRescate">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Ubicación exacta del animal</label>
                            <input type="text" class="form-control" id="ubicacion" placeholder="Dirección o punto de referencia" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Tipo de animal</label>
                            <input type="text" class="form-control" id="tipoAnimal" placeholder="Ej: Perro, Gato" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estado de salud aparente</label>
                            <select class="form-select" id="estadoSalud" required>
                                <option value="">Selecciona...</option>
                                <option value="herido">Herido / Atropellado</option>
                                <option value="desnutrido">Desnutrición severa</option>
                                <option value="abandonado">Abandonado (sin lesiones aparentes)</option>
                                <option value="emergencia">Emergencia crítica</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Descripción detallada de la situación</label>
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="¿Cómo se encuentra el animal? ¿Es agresivo o dócil?" required></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Tu nombre</label>
                            <input type="text" class="form-control" id="nombreReportante" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tu teléfono</label>
                            <input type="tel" class="form-control" id="telefonoReportante" required>
                        </div>
                        
                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn btn-danger px-4 rounded-pill fw-bold">Enviar Alerta de Rescate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>