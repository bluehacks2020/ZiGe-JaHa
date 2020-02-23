$(function(){
  /* --- DOM VARIABLES --- */

  // BROWSER GLOBALS
  browserWindow = $(window);
  screenHeight = $(window).outerHeight();
  screenWidth = $(window).outerWidth();
  browserWindow.resize(function(){
    screenHeight = $(window).outerHeight();
    screenWidth = $(window).outerWidth();
  });
  mainContent = $("#main-content");
  page = $("body");
  loadingOverlay = $(".loading-page");
  /* --- STAGING --- */

  // SHOW DIMENSION
  $("#screen-size").click(function(){
    alert("SCREEN: " +screenWidth +"X" +screenHeight);
  });

  // COMPUTE FOR HEIGHT
  var contentHeight = screenHeight - 100 > 0 ? screenHeight - 100 : 0;

  // SET INITIAL HEIGHT OF MAIN CONTENT ON LOAD
  mainContent.css("min-height",contentHeight);

  // SET HEIGHT OF MAIN CONTENT ON RESIZE
  browserWindow.resize(function(){
    // COMPUTE ON RESIZE
    contentHeight = screenHeight -100 > 0 ? screenHeight - 100 : 0;
    // SET WIDTH ON RESIZE
    mainContent.css("min-height",contentHeight);
  });


  /* --- GLOBALS --- */

  // LOADING OVERLAY
  loadingOverlay.fadeOut();

});
