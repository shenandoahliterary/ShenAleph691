( function($) {
//$(document).ready(function () {
  console.log("in script");
  $('#translation-control-panel').css('visibility', 'visible');
  $('#unerased').css('visibility', 'visible');
  $('#erased').css('visibility', 'hidden');

    $("#select-unerased").click(function (e) {
      e.preventDefault();
      console.log("original clicked");
      $('#erased').hide('slow');
      $('#unerased').hide('slow');

    //  $('#translation').css('visibility', 'hidden');
    //  $("#original").css('visibility', 'visible');
    //  if ($('#original').css('display') == 'none') {
      //  $('#mugo-video').css('visibility', 'hidden');
      //  $('#original').css('display', 'block');
    //  }
    });
    $("#select-erased").click(function (f) {
      f.preventDefault();
      console.log("erasure clicked");
      $('#unerased').hide('slow');
      $('#erased').show('slow');

    });
//});
} )(jQuery);
