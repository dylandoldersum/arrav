<?php
require_once 'config/_configuration.php';

if (isset($navigationLinks)) {
    $link = $navigationLinks;
}
?>
<div class="newnav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <nav class="navigation-inner">
                            <img src="./assets/img/Branding.png" / alt="">
                            <?php
                            foreach (array_keys(array_slice($link, 0, 6)) as $key) {
                                echo '<a class="nav-link" href="' . $link["$key"] . '">' . $key . '</a>';
                            }
                            ?>
                            <a class="nav-link" href=""><img src="./assets/img/Discord-widget.png" / alt=""></a>
                            <a class="nav-link" href=""><img src="./assets/img/Youtube-widget.png" / alt=""></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu">
    <img src="./assets/img/Branding.png" />
    <nav class="hamburger">
        <button id="hamb">
            <div id="rect1" class="showRect"></div>
            <div id="rect2" class="showRect"></div>
            <div id="rect3" class="showRect"></div>
        </button>
        <div id="slideDown" class="hidden">
            <ul>
                <li><a href="<?= $navigationLinks['Home']; ?>">Home</a></li>
                <li><a href="<?= $navigationLinks['Play']; ?>">Play now</a></li>
                <li><a href="<?= $navigationLinks['Vote']; ?>">Vote</a></li>
                <li><a href="<?= $navigationLinks['Hiscores']; ?>">Hiscores</a></li>
                <li><a href="<?= $navigationLinks['Donations']; ?>">Donations</a></li>
            </ul>
        </div>
    </nav>
</div>