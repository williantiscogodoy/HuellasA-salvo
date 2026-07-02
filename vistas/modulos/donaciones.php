<section class="container my-5" data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="fw-bold mb-3 text-center">Donación Única</h3>
                <p class="text-muted text-center mb-4">Tu ayuda puntual llega directo a las necesidades de hoy.</p>
                
                <form id="formDonacionUnica">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Monto ($)</label>
                        <input type="number" class="form-control" placeholder="Ej: 50" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nombre (Opcional)</label>
                        <input type="text" class="form-control" placeholder="Tu nombre o Anónimo">
                    </div>

                    <div class="row g-2 mt-4">
                        <div class="col-6">
                            <button type="button" class="btn btn-success w-100 fw-bold" onclick="abrirModalTarjeta()">Tarjeta</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-outline-success w-100 fw-bold" onclick="abrirModalQR()">Pago QR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>