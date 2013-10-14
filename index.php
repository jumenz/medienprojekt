<!DOCTYPE HTML>
<html>
<head>
    <!-- common settings -->
    <?php include_once('head.html'); ?>
    <!-- page specific settings -->
    <title>Medienprojekt</title>
</head>
<body class="...">
<!-- Header -->
<?php include_once('header.html'); ?>
<div class="main-container">
    <!-- Content -->
    <div class="container">
        <div class="main">
            <div class="main-inner">
                <!-- Sidebar -->
                <div id="sidebar" class="content-layout-cell sidebar">
                    <div class="outer">
                        <div class="inner">
                            <div id="..." class="content-list dark-bg toggle-item">
                                <h2 class="sidebar-title display-desktop">Chronik</h2>
                                <div id="menu-div" class="menublock-sidebar hidden-desktop toggle">
                                    <h2 class="menu-title link" id="menu-sidebar" >Menü</h2>
                                </div>
                                <!-- Sidebar Menu -->
                                <div id="box-menu-sidebar" class="menublock-sidebar menu-sidebar light-bg toggle-content">
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <span>Erster Punkt</span>
                                                <div class="forward-raquo menu-link right"></div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Zweiter Punkt</span>
                                                <div class="forward-raquo menu-link right"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Dritter Punkt</span>
                                                <div class="forward-raquo menu-link right"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Vierter Punkt</span>
                                                <div class="forward-raquo menu-link right"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end Sidebar Menu -->
                                <!-- Timer -->
                                <div class="menublock-sidebar timer">
                                    <div class="timer-inner">
                                        <ul class="timer-menu display-desktop">
                                            <li>
                                                <a href="#" class="back">
                                                    <div class="back-raquo menu-link left"></div>
                                                </a>
                                            </li>
                                            <li class="center">
                                                <span>2013</span>
                                            </li>
                                            <li>
                                                <a href="#" class="forward">
                                                    <div class="forward-raquo menu-link right"></div>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="timer-content">
                                            <li class="hidden-desktop double-width">
                                                <a href="#" class="timer-link">
                                                    <div class="list-item bg double-width">
                                                        <span>2012</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php for($i=1; $i<=12; $i++) : ?>
                                                <li>
                                                    <a href="#" id="item-<?php echo $i ?>" class="timer-link">
                                                        <div class="list-item bg">
                                                            <span><?php echo $i ?></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endfor ?>
                                            <li class="hidden-desktop double-width">
                                                <a href="#" class="timer-link">
                                                    <div class="list-item bg double-width">
                                                        <span>2014</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end Timer -->

                                    <!-- ABC -->
                               <div class="menublock-sidebar timer">
                                    <div class="timer-inner">
                                        <ul class="timer-content">
                                            <? for($i="A"; strlen($i) <2; $i++) : ?>
                                                <li>
                                                    <a href="#" id="item-<?php echo $i ?>" class="timer-link">
                                                        <div class="list-item bg">
                                                            <span><?php echo $i ?></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endfor ?>
                                        </ul>
                                    </div>
                                </div>

                            <!-- end ABC -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- main Content small-->
                <div id="main-content-small" class="content-layout-cell main-content main-content-small">
                    <div class="outer">
                        <div class="inner">

                            <!--Page Title -->
<!--                            <h1 class="headline-main-content">
                                <span id="...">Titel der Seite</span>
                            </h1>
                            <b>
                                <span>Beschreibung der Seite, also etwas Text.</span>
                            </b>
-->
                            <!--end Page Title -->

                            <div id="..." class="content-list">
                                <!--Contentbox Two-Col -->
                                <ul>
                                    <li class="first two-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-head">
                                                <img src="./media/demo.jpg" />
                                            </div>
                                            <div class="box-body">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <a href="#">
                                                <div class="forward-raquo content-link right"></div>
                                            </a>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                    <li class="last two-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-head">
                                                <img src="./media/demo.jpg" />
                                            </div>
                                            <div class="box-body">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <a href="#">
                                                <div class="forward-raquo content-link right"></div>
                                            </a>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                    <li class="first two-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-head">
                                                <img src="./media/demo.jpg" />
                                            </div>
                                            <div class="box-body">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <a href="#">
                                                <div class="forward-raquo content-link right"></div>
                                            </a>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                    <li class="last two-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-head">
                                                <img src="./media/demo.jpg" />
                                            </div>
                                            <div class="box-body">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <a href="#">
                                                <div class="forward-raquo content-link right"></div>
                                            </a>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end Contentbox Two-Col -->

                                <!--Contentbox One-Col -->
                                <ul>
                                    <li class="one-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-info light-bg">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <div class="box-body">
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end Contentbox One-Col -->

                                <!--Contentbox One-Col Dropdown -->
                                <ul>
                                    <li class="one-col">
                                        <!-- foreach addresses as address -->
                                        <div  class="main-content-box box-borders-top bg clearfix toggle-item">
                                            <h2 class="box-title link toggle" id="address-name" >Box Überschrift</h2>
                                            <a class="right box-link" href="#">
                                                <span>E-Mail</span>
                                                <div class="forward-raquo menu-link right"></div>
                                            </a>
                                            <div class="box-body toggle-content box-borders-bottom" id="box-address-name" style="display: none;">
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                        </div>

                                        <!-- endforeach addresses as address -->
                                    </li>
                                </ul>
                                <!-- end Contentbox One-Col Dropdown -->

                                <!--Contentbox One-Col Tablehead-->
                                <ul>
                                    <li class="one-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-info clearfix light-bg">
                                                <div class="left half-width">
                                                    <table class="first">
                                                        <tbody>
                                                            <tr class="first">
                                                                <th class="first color-font">Erster Schlüßel:</th>
                                                                <td class="last">Wert</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="first color-font">Zweiter Schlüßel:</th>
                                                                <td class="last">Wert</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="left half-width">
                                                    <table class="last">
                                                        <tbody>
                                                        <tr>
                                                            <th class="firs color-font">Erster Schlüßel:</th>
                                                            <td class="last">Wert</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="first color-font">Zweiter Schlüßel:</th>
                                                            <td class="last">Wert</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end Contentbox One-Col -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end main Content small-->

                <!-- main Content large -->
                <div id="main-content-large" class="content-layout-cell main-content main-content-large">
                    <div class="outer">
                        <div class="inner">
                            <div id="..." class="content-list">
                                <!--Contentbox One-Col -->
                                <ul>
                                    <li class="one-col">
                                        <div class="main-content-box box-borders bg clearfix">
                                            <div class="box-info light-bg">
                                                <p>Erster Absatz mit Text?</p>
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <div class="box-body">
                                                <p>Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen für alle. Und noch viel mehr!</p>
                                            </div>
                                            <h2 class="box-title">Box Überschrift</h2>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end Contentbox One-Col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end main Content large -->
            </div>
        </div>
    </div>
    <!-- end Content -->
</div>
<!-- Footer -->
<?php include_once('footer.html'); ?>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('.toggle-item').each(function(idx, itm) {
            $(itm).find('.toggle').on('click', function() {
                $(itm).find('.toggle-content').toggle(200);
            });
        });
    });
</script>

</html>