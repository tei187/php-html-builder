<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

class Song {
    static function MusicSongDuration(?int $duration = 1) : string {
        if($duration == null || $duration < 1) $duration = 1;

        return Head::MetaProperty('og:music:duration', $duration);
    }
    static function MusicSongAlbum(?string $title = null) : string {
        return Head::MetaProperty('og:music:album', $title);
    }
    static function MusicSongDisc(?int $disc = 1) : string {
        if($disc == null || $disc < 1) $disc = 1;

        return Head::MetaProperty('og:music:album:disc', $disc);
    }
    static function MusicSongTrack(?int $track = 1) : string {
        if($track == null || $track < 1) $track = 1;

        return Head::MetaProperty('og:music:album:track', $track);
    }
    static function MusicSongMusician(?string $musician = null) : string {
        return Head::MetaProperty('og:music:musician', $musician);
    }
}