<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

class Song {
    /**
     * `og:music:duration`
     *
     * @param integer|null $duration
     * @return string
     */
    static function MusicSongDuration(?int $duration = 1) : string {
        if($duration == null || $duration < 1) $duration = 1;

        return Head::MetaProperty('og:music:duration', $duration);
    }
    /**
     * `og:music:album`
     *
     * @param string|null $title
     * @return string
     */
    static function MusicSongAlbum(?string $title = null) : string {
        return Head::MetaProperty('og:music:album', $title);
    }
    /**
     * `og:music:album:disc`
     *
     * @param integer|null $disc
     * @return string
     */
    static function MusicSongDisc(?int $disc = 1) : string {
        if($disc == null || $disc < 1) $disc = 1;

        return Head::MetaProperty('og:music:album:disc', $disc);
    }
    /**
     * `og:music:album:track`
     *
     * @param integer|null $track
     * @return string
     */
    static function MusicSongTrack(?int $track = 1) : string {
        if($track == null || $track < 1) $track = 1;

        return Head::MetaProperty('og:music:album:track', $track);
    }
    /**
     * `og:music:musician`
     *
     * @param string|null $musician
     * @return string
     */
    static function MusicSongMusician(?string $musician = null) : string {
        return Head::MetaProperty('og:music:musician', $musician);
    }
}