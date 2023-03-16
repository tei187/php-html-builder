<?php

    require_once __DIR__ . "/vendor/autoload.php";

// CONSTANTS - dictionary and helpers
    require_once __DIR__ . "/src/Constants/Charset.php";
    require_once __DIR__ . "/src/Constants/Doctype.php";
    require_once __DIR__ . "/src/Constants/Vocabulary.php";

// TRAITS
    require_once __DIR__ . "/src/Traits/ListableAttributes.php";
    require_once __DIR__ . "/src/Traits/ClosingTags.php";
    require_once __DIR__ . "/src/Traits/HasAttributes.php";
    require_once __DIR__ . "/src/Traits/HasClasses.php";
    require_once __DIR__ . "/src/Traits/Bootstrap/BootstrapTags.php";
    require_once __DIR__ . "/src/Traits/Bootstrap/LineBreak.php";
    require_once __DIR__ . "/src/Traits/Bootstrap/BreakpointsForming.php";

// GENERATORS
    // general HTML
        require_once __DIR__ . "/src/HTML.php";
        require_once __DIR__ . "/src/Head.php";
        require_once __DIR__ . "/src/Form.php";
        require_once __DIR__ . "/src/Table.php";

    // Bootstrap
        require_once __DIR__ . "/src/Bootstrap.php";
        require_once __DIR__ . "/src/Bootstrap/Nav.php";
        require_once __DIR__ . "/src/Bootstrap/Col.php";
        require_once __DIR__ . "/src/Bootstrap/Dropdown/Dropdown.php";
        require_once __DIR__ . "/src/Bootstrap/Dropdown/Button.php";
        require_once __DIR__ . "/src/Bootstrap/Dropdown/Menu/CustomDropdownMenu.php";
        require_once __DIR__ . "/src/Bootstrap/Dropdown/Menu/ListDropdownMenu.php";

    // OpenGraph
        require_once __DIR__ . "/src/OpenGraph.php";
        require_once __DIR__ . "/src/OpenGraph/Namespaces.php";
        require_once __DIR__ . "/src/OpenGraph/Prefixes.php";
        require_once __DIR__ . "/src/OpenGraph/Album.php";
        require_once __DIR__ . "/src/OpenGraph/Article.php";
        require_once __DIR__ . "/src/OpenGraph/Audio.php";
        require_once __DIR__ . "/src/OpenGraph/Book.php";
        require_once __DIR__ . "/src/OpenGraph/Image.php";
        require_once __DIR__ . "/src/OpenGraph/Profile.php";
        require_once __DIR__ . "/src/OpenGraph/Song.php";
        require_once __DIR__ . "/src/OpenGraph/Video.php";
        require_once __DIR__ . "/src/OpenGraph/Twitter.php";
        require_once __DIR__ . "/src/OpenGraph/Twitter/App.php";
        require_once __DIR__ . "/src/OpenGraph/Twitter/Player.php";
