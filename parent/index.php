<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
$level = $_SESSION['level'];
if ($level != 'parent') {
    header('location:login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>

<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-bell"></i>
        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>
      </div>
      <div class="c-search">
        <input class="c-search__input u-input" placeholder="Search..." type="text"/>
      </div>
      <div class="header-icons-group">
        <div class="c-header-icon logout"><a href="../logout.php"><i class="fa fa-power-off"></a></i></div>
      </div>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt"><img src="../img/mhs.png" class="img-responsive" width="43px"></div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <a href="index.php">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Pengumuman">
            <div class="c-menu__item__inner"><i class="fa fa-bullhorn"></i>
              <div class="c-menu-item__title"><span>Pengumuman</span></div>
            </div>
          </li></a>
         <a href="nilai.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Nilai">
            <div class="c-menu__item__inner"><i class="fa fa-chart-bar"></i>
              <div class="c-menu-item__title"><span>Nilai</span></div>
            </div>
          </li>
          </a>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Absensi">
            <div class="c-menu__item__inner"><i class="fas fa-calendar-alt"></i>
              <div class="c-menu-item__title"><span>Absensi</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pengaturan Akun">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Pengaturan Akun</span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
<main class="l-main">
   <div class="container">
  <div class="row">

    <section class="content">
      <h1>Table Filter</h1>
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
              </div>
            </div>
            <div class="table-container">
              <table class="table table-filter">
                <tbody>
                  <tr data-status="pagado">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pagado">(Pagado)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr data-status="pendiente">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pendiente">(Pendiente)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr data-status="cancelado">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right cancelado">(Cancelado)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr data-status="pagado" class="selected">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox4" checked>
                        <label for="checkbox4"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star star-checked">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pagado">(Pagado)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr data-status="pendiente">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox5">
                        <label for="checkbox5"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pendiente">(Pendiente)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>




</main>
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