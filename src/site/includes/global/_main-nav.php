<nav class="ntg-main-nav" id="mainmenu">
    <div class="ntg-main-nav__wrapper">

        <ul class="ntg-main-nav__links sf-menu">
            <li <?php echo $page == 'Index' ? 'class="active"' : ''; ?>>
                <a href="index.php">Home</a>
            </li>
            <li <?php echo $page == 'Landing' ? 'class="has-children active"' : 'class="has-children"'; ?>>
                <a href="landing.php">Landing</a>
                <ul>
                    <li><a href="standard-with-search.php">Standard with search</a></li>
                    <li><a href="standard-without-search.php">Standard without search</a></li>
                    <li><a href="library.php">Library</a></li>
                    <li><a href="two-col-layout.php">Two col layout</a></li>
                    <li><a href="search.php">Search</a></li>
                </ul>
            </li>
            <li <?php echo $page == 'Form' ? 'class="active"' : ''; ?>>
                <a href="form.php">Form</a>
            </li>
            <li <?php echo $page == 'News' ? 'class="has-children active"' : 'class="has-children"'; ?>>
                <a href="news.php">News</a>
                <ul>
                    <li><a href="news-item.php">News item</a></li>
                </ul>
            </li>
            <li <?php echo $page == 'Events' ? 'class="has-children active"' : 'class="has-children"'; ?>>
                <a href="events.php">Events</a>
                <ul>
                    <li><a href="event-item.php">Event item</a></li>
                </ul>
            </li>
            <li <?php echo $page == 'Components' ? 'class="active"' : ''; ?>>
                <a href="components.php">Components</a>
            </li>
        </ul>

        <div class="ntg-main-nav__mobile">
            <a href="#mmenu-wrapper" aria-label="Open or close menu">
                <div class="ntg-main-nav__lines">
                    <span aria-hidden="true"></span>
                </div>
                <span class="ntg-main-nav__text">Menu</span>
            </a>
        </div>

    </div>
</nav>