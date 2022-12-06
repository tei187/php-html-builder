<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:music** specific tags, for **Album** scope.
 */
class Album {
    /**
     * og:music:song
     *
     * @param string|null $title
     * @return string
     */
    public static function MusicAlbumSong(?string $title = null) : string {
        return Head::MetaProperty('og:music:song', $title);
    }
    /**
     * og:music:song:disc
     *
     * @param integer|null $disc
     * @return string
     */
    public static function MusicAlbumSongDisc(?int $disc = 1) : string {
        if($disc == null || $disc < 1) $disc = 1;

        return Head::MetaProperty('og:music:song:disc', $disc);
    }
    /**
     * og:music:song:track
     *
     * @param integer|null $track
     * @return string
     */
    public static function MusicAlbumSongTrack(?int $track = 1) : string {
        if($track == null || $track < 1) $track = 1;

        return Head::MetaProperty('og:music:song:track', $track);
    }
    /**
     * og:music:musician
     *
     * @param string|null $musician
     * @return string
     */
    public static function MusicAlbumMusician(?string $musician = null) : string {
        return Head::MetaProperty('og:music:musician', $musician);
    }
    /**
     * og:music:release_date
     *
     * @param DateTime|null $date
     * @return string
     */
    public static function MusicAlbumReleaseDate(?DateTime $date = null) : string {
        return Head::MetaProperty('og:music:release_date', $date);
    }
}
