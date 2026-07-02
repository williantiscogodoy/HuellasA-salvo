<section class="container my-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="fw-bold mb-3 text-center" style="color: #27ae60;">Donación en Especie</h3>
                <p class="text-muted text-center mb-4">
                    ¿Tienes alimentos, mantas, artículos de limpieza o medicamentos que no usas? Tu ayuda física es invaluable para nuestro refugio.
                </p>

                <form id="formDonacionEspecie">
                    <!-- Qué se dona -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">¿Qué deseas donar?</label>
                        <textarea class="form-control" rows="2" placeholder="Ej: 5kg de alimento, 3 mantas usadas, medicamentos veterinarios..." required></textarea>
                    </div>

                    <!-- Datos del donante -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tu Nombre (Opcional)</label>
                            <input type="text" class="form-control" placeholder="Nombre o Anónimo">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Teléfono/WhatsApp</label>
                            <input type="tel" class="form-control" placeholder="Para coordinar la entrega" required>
                        </div>
                    </div>

                    <!-- Coordinación de entrega -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Preferencia de entrega</label>
                        <select class="form-select">
                            <option value="punto">Entregar en el refugio</option>
                            <option value="retiro">Solicitar retiro (si es posible)</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100 py-2 mt-3 fw-bold text-white shadow">
                        Coordinar Donación
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>