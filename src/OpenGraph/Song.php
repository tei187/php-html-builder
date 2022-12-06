<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:music** specific tags, for **Song** scope.
 */
class Song {
    /**
     * og:music:duration
     *
     * The play time of the song in seconds.
     *
     * @param integer|null $duration
     * @return string
     */
    public static function MusicSongDuration(?int $duration = 1) : string {
        if($duration == null || $duration < 1) $duration = 1;

        return Head::MetaProperty('og:music:duration', $duration);
    }
    /**
     * og:music:album
     *
     * The album which contains this song. This is the URL of a page
     * with og:type music.album. Multiple music:album tags can be specified.
     *
     * @param string|null $album
     * @return string
     */
    public static function MusicSongAlbum(?string $album = null) : string {
        return Head::MetaProperty('og:music:album', $album);
    }
    /**
     * og:music:album:disc
     *
     * The disc number this song is on within this album (defaults to `1`).
     *
     * @param integer|null $disc
     * @return string
     */
    public static function MusicSongDisc(?int $disc = 1) : string {
        if($disc == null || $disc < 1) $disc = 1;

        return Head::MetaProperty('og:music:album:disc', $disc);
    }
    /**
     * og:music:album:track
     *
     * The track number of this song on this album.
     *
     * @param integer|null $track
     * @return string
     */
    public static function MusicSongTrack(?int $track = 1) : string {
        if($track == null || $track < 1) $track = 1;

        return Head::MetaProperty('og:music:album:track', $track);
    }
    /**
     * og:music:musician
     *
     * The artist of this song. This is a URL of a page with
     * og:type profile. Multiple music:musician tags can be specified.
     *
     * @param string|null $musician
     * @return string
     */
    public static function MusicSongMusician(?string $musician = null) : string {
        return Head::MetaProperty('og:music:musician', $musician);
    }
}
