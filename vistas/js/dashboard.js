// =======================================================
// LÓGICA EN TIEMPO REAL PARA EL PANEL DE CONTROL (DASHBOARD)
// =======================================================


// 1. MONITOREO DE CONTADORES EN TIEMPO REAL
function iniciarContadoresDashboard() {
    
    // Contar Órdenes Pendientes
    db.collection("ordenes").where("estado", "==", "Pendiente").onSnapshot((snapshot) => {
        const el = document.getElementById("cant-pendientes");
        if (el) el.innerText = snapshot.size;
    });

    // Contar Técnicos En Servicio (Trabajando)
    db.collection("tecnicos").where("estado", "==", "En Servicio").onSnapshot((snapshot) => {
        const el = document.getElementById("cant-servicio");
        if (el) el.innerText = snapshot.size;
    });

    // Contar Órdenes Finalizadas con éxito
    db.collection("ordenes").where("estado", "==", "Finalizada").onSnapshot((snapshot) => {
        const el = document.getElementById("cant-finalizadas");
        if (el) el.innerText = snapshot.size;
    });

    // Contar Personal Técnico total registrado
    db.collection("tecnicos").onSnapshot((snapshot) => {
        const el = document.getElementById("cant-tecnicos");
        if (el) el.innerText = snapshot.size;
    });
}

// 2. MONITOREO DE FILAS EN LA TABLA
function iniciarTablaDashboard() {
    const tbody = document.getElementById("tabla-dashboard-body");
    if (!tbody) return;

    db.collection("ordenes").orderBy("fecha", "desc").limit(5).onSnapshot((snapshot) => {
        tbody.innerHTML = "";
        
        if (snapshot.empty) {
            tbody.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-muted small">No se registran solicitudes entrantes.</td></tr>`;
            return;
        }

        snapshot.forEach((doc) => {
            const ord = doc.data();
            const tokenCorto = doc.id.substring(0, 5).toUpperCase();

            let badgeColor = "bg-warning text-dark";
            if (ord.estado === "Finalizada") badgeColor = "bg-success text-white";

            tbody.innerHTML += `
                <tr>
                    <td class="font-monospace text-secondary fw-bold" style="font-size: 0.82rem;">#${tokenCorto}</td>
                    <td class="fw-bold text-dark" style="font-size: 0.88rem;">${ord.cliente}</td>
                    <td class="text-secondary" style="font-size: 0.85rem;">${ord.trabajo || 'Mantenimiento preventivo'}</td>
                    <td class="text-dark fw-medium" style="font-size: 0.85rem;">🔧 ${ord.tecnicoNombre}</td>
                    <td>
                        <span class="badge ${badgeColor} px-2.5 py-1.5 rounded-pill fw-semibold" style="font-size: 0.72rem;">
                            ${ord.estado}
                        </span>
                    </td>
                </tr>
            `;
        });
    });
}

// ARRANQUE AUTOMÁTICO AL CARGAR LA PÁGINA
document.addEventListener("DOMContentLoaded", () => {
    iniciarContadoresDashboard();
    iniciarTablaDashboard();
});