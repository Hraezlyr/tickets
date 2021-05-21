    var ticket = document.getElementById('ticket');
    var gestion = document.getElementById('gestion');

    var numero_ticket = document.getElementById('numero_ticket').textContent;
    var nombre_gestion = document.getElementById('nombre_gest').textContent;

    document.getElementById('nombre_cliente').disabled = true;
    document.getElementById('apellido_cliente').disabled = true;
    document.getElementById('direccion').disabled = true;
    document.getElementById('telefono').disabled = true;
    document.getElementById('nombre_gestion').disabled = true;
    document.getElementById('problema_expuesto').disabled = true;
    document.getElementById('solucion_brindada').disabled = true;


    var boton = document.getElementById('boton');


    boton.addEventListener("click",function() {
        ticket.textContent = numero_ticket;
        gestion.textContent = nombre_gestion;

        document.getElementById('nombre_cliente').disabled = false;
        document.getElementById('apellido_cliente').disabled = false;
        document.getElementById('direccion').disabled = false;
        document.getElementById('telefono').disabled = false;
        document.getElementById('nombre_gestion').disabled = false;
        document.getElementById('problema_expuesto').disabled = false;
        document.getElementById('solucion_brindada').disabled = false;
    })
