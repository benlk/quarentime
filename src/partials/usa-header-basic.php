<?php
/**
 * USWDS basic header
 *
 * @link https://components.designsystem.digital.gov/components/detail/header--basic.html
 */
?>
<div class="usa-overlay"></div>
<header class="usa-header usa-header--basic">
    <div class="usa-nav-container">
        <div class="usa-navbar">
            <div class="usa-logo" id="basic-logo">
                <em class="usa-logo__text"><a href="/" title="Home" aria-label="Home">Quarentime</a></em>
            </div>
            <button class="usa-menu-btn">Menu</button>
        </div>
        <nav aria-label="Primary navigation" class="usa-nav">
            <button class="usa-nav__close"><img src="assets/img/close.svg" role="img" alt="close"></button>
            <ul class="usa-nav__primary usa-accordion">
                <li class="usa-nav__primary-item">
                    <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="basic-nav-section-two"><span>About</span></button>
                    <ul id="basic-nav-section-two" class="usa-nav__submenu">
                        <li class="usa-nav__submenu-item">
                            <a href="#what" class="">What</a>
                        </li>
                        <li class="usa-nav__submenu-item">
                            <a href="#why" class="">Why</a>
                        </li>
                        <li class="usa-nav__submenu-item">
                            <a href="#who" class="">Who</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


