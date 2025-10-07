$(document).ready(function () {
  $("#typeDocument").on("change", function () {
    if ($(this).val()) {
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
  });

  $("#numeroDni").on("input", function () {
    if ($(this).val().length >= 13) {
      $(this).addClass("bordesVerdes-input");
      $(".labelDni2").removeClass("colorLabelIncorrecto-label");
    } else {
      $(this).removeClass("bordesVerdes-input");
      $(this).addClass("bordesRojos-input");
    }
  });

  $("#numeroDni").focus("input", function () {
    $(".labelDni2").addClass("labelArribaInpusDatos");
  });

  $("#numeroDni").blur("input", function () {
    if ($(this).val().length >= 13) {
    } else {
      $(this).addClass("bordesRojos-input");
      $(".labelDni2").removeClass("labelArribaInpusDatos");
      $(".labelDni2").addClass("colorLabelIncorrecto-label");
    }
  });

  $("#telephone").on("input", function () {
    if ($(this).val().length >= 7) {
      $(this).addClass("bordesVerdes-input");
      $(".labelDni10").removeClass("colorLabelIncorrecto-label");
    } else {
      $(this).removeClass("bordesVerdes-input");
      $(this).addClass("bordesRojos-input");
    }
  });

  $("#telephone").focus("input", function () {
    $(".labelDni10").addClass("labelArribaInpusDatos");
  });

  $("#telephone").blur("input", function () {
    if ($(this).val().length >= 7) {
    } else {
      $(this).addClass("bordesRojos-input");
      $(".labelDni10").removeClass("labelArribaInpusDatos");
      $(".labelDni10").addClass("colorLabelIncorrecto-label");
    }
  });

  $("#numeroDni").alphanum({
    allow:
      "1234567890.-abcdefghijklmnopqrstuvwxyz_QWERTYUIOPASDFGHJKLÑZXCVBNM@",
    disallow: "!#%&/()=/*?¡¿{}[]ñÑ:;,<>|°+´^`¨†‡ˆ‰Š‹Œâáüzéíóúàèìòùâêîôûäëïöü$",
    allowUpper: true,
    allowSpace: false,
  });

  $("#telephone").alphanum({
    allow: "1234567890",
    disallow:
      "!#%&/()=/*?¡¿{}[]ñÑ:;,<>|°+´^`¨†‡ˆ‰Š‹Œâáüzéíóúàèìòùâêîôûäëïöü$.-abcdefghijklmnopqrstuvwxyz_QWERTYUIOPASDFGHJKLÑZXCVBNM ",
    allowUpper: true,
    allowSpace: false,
  });
});
