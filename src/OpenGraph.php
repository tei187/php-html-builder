<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Head;

/**
 * OpenGraph META builder.
 */
class OpenGraph {
    /**
     * Custom OpenGraph property.
     *
     * @param string|null $property Property name (without `'og:'`).
     * @param string|null $content Value.
     * @return string
     */
    static function _Custom(?string $property, ?string $content) : string {
        return Head::MetaProperty("og:{$property}", $content);
    }

    /**
     * og:title
     * 
     * The title of the object as it should appear within the graph, e.g., "The Rock".
     *
     * @param string|null $title
     * @return string
     */
    static function Title(?string $title = null) : string {
        return Head::MetaProperty('og:title', $title);
    }
    /**
     * og:type
     * 
     * The type of your object, e.g., "movie".  Depending on the type you specify, other properties may also be required.
     *
     * @param string|null $type
     * @return string
     */
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:type', $type);
    }
    /**
     * og:url
     * 
     * The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "`http://www.imdb.com/title/tt0117500/`".
     *
     * @param string|null $url
     * @return string
     */
    static function Url(?string $url = null) : string {
        return Head::MetaProperty('og:url', $url);
    }
    /**
     * og:site_name
     * 
     * If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".
     *
     * @param string|null $name
     * @return string
     */
    static function SiteName(?string $name = null) : string {
        return Head::MetaProperty('og:site_name', $name);
    }
    /**
     * og:description
     * 
     * A one to two sentence description of your object.
     *
     * @param string|null $desc
     * @return string
     */
    static function Description(?string $desc = null) : string {
        return Head::MetaProperty('og:description', $desc);
    }
    /**
     * og:determiner
     * 
     * The word to precede the object's title in a sentence (e.g., "the" in "the statue of liberty"). Valid values are "a", "an", "the", "", and "auto".
     *
     * @param string|null $determiner
     * @return string
     */
    static function Determiner(?string $determiner = null) : string {
        return Head::MetaProperty('og:determiner', $determiner);
    }
    /**
     * og:locale
     * 
     * A Unix locale in which this markup is rendered.
     *
     * @param string|null $locale
     * @return string
     */
    static function Locale(?string $locale = null) : string {
        return Head::MetaProperty('og:locale', $locale);
    }
    /**
     * og:locale:alternative
     *
     * @param string|null $locale
     * @return string
     */
    static function LocaleAlternative(?string $locale = null) : string {
        return Head::MetaProperty('og:locale:alternative', $locale);
    }

    /**
     * og:street_address
     *
     * @param string|null $address
     * @return string
     */
    static function StreetAddress(?string $address = null) : string {
        return Head::MetaProperty('og:street_address', $address);
    }
    /**
     * og:locality
     *
     * @param string|null $city
     * @return string
     */
    static function Locality(?string $city = null) : string {
        return Head::MetaProperty('og:locality', $city);
    }
    /**
     * og:region
     *
     * @param string|null $content
     * @return string
     */
    static function Region(?string $content = null) : string {
        return Head::MetaProperty('og:region', $content);
    }
    /**
     * og:postal_code
     *
     * @param string|null $content
     * @return string
     */
    static function PostalCode(?string $content = null) : string {
        return Head::MetaProperty('og:postal_code', $content);
    }
    /**
     * og:country_name
     *
     * @param string|null $content
     * @return string
     */
    static function CountryName(?string $content = null) : string {
        return Head::MetaProperty('og:country_name', $content);
    }
    /**
     * og:email
     *
     * @param string|null $content
     * @return string
     */
    static function Email(?string $content = null) : string {
        return Head::MetaProperty('og:email', $content);
    }
    /**
     * og:phone_number
     *
     * @param string|null $content
     * @return string
     */
    static function PhoneNumber(?string $content = null) : string {
        return Head::MetaProperty('og:phone_number', $content);
    }
    /**
     * og:fax_number
     *
     * @param string|null $content
     * @return string
     */
    static function FaxNumber(?string $content = null) : string {
        return Head::MetaProperty('og:fax_number', $content);
    }

    /**
     * og:latitude
     *
     * @param float|string|integer|null $latitude
     * @return void
     */
    static function Latitude($latitude = null) : string {
        return Head::MetaProperty('og:latitude', $latitude);
    }
    /**
     * og:longitude
     *
     * @param float|string|integer|null $longitude
     * @return void
     */
    static function Longitude($longitude = null) : string {
        return Head::MetaProperty('og:longitude', $longitude);
    }

    /**
     * og:points
     *
     * @param string|null $content
     * @return string
     */
    static function Points(?string $content = null) : string {
        return Head::MetaProperty('og:points', $content);
    }

    /* MUSIC - PLAYLIST / RADIO STATION SCOPE */
    /**
     * og:music:creator
     *
     * @param string|null $creator
     * @return string
     */
    static function PlaylistCreator(?string $creator = null) : string {
        return Head::MetaProperty('og:music:creator', $creator);
    }
    /**
     * og:music:creator
     *
     * @param string|null $creator
     * @return string
     */
    static function RadioStationCreator(?string $creator = null) : string {
        return self::PlaylistCreator($creator);
    }

}  