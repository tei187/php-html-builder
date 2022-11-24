<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Head;

class OpenGraph {
    /**
     * Undocumented function
     *
     * @param string|null $property Property name (without `'og:'`).
     * @param string|null $content Value.
     * @return string
     */
    static function _Custom(?string $property, ?string $content) : string {
        return Head::MetaProperty("og:{$property}", $content);
    }

    static function Title(?string $title = null) : string {
        return Head::MetaProperty('og:title', $title);
    }
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:type', $type);
    }
    static function Url(?string $url = null) : string {
        return Head::MetaProperty('og:url', $url);
    }
    static function SiteName(?string $name = null) : string {
        return Head::MetaProperty('og:site_name', $name);
    }
    static function Description(?string $desc = null) : string {
        return Head::MetaProperty('og:description', $desc);
    }
    static function Determiner(?string $determiner = null) : string {
        return Head::MetaProperty('og:determiner', $determiner);
    }
    static function Locale(?string $locale = null) : string {
        return Head::MetaProperty('og:locale', $locale);
    }
    static function LocaleAlternative(?string $locale = null) : string {
        return Head::MetaProperty('og:locale:alternative', $locale);
    }

    static function StreetAddress(?string $address = null) : string {
        return Head::MetaProperty('og:street_address', $address);
    }
    static function Locality(?string $city = null) : string {
        return Head::MetaProperty('og:locality', $city);
    }
    static function Region(?string $content = null) : string {
        return Head::MetaProperty('og:region', $content);
    }
    static function PostalCode(?string $content = null) : string {
        return Head::MetaProperty('og:postal_code', $content);
    }
    static function CountryName(?string $content = null) : string {
        return Head::MetaProperty('og:country_name', $content);
    }
    static function Email(?string $content = null) : string {
        return Head::MetaProperty('og:email', $content);
    }
    static function PhoneNumber(?string $content = null) : string {
        return Head::MetaProperty('og:phone_number', $content);
    }
    static function FaxNumber(?string $content = null) : string {
        return Head::MetaProperty('og:fax_number', $content);
    }

    /**
     * Undocumented function
     *
     * @param float|string|integer|null $latitude
     * @return void
     */
    static function Latitude($latitude = null) : string {
        return Head::MetaProperty('og:latitude', $latitude);
    }
    /**
     * Undocumented function
     *
     * @param float|string|integer|null $longitude
     * @return void
     */
    static function Longitude($longitude = null) : string {
        return Head::MetaProperty('og:longitude', $longitude);
    }

    static function Points(?string $content = null) : string {
        return Head::MetaProperty('og:points', $content);
    }

    /* MUSIC - PLAYLIST / RADIO STATION SCOPE */
    static function PlaylistCreator(?string $creator = null) : string {
        return Head::MetaProperty('og:music:creator', $creator);
    }
    static function RadioStationCreator(?string $creator = null) : string {
        return self::PlaylistCreator($creator);
    }

}  