<?php

    require_once __DIR__ . "/vendor/autoload.php";

// CONSTANTS - dictionary and helpers
    require_once __DIR__ . "/src/Constants/Charset.php";
    require_once __DIR__ . "/src/Constants/Doctype.php";
    require_once __DIR__ . "/src/Constants/Vocabulary.php";

// TRAITS
    require_once __DIR__ . "/src/Traits/ListableAttributes.php";
    require_once __DIR__ . "/src/Traits/ClosingTags.php";
    require_once __DIR__ . "/src/Traits/BootstrapTags.php";
    require_once __DIR__ . "/src/Traits/Bootstrap/LineBreak.php";

// GENERATORS
    // general HTML
        require_once __DIR__ . "/src/HTML.php";
        require_once __DIR__ . "/src/Head.php";
        require_once __DIR__ . "/src/Form.php";
        require_once __DIR__ . "/src/Table.php";

    // Bootstrap
        require_once __DIR__ . "/src/Bootstrap.php";
        require_once __DIR__ . "/src/Boostrap/Nav.php";
        require_once __DIR__ . "/src/Boostrap/Col.php";

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
