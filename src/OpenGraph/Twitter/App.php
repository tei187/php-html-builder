<?php

namespace tei187\HTMLBuilder\OpenGraph\Twitter;

use DateTime;
use tei187\HTMLBuilder\Head;

class App {
/* ID */

    /**
     * twitter:app:id:iphone
     *
     * String value, and should be the numeric representation of your app ID in the App Store (i.e. “307234931”).
     *
     * @param string|null $id
     * @return string
     */
    public static function iPhoneId(?string $id = null) : string {
        return Head::MetaProperty('twitter:app:id:iphone', $id);
    }
    /**
     * twitter:app:id:ipad
     *
     * String value, and should be the numeric representation of your app ID in the App Store (i.e. “307234931”).
     *
     * @param string|null $id
     * @return string
     */
    public static function iPadId(?string $id = null) : string {
        return Head::MetaProperty('twitter:app:id:ipad', $id);
    }
    /**
     * twitter:app:id:googleplay
     *
     * String value, and should be the numeric representation of your app ID in Google Play (.i.e. “com.android.app”).
     *
     * @param string|null $id
     * @return string
     */
    public static function GooglePlayId(?string $id = null) : string {
        return Head::MetaProperty('twitter:app:id:googleplay', $id);
    }

/* URL */

    /**
     * twitter:app:url:iphone
     *
     * Your app’s custom URL scheme (you must include ”://” after your scheme name).
     *
     * @param string|null $url
     * @return string
     */
    public static function iPhoneUrl(?string $url = null) : string {
        return Head::MetaProperty('twitter:app:url:iphone', $url);
    }
    /**
     * twitter:app:url:ipad
     *
     * Your app’s custom URL scheme.
     *
     * @param string|null $url
     * @return string
     */
    public static function iPadUrl(?string $url = null) : string {
        return Head::MetaProperty('twitter:app:url:ipad', $url);
    }
    /**
     * twitter:app:url:googleplay
     *
     * Your app’s custom URL scheme.
     *
     * @param string|null $url
     * @return string
     */
    public static function GooglePlayUrl(?string $url = null) : string {
        return Head::MetaProperty('twitter:app:url:googleplay', $url);
    }

/* NAME */

    /**
     * twitter:app:name:iphone
     *
     * Name of your iPhone app.
     *
     * @param string|null $url
     * @return string
     */
    public static function iPhoneName(?string $name = null) : string {
        return Head::MetaProperty('twitter:app:name:iphone', $name);
    }
    /**
     * twitter:app:name:ipad
     *
     * Name of your iPad optimized app.
     *
     * @param string|null $name
     * @return string
     */
    public static function iPadName(?string $name = null) : string {
        return Head::MetaProperty('twitter:app:name:ipad', $name);
    }
    /**
     * twitter:app:name:googleplay
     *
     * Name of your Android app.
     *
     * @param string|null $name
     * @return string
     */
    public static function GooglePlayName(?string $name = null) : string {
        return Head::MetaProperty('twitter:app:name:googleplay', $name);
    }

/* COMPOUND */

    /**
     * Returns 3 META tags with **twitter:app** prefix for **name:iphone**, **id:iphone** and **url:iphone**.
     *
     * @param string|null $name Name of your iPhone optimized app.
     * @param string|null $id String value, and should be the numeric
     * representation of your app ID in the App Store (i.e. “307234931”).
     * @param string|null $url Your app’s custom URL scheme.
     * @return string
     */
    public static function iPhone(?string $name = null, ?string $id = null, ?string $url = null) : string {
        return
            self::iPhoneName($name) .
            self::iPhoneId($id) .
            self::iPhoneUrl($url);
    }
    /**
     * Returns 3 META tags with **twitter:app** prefix for **name:ipad**, **id:ipad** and **url:ipad**.
     *
     * @param string|null $name Name of your iPad optimized app.
     * @param string|null $id String value, and should be the numeric
     * representation of your app ID in the App Store (i.e. “307234931”).
     * @param string|null $url Your app’s custom URL scheme.
     * @return string
     */
    public static function iPad(?string $name = null, ?string $id = null, ?string $url = null) : string {
        return
            self::iPadName($name) .
            self::iPadId($id) .
            self::iPadUrl($url);
    }
    /**
     * Returns 3 META tags with **twitter:app** prefix for
     * **name:googleplay**, **id:googleplay** and **url:googleplay**.
     *
     * @param string|null $name Name of your Android app.
     * @param string|null $id String value, and should be the numeric
     * representation of your app ID in Google Play (.i.e. “com.android.app”).
     * @param string|null $url Your app’s custom URL scheme.
     * @return string
     */
    public static function GooglePlay(?string $name = null, ?string $id = null, ?string $url = null) : string {
        return
            self::GooglePlayName($name) .
            self::GooglePlayId($id) .
            self::GooglePlayUrl($url);
    }

 /* OTHER */

    /**
     * twitter:app:country
     *
     * If your application is not available in the US App Store, you must
     * set this value to the two-letter country code for the App Store
     * that contains your application.
     *
     * @param string|null $code
     * @return string
     */
    public static function Country(?string $code = null) : string {
        return Head::MetaProperty('twitter:app:country', $code);
    }
}
