var db_contact = firebase.firestore();

// Primera
const formulario_contact = document.getElementById("formulario__agente"),
  modalenviado2 = document.getElementById("modalenviado__contact"),
  mensajeenviadoagente = document.getElementById("mensajeagenteenviado"),
  respuesta2 = document.getElementById("respuestaContact");

formulario_contact.addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();
  $(".bg-alerta").remove();
  $(".bg-advertencia").remove();
  const nombre_completo = getInputVal("nombre_completo"),
    nombre_empresa = getInputVal("nombre_empresa"),
    nombre_web = getInputVal("nombre_web"),
    email_empresa = getInputVal("email_empresa"),
    pais_empresa = getInputVal("pais_empresa"),
    organization = getInputVal("organization"),
    mensaje_empresa = getInputVal("mensaje_empresa"),
    recaptchaValidate = getInputVal("g-recaptcha-error");

  if (nombre_completo == "" || nombre_completo == null) {
    cambiarColor2("nombre_completo");
    mostrarAlert2("¿Cuál es tu Nombre Completo?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(nombre_completo)) {
      cambiarColor2("nombre_completo");
      showAdvert2("Nombre inválido");
      return false;
    }
  }

  if (nombre_empresa == "" || nombre_empresa == null) {
    cambiarColor2("nombre_empresa");
    mostrarAlert2("¿Cuál es el nombre de la empresa?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(nombre_empresa)) {
      cambiarColor2("nombre_empresa");
      showAdvert2("Nombre de la empresa inválido");
      return false;
    }
  }

  if (nombre_web == "" || nombre_web == null) {
    cambiarColor2("nombre_web");
    mostrarAlert2("¿Cuál es la página web de la empresa?");

    return false;
  } else {
    const expresion = /^[a-z0-9-\.]+\.[a-z]{2,4}\/?([^\s<>\#%"\,\{\}\\|\\\^\[\]`]+)?$/;
    if (!expresion.test(nombre_web)) {
      cambiarColor2("nombre_web");
      showAdvert2("Página web de la empresa inválido");
      return false;
    }
  }

  if (email_empresa == "" || email_empresa == null) {
    cambiarColor2("email_empresa");
    mostrarAlert2("¿Cuál es tu email?");
    return false;
  } else {
    const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!expresion.test(email_empresa)) {
      cambiarColor2("email_empresa");
      showAdvert2("Email inválido");
      return false;
    }
  }

  if (pais_empresa == "" || pais_empresa == null) {
    cambiarColor2("pais_empresa");
    mostrarAlert2("¿De qué país es la empresa?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(pais_empresa)) {
      cambiarColor2("pais_empresa");
      showAdvert2("Pais inválido");
      return false;
    }
  }

  if (organization == "" || organization == null) {
    cambiarColor2("organization");
    mostrarAlert2("¿A qué organización pertenece la empresa?");

    return false;
  } else {
    const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(organization)) {
      cambiarColor2("organization");
      showAdvert2("Organización inválida");
      return false;
    }
  }

  if (mensaje_empresa == "" || mensaje_empresa == null) {
    //cambiarColor2("mensaje");
    mostrarAlert2("Escriba su mensaje por favor");
    return false;
  } else {
    const expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
    if (!expresion.test(mensaje_empresa)) {
      formulario_contact.mensaje_empresa.focus();
      cambiarColor2("mensaje_empresa");
      showAdvert2("Mensaje inválido");
      return false;
    }
  }

  const response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<div class="bg-alerta z-depth-2 animated bounceIn fast mt-2">Marque la opción</div>';
    return false;
  } else {
    document.getElementById("g-recaptcha-error").innerHTML = "";
  }

  var agente = new FormData(formulario_contact);
  fetch("app/agente.php", {
    method: "POST",
    body: agente,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });

  //document.getElementById("myDIV").style.display = "none";
  //document.querySelector(".mensajeagenteenviado").style.display = "block";
  mensajeenviadoagente.style.display = "block";
  //cerrando modal
  $("#btnremove").click(function () {
    $(".modal-wrap").remove();
  });
  //showEnviado2();
  guardar_contact();
  /*  setTimeout(function() {
      desaparecerenviado();
    }, 3000);*/
  document.getElementById("formulario__agente").reset();
  grecaptcha.reset();
  //$("form").submit();
  return true;
}

// Agregar documentos
function guardar_contact() {
  var nombre_completo = document.getElementById("nombre_completo").value;
  var nombre_empresa = document.getElementById("nombre_empresa").value;
  var nombre_web = document.getElementById("nombre_web").value;
  var email_empresa = document.getElementById("email_empresa").value;
  var pais_empresa = document.getElementById("pais_empresa").value;
  var organization = document.getElementById("organization").value;
  var mensaje_empresa = document.getElementById("mensaje_empresa").value;

  db_contact.collection("Agente").add({
    NombreCompleto: nombre_completo,
    NombreEmpresa: nombre_empresa,
    PaginaWeb: nombre_web,
    Correo: email_empresa,
    PaisEmpresa: pais_empresa,
    Organizacion: organization,
    mensaje: mensaje_empresa,
    fecha: firebase.firestore.Timestamp.fromDate(new Date()),
  });
  //db.collection("contactos").orderBy("fecha", "desc");
}

$("input").focus(function () {
  $(".bg-alerta").remove();
  colorDefault2("nombre_completo");
  colorDefault2("nombre_empresa");
  colorDefault2("nombre_web");
  colorDefault2("email_empresa");
  colorDefault2("pais_empresa");
  colorDefault2("organization");
});

$("textarea").focus(function () {
  $(".bg-alerta").remove();
  colorDefault2("mensaje_empresa");
});

function getInputVal(id) {
  return document.getElementById(id).value;
}

function colorDefault2(dato) {
  return document
    .getElementById(dato)
    .setAttribute("style", "border-bottom: 1px solid #ced4da");
}

function cambiarColor2(dato) {
  return document
    .getElementById(dato)
    .setAttribute(
      "style",
      "border-bottom: 1px solid #ced4da !important;box-shadow: 0 1px 0 0 #ced4da !important;"
    );
}

function mostrarAlert2(texto) {
  respuesta2.innerHTML = `
                            <div class="bg-alerta z-depth-2 animated bounceIn fast small">
                                    ${texto}
                            </div>
                         `;
}

function showAdvert2(texto) {
  respuesta2.innerHTML = `
                            <div class="bg-advertencia z-depth-2 animated bounceIn fast small">
                                  ${texto}
                            </div>
                          `;
}

function showEnviado2(texto) {
  var mensajemodal2 = ``;

  $("body").append(mensajemodal2);
  //cerrando modal
  $("#btnremove").click(function () {
    $(".modal-wrap").remove();
  });
}

/*function desaparecerenviado() {
    respuesta
      .querySelector(".bg-enviando")
      .setAttribute("style", "display: none");
  }*/
