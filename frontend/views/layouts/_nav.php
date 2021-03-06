<?php 
use yii\helpers\Url;
?>
<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="<?= Url::base(true).'/' ?>" class="simple-text">
            <?= Yii::$app->name ?>
            </a>
        </div>


        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?= Url::base(true).'/element/dashboard' ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::base(true).'/element/user' ?>">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= Url::base(true).'/element/table' ?>">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::base(true).'/element/typography' ?>">
                        <i class="material-icons">library_books</i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::base(true).'/element/icons' ?>">
                        <i class="material-icons">bubble_chart</i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::base(true).'/element/map' ?>">
                        <i class="material-icons">location_on</i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::base(true).'/element/notifications' ?>">
                        <i class="material-icons text-gray">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="<?= Url::base(true).'/element/upgrade' ?>">
                        <i class="material-icons">unarchive</i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>