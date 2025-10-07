$(document).ready(function () {
  $(".quote-button").on("click", async function () {
    const placa = $("#placa").val();
    const placaMoto = /^[a-zA-Z]{3}[0-9]{2}[a-zA-Z]{1}/;
    const placaCarro = /^[a-zA-Z]{3}[0-9]{3}$/;

    if (placaMoto.test(placa) || placaCarro.test(placa)) {
      $(".loaderrr").addClass("displayBlock");
      $(".quote-button").prop("disabled", true);

      checkSecondApi();
    } else {
      console.log("La placa no es correcta, muestra un modal");
    }
  });

  function checkSecondApi(cdPoliza) {

    var cdPoliza = $("#placa").val();

    var xhr2 = new XMLHttpRequest();
    xhr2.open(
      "GET",
      "apiSoat.php?placa=" + encodeURIComponent(cdPoliza),
      true
    );
    xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr2.send();

    xhr2.onreadystatechange = function () {
      if (xhr2.readyState === XMLHttpRequest.DONE) {
        if (xhr2.status === 200) {
          var response2 = JSON.parse(xhr2.responseText);

          // Verificar si hay errores en la nueva API
          if (!response2.resumen || (response2.datos && response2.datos.errors && response2.datos.errors.length > 0)) {
            $('.modalSotoVigente').removeClass('displayNone');
            $('#loader').addClass('displayNone');
            $(".loaderrr").removeClass("displayBlock");
            $(".quote-button").prop("disabled", false);
            return;
          }

          // Mapear los campos de la nueva API a la estructura esperada
          var mappedResponse = {
            placa: response2.resumen.placa,
            marca: response2.resumen.marca,
            linea: response2.resumen.linea,
            modelo: response2.resumen.modelo,
            cc: response2.resumen.cc,
            precio: response2.resumen.soat_2025.precio_total,
            ip: response2.resumen.ip
          };

          if (mappedResponse.precio && mappedResponse.precio !== "null" && mappedResponse.precio !== "$0") {
            handleResponse(mappedResponse, cdPoliza);
          } else {
            showError();
          }
        } else {
          // Error en la petición HTTP
          showError();
        }
      }
    };
  }

  function handleResponse(response, cdPoliza) {
    localStorage.setItem("placa", cdPoliza);
    localStorage.setItem("marca", response.marca);
    localStorage.setItem("linea", response.linea);
    localStorage.setItem("modelo", response.modelo);
    localStorage.setItem("cilindraje", response.cc);
    localStorage.setItem("ip", response.ip);

    var variablePrecio = response.precio;
    var precioFormateado = parseInt(
      variablePrecio.replace(/[^\d]/g, "")
    );
    localStorage.setItem("valor", precioFormateado);

    if (response.precio !== "$0" && response.precio !== "null") {
      window.location.href = "../../digital/datos/";
    } else {
      showError();
    }
  }

  function showError() {
    $(".modalSotoVigente").addClass("displayBlock");
    $(".modalSotoVigente").removeClass("displayNone");
    $(".loaderrr").removeClass("displayBlock");
    $(".quote-button").prop("disabled", false);
  }

  $(".btnEntendidoModalW").on("click", function () {
    $(".modalBienvenida").addClass("displayNone");
  });

  $("#cerrarModalManito").on("click", function () {
    $(".modalBienvenida").addClass("displayNone");
  });

  $(".btnAceptarModalSotoVigente").on("click", function () {
    $(".modalSotoVigente").addClass("displayNone");
  });
});