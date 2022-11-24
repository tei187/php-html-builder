<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Album {
    static function MusicAlbumSong(?string $title = null) : string {
        return Head::MetaProperty('og:music:song', $title);
    }
    static function MusicAlbumSongDisc(?int $disc = 1) : string {
        if($disc == null || $disc < 1) $disc = 1;

        return Head::MetaProperty('og:music:song:disc', $disc);
    }
    static function MusicAlbumSongTrack(?int $track = 1) : string {
        if($track == null || $track < 1) $track = 1;

        return Head::MetaProperty('og:music:song:track', $track);
    }
    static function MusicAlbumMusician(?string $musician = null) : string {
        return Head::MetaProperty('og:music:musician', $musician);
    }
    static function MusicAlbumReleaseDate(?DateTime $date = null) : string {
        return Head::MetaProperty('og:music:release_date', $date);
    }
}