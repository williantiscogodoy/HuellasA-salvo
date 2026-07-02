<section class="container my-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 p-4" style="border-top: 8px solid #b02a2a;">
                <div class="text-center mb-4">
                    <h2 class="fw-bold" style="color: #b02a2a;">Denuncia de Maltrato Animal</h2>
                    <p class="text-muted">El maltrato es un delito. Tu reporte es anónimo y vital para salvar vidas.</p>
                </div>
                
                <form id="formDenuncia">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-bold">Ubicación exacta del hecho</label>
                            <input type="text" class="form-control" id="ubicacionDenuncia" placeholder="Calle, número, referencias, ciudad" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">Descripción de lo sucedido</label>
                            <textarea class="form-control" id="descripcionDenuncia" rows="4" placeholder="Describe claramente el acto de maltrato presenciado..." required></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">¿Tienes fotos o videos? (Opcional)</label>
                            <input type="file" class="form-control" id="evidenciaDenuncia" accept="image/*,video/*">
                            <small class="text-muted">Las pruebas son de gran ayuda para las autoridades.</small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">¿Cuándo ocurrió?</label>
                            <input type="datetime-local" class="form-control" id="fechaDenuncia" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">¿Es una urgencia activa?</label>
                            <select class="form-select" id="urgenciaDenuncia" required>
                                <option value="si">Sí, está ocurriendo ahora</option>
                                <option value="no">Ya ocurrió, es un reporte de seguimiento</option>
                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="alert alert-light border small" role="alert">
                                <strong>Nota de confidencialidad:</strong> Tus datos personales serán tratados bajo estrictas normas de privacidad y no serán compartidos sin tu consentimiento.
                            </div>
                        </div>

                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-danger btn-lg px-5 rounded-pill shadow">Enviar Denuncia Formal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>