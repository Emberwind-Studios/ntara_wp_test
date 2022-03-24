<?php

/**
 * 
 * Default site header template
 * 
 */

?>

<div class="container-fluid">
    <div class="row site-nav-row">
        <div class="col-4 d-flex align-items-center site-nav-col">
            <img class="logo-image" src="http://localhost:8080/wp-content/uploads/2022/03/test-log-removebg-preview.png" width="250px" height="auto" />
        </div>
        <div class="col-4 d-flex align-items-center">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'primary-menu-container',
                    'fallback_cb'     => false,
                )
            ); ?>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
            <form>
                <label for="Search Bar"></label>
                <input type="search" class="search-input" placeholder="What can we help you find?"></input>
            </form>
        </div>
    </div>
</div>