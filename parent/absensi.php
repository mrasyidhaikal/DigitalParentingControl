<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
$level = $_SESSION['level'];

if ($level != 'parent') {
    header('location:../login.php');
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
      <?php 
include '../koneksi.php';
$idd = $_SESSION['id_user'];
$query = mysql_query("SELECT * FROM `users` WHERE id_user = '$idd' ");
$row = mysql_fetch_array($query);
 ?>
       <div class="header-icons-group">
        <div class=""><a href="../logout.php"></a></i></div>

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
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pengumuman">
            <div class="c-menu__item__inner"><i class="fa fa-bullhorn"></i>
              <div class="c-menu-item__title"><span>Pengumuman</span></div>
            </div>
          </li></a>
         <a href="nilaimurid.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Nilai">
            <div class="c-menu__item__inner"><i class="fa fa-chart-bar"></i>
              <div class="c-menu-item__title"><span>Nilai</span></div>
            </div>
          </li>
          </a>
            <li class="c-menu__item is-active" data-toggle="tooltip" title="Absensi">
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
  <!--  ---------------------------------------------------------   -->
<form action="" method="post">
  <select name="bulan">
    <option value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>Maret</option>
    <option value='4'>April</option>
    <option value='5'>Mei</option>
    <option value='6'>Juni</option>
    <option value='7'>Juli</option>
    <option value='8'>Agustus</option>
    <option value='9'>September</option>
    <option value='10'>Oktober</option>
    <option value='11'>November</option>
    <option value='12'>Desember</option>
  </select>
    <?php 
    $already_selected_value = 1984;
    $earliest_year = 2007;

    echo "<select name='year'>";
    foreach (range(date('Y'), $earliest_year) as $x) {
    echo '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
    }
    echo '</select>';
    ?>
    <input type="submit" name="">
  <table border="1">
    <tr>
      <th>senin</th>
      <th>selasa</th>
      <th>rabu</th>
      <th>kamis</th>
      <th>jumat</th>
      <th>sabtu</th>
      <th>minggu</th>
    </tr>
    <tr>
      
    <?php
    //SELECT * FROM `absensi` WHERE `tanggal` LIKE '2018-11%' and nama='steven' ORDER BY `absensi`.`tanggal` ASC

    $data = mysql_query("SELECT * FROM `absensi` WHERE `tanggal` LIKE '2018-11%' and nama='steven' ORDER BY `absensi`.`tanggal` ASC");
    //$date = '15-12-2016';
    //$nameOfDay = date('l', strtotime($date));
    //echo $nameOfDay;
      $d = mysql_fetch_array($data);
      $f = mysql_num_rows($data);
      $a=0;
      $b=1;
      $c=1;
      $e=0;
      $date = $d['tanggal'];
      
      $nameOfDay = date('l', strtotime($date));
      
      echo "<script type='text/javascript'>alert('$nameOfDay');</script>";
      
      if ($nameOfDay=="Monday") {
        $e=1;
      }elseif ($nameOfDay=="Tuesday") {
        $e=2;
      }elseif ($nameOfDay=="Wednesday") {
        $e=3;
      }elseif ($nameOfDay=="Thursday") {
        $e=4;
      }elseif ($nameOfDay=="Friday") {
        $e=5;
      }elseif ($nameOfDay=="Saturday") {
        $e=6;
      }elseif ($nameOfDay=="Sunday") {
        $e=7;
      }

      echo "<script type='text/javascript'>alert('$e');</script>";
      
      while ($a < 42) 
      {
        $date = $d['tanggal'];
      
        $nameOfDay = date('l', strtotime($date));
      
        echo "<script type='text/javascript'>alert('$nameOfDay');</script>";
      
        if ($e==0) {
            if ($d['izin']==1) {
                echo "<td style='background-color: yellow'>$c</td>"; 
            }elseif ($d['sakit']==1) {
                echo "<td style='background-color: blue'>$c</td>";
            }elseif ($d['alfa']==1) {
                echo "<td style='background-color: red'>$c</td>";
            }elseif ($d['hadir']==1) {
                echo "<td style='background-color: green'>$c</td>";
            }
            if ($b==7) {
              echo("</tr><tr>");
              $b=0;
            }
            $b++;
            $a++;
            $c++;
        }else{
          echo "<td></td>";
          if ($b==7) {
              echo("</tr><tr>");
              $b=0;
          }
          $e--;
          $b++;
        }
      }
      echo "</tr>";
      ?>

  </table>
</form>


  <!--  ---------------------------------------------------------   -->

</main>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="script.js"></script>
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