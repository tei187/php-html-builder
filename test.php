<?php

require "loader.php";

use tei187\HTMLBuilder\HTML;
    use tei187\HTMLBuilder\Head;
    use tei187\HTMLBuilder\Bootstrap;
    use tei187\HTMLBuilder\Bootstrap\Nav;

    echo
        HTML::Doctype() .
        HTML::Html([], 
            HTML::Head(
                Head::Charset() .
                Head::Viewport() . 
                Head::Title("Bootstrap Example") .
                Head::StyleSheet(
                    "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", 
                    null,
                    [ 
                        'integrity' => "sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65", 
                        'crossorigin' => "anonymous",
                    ]
                )
            ) . 
            HTML::Body([], 
                Nav::Nav(['class' => "navbar-expand-lg bg-light"], 
                    Bootstrap::ContainerFluid([],
                        Nav::Navbar([], 
                            Nav::Item([], Nav::Link([], "Item 1", "#", true) ) .
                            Nav::Item([], Nav::Link([], "Item 2", "#", false) ) .
                            Nav::ItemDropdown([], 
                                Nav::DropdownToggle([], "Toggle dropdown") . 
                                Nav::DropdownMenu([], 
                                    Nav::DropdownItemLink([], "Item 2.1", "#item21") .
                                    Nav::DropdownItemCustom("span", [], "Item 2.2")
                                )
                            )
                        )
                     )
                ) .
                Bootstrap::Container([], 
                    HTML::Heading(1, [], "Heading") . 
                    Bootstrap::Row([], 
                        Bootstrap::Col(['class' => 'col-12 col-md-6'],
                            HTML::Image(['alt' => 'Image alternative text'], "/assets/img/image.jpg") . 
                            HTML::Paragraph([], "Paragraph")
                        )
                    )
                ) . 
                HTML::Script(
                    [
                        'src' => "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",
                        'integrity' => "sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4",
                        'crossorigin' => "anonymous",
                    ]
                )
            )
        );