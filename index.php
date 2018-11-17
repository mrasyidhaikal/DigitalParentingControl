<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>
<link rel="stylesheet" type="text/css" href="index.css">
<body>




<section class="info-section bg-primary py-0">
  <div class="container-fluid">
    <div class="row">
            <div class="col-md-6 col-lg-6 content-half mt-md-0 pl-5 pt-4">
                <div class="head-box mb-5 pl-5 mt-2">
          <h2 class="text-white">Our Story</h2>
          <h6 class="text-white text-underline-rb-white">This is information panel</h6>
        </div>
                <ul class="pl-5">
                    <li>
                      <i class="fa fa-laptop box-round-outline" aria-hidden="true"></i>
                      <span class="list-content">
                        <strong>Responsive Design</strong>
                        <br>Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </span>
                  </li>
                    <li>
                      <i class="fa fa-cloud-upload box-round-outline" aria-hidden="true"></i>
                      <span class="list-content">
                        <strong>Cloud Storage</strong>
                        <br>Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </span>
                    </li>
                    <li>
                      <i class="fa fa-diamond box-round-outline" aria-hidden="true"></i>
                      <span class="list-content">
                        <strong>Premium Features</strong>
                        <br>Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 p-0 m-0">
              <img src="https://grafreez.com/wp-content/temp_demos/suffi/img/intro-bg.jpg" class="img-fluid">
            </div>
        </div>
</section>

<section class="team-section py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="head-box text-center mb-5 col-md-12">
        <h2>Meet Our Team</h2>
        <h6 class="text-underline-primary mb-5">This is information panel</h6>
      </div>
      <div class="col-md-4 mb-md-0 mb-sm-4">
        <div class="member-box anim-lf t-bottom">
              <img class="img-fluid" src="https://grafreez.com/wp-content/temp_demos/suffi/img/t-member-01.jpg" alt="">
              <div class="overlay-content">
                <h3 class="text-white ml-3 my-0">Jim Gorden</h3>
                <p class="text-white ml-3 mb-3">Developer</p>
                <span class="socail-l ml-3 mb-3">
                  <a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
            <a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
            <a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>
                </span>
              </div>
          </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-sm-4">
        <div class="member-box anim-lf t-bottom">
              <img class="img-fluid" src="https://grafreez.com/wp-content/temp_demos/suffi/img/t-member-02.jpg" alt="">
              <div class="overlay-content">
                <h3 class="text-white ml-3 my-0">Peyton Warren</h3>
                <p class="text-white ml-3 mb-3">UI/UX</p>
                <span class="socail-l ml-3 mb-3">
                  <a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
            <a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
            <a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>
                </span>
              </div>
          </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-sm-4">
        <div class="member-box anim-lf t-bottom">
              <img class="img-fluid" src="https://grafreez.com/wp-content/temp_demos/suffi/img/t-member-03.jpg" alt="">
              <div class="overlay-content">
                <h3 class="text-white ml-3 my-0">Craig Thompson</h3>
                <p class="text-white ml-3 mb-3">Manager</p>
                <span class="socail-l ml-3 mb-3">
                  <a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
            <a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
            <a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>
                </span>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>
</body>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript">
  
  "use strict";

var Dashboard = function () {
  var global = {
    tooltipOptions: {
      placement: "right"
    },
    menuClass: ".c-menu"
  };

  var menuChangeActive = function menuChangeActive(el) {
    var hasSubmenu = $(el).hasClass("has-submenu");
    $(global.menuClass + " .is-active").removeClass("is-active");
    $(el).addClass("is-active");

    // if (hasSubmenu) {
    //  $(el).find("ul").slideDown();
    // }
  };

  var sidebarChangeWidth = function sidebarChangeWidth() {
    var $menuItemsTitle = $("li .menu-item__title");

    $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
    $(".hamburger-toggle").toggleClass("is-opened");

    if ($("body").hasClass("sidebar-is-expanded")) {
      $('[data-toggle="tooltip"]').tooltip("destroy");
    } else {
      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };

  return {
    init: function init() {
      $(".js-hamburger").on("click", sidebarChangeWidth);

      $(".js-menu li").on("click", function (e) {
        menuChangeActive(e.currentTarget);
      });

      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };
}();

Dashboard.init();
//# sourceURL=pen.js
</script>
</body></html>