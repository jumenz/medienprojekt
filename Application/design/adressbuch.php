<html>
<head>
<!-- common settings -->
<?php
include_once('head.html');
?>
<!-- page specific settings -->
<title>Este Frauen | Adressbuch</title>
<meta name="robots" content="noindex, nofollow">
<script type="text/javascript" src="/js/db.js"></script>
</head>
<?php
$isMember = true;
$isAdmin = true;
// $dataArray = $model->getListData();
$dataArray = array(
    '1' => array(
        'name' => 'Schwartau',
        'prename' => 'Ellen',
        'date_birth' => '11.06.1992',
        'street' => 'Musterstraße',
        'nr' => '12',
        'zipcode' => '21193',
        'city' => 'Hamburg',
        'mail' => 'ellen.schwartau@hotmail.de',
        'mobile' => '0160-1234567',
        'phone' => '040-1234567'
    ),
    '0' => array(
        'name' => 'Menzel',
        'prename' => 'Julia',
        'date_birth' => '22.12.1984',
        'street' => 'Musterstraße',
        'nr' => '66',
        'zipcode' => '21193',
        'city' => 'Hamburg',
        'mail' => 'jumenz@web.de',
        'mobile' => '0160-1234567',
        'phone' => '040-1234567'
    )
);
$rows = count($dataArray);
//$cols = count($data_Array, COUNT_RECURSIVE)/$rows;
//print_r($data_Array);
?>
</head>
<body>
<!-- header -->
<?php include_once('header.html'); ?>
<!-- content der Seite -->
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
                <h2 class="sidebar-title display-desktop">Adressbuch</h2>
                <div id="menu-div" class="menublock-sidebar hidden-desktop toggle">
                    <h2 class="menu-title link" id="menu-sidebar" >Menü</h2>
                </div>
                <!-- Sidebar Menu -->
                <div id="box-menu-sidebar" class="menublock-sidebar menu-sidebar light-bg toggle-content">
                    <ul class="menu">
                        <li>
                            <a href="adressbuch.php">
                                <span>Übersicht</span>
                                <div class="forward-raquo menu-link right"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end Sidebar Menu -->

                <!-- ABC -->
                <div class="menublock-sidebar timer">
                    <div class="timer-inner">
                        <ul class="timer-content">
                            <? for($i="A"; strlen($i) <2; $i++) : ?>
                                <li>
                                    <a href="#<?php echo $i ?>" id="item-<?php echo $i ?>" class="timer-link">
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
            <div id="..." class="content-list">
                <!--Contentbox One-Col Dropdown -->
                <ul>
                    <?php $abc = 'A'; ?>
                    <!-- foreach addresses -->
                    <?php for ($i=0; $i<$rows; $i++): ?>
                    <?php $firstLetter = $dataArray[$i]['name'][0]; ?>
                    <li class="one-col">
                            <div  class="main-content-box box-borders-top bg clearfix toggle-item">
                                <h2 class="box-title link toggle" id="address-name" >
                                    <a name="<?php echo $abc ?>">
                                        <?php echo $dataArray[$i]['name']; ?>,&nbsp;<?php echo $dataArray[$i]['prename']; ?>
                                    </a>
                                </h2>
                                <a class="right box-link" href="mailto:<?php echo $dataArray[$i]['mail']; ?>">
                                    <span>E-Mail</span>
                                    <div class="forward-raquo menu-link right"></div>
                                </a>
                                <div class="box-body toggle-content box-borders-bottom" id="box-address-name" style="display: none;">
                                    <p>
                                            <?php echo $dataArray[$i]['prename']; ?>&nbsp;<?php echo $dataArray[$i]['name']; ?><br />
                                            <?php echo $dataArray[$i]['street'] . ' '; if ($dataArray[$i]['nr'] != '0') { echo $dataArray[$i]['nr'];} ?><br />
                                            <?php if ($dataArray[$i]['zipcode'] != '0') { echo $dataArray[$i]['zipcode']; } echo ' ' . $dataArray[$i]['city']; ?><br /><br />
                                            <a href="mailto:<?php echo $dataArray[$i]['mail']; ?>">
                                                <?php echo $dataArray[$i]['mail']; ?>
                                            </a><br />
                                            <?php echo $dataArray[$i]['mobile']; ?><br />
                                            <?php echo $dataArray[$i]['phone']; ?><br />
                                    </p>
                                    <?php if ($isAdmin) :?>
                                            <p>
                                                <a href="../Controller/ApplicantController.php?action=detail&id=<?php echo $dataArray[$i]['id']; ?>">
                                                    <span>Bearbeiten</span>
                                                    <span class="forward-raquo menu-link right"></span>
                                                </a>
                                            </p>
                                    <?php endif ?>
                                </div>
                            </div>
                    </li>
                    <?php endfor ?>
                    <!-- end foreach addresses -->
                </ul>
                <!-- end Contentbox One-Col Dropdown -->
            </div>
        </div>
    </div>
</div>
<!-- end main Content small-->
</div>
</div>
</div>
<!-- end Content -->
</div>
<!-- footer -->
<?php include_once(ROOT . 'footer.html'); ?>
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
