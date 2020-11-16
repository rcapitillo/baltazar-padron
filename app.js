function fechaActual() {
    let fecha = new Date();
    let dia = fecha.getDate();
    let mes = fecha.getMonth();
    let año = fecha.getFullYear();
    let hoy = dia + "-" + mes + "-" + año;
    document.getElementById("fecha").innerHTML = hoy; 
}

fechaActual();