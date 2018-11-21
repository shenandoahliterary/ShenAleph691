( function() {
$(document).ready(function () {
    $("#saimon").click(function () {
      $("#debate-holder").css('display', 'none');
      if ($('#saimon-video').css('display') == 'none') {
        $('#mugo-video').css('visibility', 'hidden');
        $('#saimon-video').css('display', 'block');

      }
    });
    $("#mugo").click(function () {
        if ($('#mugo-video').css('visibility') == 'hidden') {
          $("#debate-holder").css('display', 'none');
                $('#saimon-video').css('display', 'none');
                $('#mugo-video').css('visibility', 'visible');

              }
        else $('#message').css('visibility', 'hidden');
    });
});
} )();
