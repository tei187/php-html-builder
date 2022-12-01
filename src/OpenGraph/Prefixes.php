<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\OpenGraph\Namespaces;

/**
 * Returns as **type: vocabulary_uri**.
 * @uses tei187\HTMLBuilde\OpenGraph\Namespaces
 */
class Prefixes {
    const og         = "og: " . Namespaces::og;
    const article    = "article:" . Namespaces::article;
    const book       = "book: " . Namespaces::book;
    const books      = "books: " . Namespaces::books;
    const business   = "business: " . Namespaces::business;
    const fitness    = "fitness: " . Namespaces::fitness;
    const game       = "game: " . Namespaces::game;
    const music      = "music: " . Namespaces::music;
    const place      = "place: " . Namespaces::place;
    const product    = "product: " . Namespaces::product;
    const profile    = "profile: " . Namespaces::profile;
    const restaurant = "restaurant: " . Namespaces::restaurant;
    const video      = "video: " . Namespaces::video;

}