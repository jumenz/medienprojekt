<?php
require_once('../Model/Addresses.php');
require_once('../Controller/AddressController.php');
$isAdmin = true; // TODO test auf admin -> hier ändern für andere testansicht!
$userId = '4'; // TODO userid abrufen
$userMail = 'ellen@example.com'; // TODO userMail abrufen
$rows = count($dataArray);
//print_r($dataArray);
?>
<html>

<head>
<!-- common settings -->
<?php include_once('head.html'); ?>
<!-- page specific settings -->
<title>Este Frauen | Adressbuch</title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" type="text/css" href="../../css/addresses.css"/>
<script type="text/javascript" src="../../js/db.js"></script>
</head>

<body id="addresses">
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
            <div id="addressbook" class="content-list">
                <!--Contentbox One-Col Dropdown -->
                <ul>
                    <!--adminpanel new entry -->
                    <?php if ($isAdmin) : ?>
                        <li class="one-col">
                            <div class="main-content-box box-borders-top bg clearfix toggle-item">
                                <h2 class="box-title link toggle" >Neuer Eintrag</h2>
                                <div class="box-body toggle-content box-borders-bottom" id="box-address-name" style="display: none;">
                                    <form name="edit-<?php echo $i ?>" action="adressbuch.php" method="post" >
                                        <ul>
                                            <li class="first two-col">
                                                <fieldset class="first">
                                                    <div class="form-item">
                                                        <label for="prename">Vorname *</label>
                                                        <p class="input">
                                                            <input type="text" id="prename" class="input input-text required-entry" title="Vorname"
                                                                   name="prename" maxlength="255" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="name">Name *</label>
                                                        <p class="input">
                                                            <input type="text" id="name" class="input input-text required-entry" title="Name"
                                                                   name="name" maxlength="255" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="street">Strasse, Nr</label>
                                                        <p class="input">
                                                            <input type="text" id="street" class="input input-text left-text" title="Strasse" name="street"
                                                                   maxlength="255" value="<?php echo $dataArray[$i]['street']; ?>">
                                                            <input type="text" id="nr" class="input input-text right-text" title="Hausnummer" name="nr"
                                                                   maxlength="6" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="city">PLZ, Ort</label>
                                                        <p class="input">
                                                            <input type="text" id="zipcode" class="input input-text left-text" title="Postleitzahl" name="zipcode"
                                                                   maxlength="5" value="<?php echo $dataArray[$i]['zipcode']; ?>">
                                                            <input type="text" id="city" class="input input-text right-text" title="Stadt" name="city"
                                                                   maxlength="255" value="">
                                                        </p>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="last two-col">
                                                <fieldset class="last clearfix">
                                                    <div class="form-item required">
                                                        <label for="email">E-Mail *</label>
                                                        <p class="input">
                                                            <input type="text" id="email" class="input input-text required-entry" title="E-Mail-Adresse"
                                                                   name="email" maxlength="255" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="phone">Festnetznummer (040-123456)</label>
                                                        <p class="input">
                                                            <input type="text" id="phone" class="input input-text" title="Festnetznummer" name="phone"
                                                                   maxlength="32" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="phone">Handynummer (0160-123456)</label>
                                                        <p class="input">
                                                            <input type="text" id="mobile" class="input input-text" title="Handynummer" name="mobile"
                                                                   maxlength="32" value="">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="date-birth">Geburtsdatum</label>
                                                        <p class="input">
                                                            <input type="text" id="date-birth" class="input input-text" title="Geburtsdatum"
                                                                   name="birthday" maxlength="10" value="">
                                                        </p>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                        <hr />
                                        <fieldset id="buttons">
                                            <div class="form-submit">
                                                <p id="required">* Pflichtfelder</p>
                                                <p>
                                                    <input type="hidden" name="id" value=""/>
                                                    <button class="dark-bg" type="reset" name="reset" value="update"><div class="forward-raquo menu-link right"></div>Zurücksetzen</button>
                                                    <button class="dark-bg" type="submit" name="action" value="save"><div class="forward-raquo menu-link right"></div>Speichern</button>
                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php endif ?>
                    <!--end adminpanel new entry -->

                    <li class="one-col">
                        <div class="main-content-box box-borders-top bg clearfix">
                            <h2 class="box-title link" >Alle</h2>
                            <a class="right box-link"
                               href="mailto:<?php echo $userMail; ?>?bcc=<?php $k=0; for (; $k<$rows-1; $k++) { echo $dataArray[$k]['email'] . ',%20';} echo $dataArray[$k]['email'] . '&amp;subject=Este%2006/70%20-%20Frauen'; ?>">
                                <span>E-Mail</span>
                                <div class="forward-raquo menu-link right"></div>
                            </a>
                        </div>
                    </li>

                    <?php $abc = $rows>0 ? $dataArray[0]['name'][0] : '';?>
                    <!-- foreach addresses -->
                    <?php for ($i=0; $i<$rows; $i++) : ?>
                        <?php $firstLetter = $dataArray[$i]['name'][0]; ?>
                        <li id="<?php echo $abc==$firstLetter && $i!=0 ? '' : $firstLetter; ?>" class="one-col">
                            <div  class="main-content-box box-borders-top bg clearfix toggle-item">
                                <h2 class="box-title link toggle" id="address-name" >
                                    <?php echo $dataArray[$i]['name']; ?>,&nbsp;<?php echo $dataArray[$i]['prename']; ?>
                                </h2>
                                <a class="right box-link" href="mailto:<?php echo $dataArray[$i]['email']; ?>">
                                    <span>E-Mail</span>
                                    <div class="forward-raquo menu-link right"></div>
                                </a>
                                <?php if ($dataArray[$i]['id'] == $userId || $isAdmin) : ?>
                                <div class="box-body toggle-content box-borders-bottom" style="display: none;">
                                    <form name="edit-<?php echo $i ?>" action="adressbuch.php" method="post" >
                                        <ul>
                                            <li class="first two-col">
                                                <fieldset class="first">
                                                    <div class="form-item">
                                                        <label for="prename">Vorname *</label>
                                                        <p class="input">
                                                            <input type="text" id="prename" class="input input-text required-entry" title="Vorname"
                                                                   name="prename" maxlength="255" value="<?php echo $dataArray[$i]['prename']; ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="name">Name *</label>
                                                        <p class="input">
                                                            <input type="text" id="name" class="input input-text required-entry" title="Name"
                                                                   name="name" maxlength="255" value="<?php echo $dataArray[$i]['name']; ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="street">Strasse, Nr</label>
                                                        <p class="input">
                                                            <input type="text" id="street" class="input input-text left-text" title="Strasse" name="street"
                                                                   maxlength="255" value="<?php echo $dataArray[$i]['street']; ?>">
                                                            <input type="text" id="nr" class="input input-text right-text" title="Hausnummer" name="nr"
                                                                   maxlength="6" value="<?php if ($dataArray[$i]['nr'] != '0') { echo $dataArray[$i]['nr']; } ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="city">PLZ, Ort</label>
                                                        <p class="input">
                                                            <input type="text" id="zipcode" class="input input-text left-text" title="Postleitzahl" name="zipcode"
                                                                   maxlength="5" value="<?php echo $dataArray[$i]['zipcode']; ?>">
                                                            <input type="text" id="city" class="input input-text right-text" title="Stadt" name="city"
                                                                   maxlength="255" value="<?php echo $dataArray[$i]['city']; ?>">
                                                        </p>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="last two-col">
                                                <fieldset class="last clearfix">
                                                    <div class="form-item required">
                                                        <label for="email">E-Mail *</label>
                                                        <p class="input">
                                                            <input type="text" id="email" class="input input-text required-entry" title="E-Mail-Adresse"
                                                                   name="email" maxlength="255" value="<?php echo $dataArray[$i]['email']; ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="phone">Festnetznummer (040-123456)</label>
                                                        <p class="input">
                                                            <input type="text" id="phone" class="input input-text" title="Festnetznummer" name="phone"
                                                                   maxlength="32" value="<?php echo $dataArray[$i]['phone']; ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="phone">Handynummer (0160-123456)</label>
                                                        <p class="input">
                                                            <input type="text" id="mobile" class="input input-text" title="Handynummer" name="mobile"
                                                                   maxlength="32" value="<?php echo $dataArray[$i]['mobile']; ?>">
                                                        </p>
                                                    </div>
                                                    <div class="form-item">
                                                        <label for="date-birth">Geburtsdatum</label>
                                                        <p class="input">
                                                            <input type="text" id="date-birth" class="input input-text" title="Geburtsdatum"
                                                                   name="birthday" maxlength="10" value="<?php if ($data_Array[$i]['birthday'] != '0000-00-00') { echo $model->changeDate2German($dataArray[$i]['birthday']); } ?>">
                                                        </p>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                        <hr />
                                        <fieldset id="buttons">
                                            <div class="form-submit">
                                                <p id="required">* Pflichtfelder</p>
                                                <p>
                                                    <input type="hidden" name="id" value="<?php echo $dataArray[$i]['id']; ?>"/>
                                                    <button class="dark-bg" type="reset" name="reset" value="update"><div class="forward-raquo menu-link right"></div>Zurücksetzen</button>
                                                    <button class="dark-bg" type="submit" name="action" value="delete"><div class="forward-raquo menu-link right"></div>Eintrag Löschen</button>
                                                    <button class="dark-bg" type="submit" name="action" value="update"><div class="forward-raquo menu-link right"></div>Aktualisieren</button>
                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <?php else : ?>
                                <div class="box-body toggle-content box-borders-bottom" style="display: none;">
                                    <p>
                                        <?php echo $dataArray[$i]['prename']; ?>&nbsp;<?php echo $dataArray[$i]['name']; ?><br />
                                        <?php echo $dataArray[$i]['street'] . ' '; if ($dataArray[$i]['nr'] != '0') { echo $dataArray[$i]['nr'];} ?><br />
                                        <?php if ($dataArray[$i]['zipcode'] != '0') { echo $dataArray[$i]['zipcode']; } echo ' ' . $dataArray[$i]['city']; ?><br /><br />
                                        <a href="mailto:<?php echo $dataArray[$i]['email']; ?>">
                                            <?php echo $dataArray[$i]['email']; ?>
                                        </a><br />
                                        <?php echo $dataArray[$i]['mobile']; ?><br />
                                        <?php echo $dataArray[$i]['phone']; ?><br /><br />
                                        <?php if ($data_Array[$i]['birthday'] != '0000-00-00'): ?>
                                            <?php echo $model->changeDate2German($dataArray[$i]['birthday']); ?>
                                        <?php endif ?>
                                    </p>
                                </div>
                                <?php endif ?>
                            </div>
                        </li>
                        <?php $abc = $abc!=$firstLetter ? $firstLetter : $abc;?>
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
<script type="text/javascript">
    $( function() {
        $("button[data-href]").click( function() {
            location.href = $(this).attr("data-href");
        });
    });
</script>
</html>
