<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\OpenGraph\Namespaces;

/**
 * Returns as **type: vocabulary_uri**.
 * @uses tei187\HTMLBuilde\OpenGraph\Namespaces
 */
class Prefixes {
    const OG         = "og: " . Namespaces::OG;
    const ARTICLE    = "article:" . Namespaces::ARTICLE;
    const BOOK       = "book: " . Namespaces::BOOK;
    const BOOKS      = "books: " . Namespaces::BOOKS;
    const BUSINESS   = "business: " . Namespaces::BUSINESS;
    const FITNESS    = "fitness: " . Namespaces::FITNESS;
    const GAME       = "game: " . Namespaces::GAME;
    const MUSIC      = "music: " . Namespaces::MUSIC;
    const PLACE      = "place: " . Namespaces::PLACE;
    const PRODUCT    = "product: " . Namespaces::PRODUCT;
    const PROFILE    = "profile: " . Namespaces::PROFILE;
    const RESTAURANT = "restaurant: " . Namespaces::RESTAURANT;
    const VIDEO      = "video: " . Namespaces::VIDEO;

}
