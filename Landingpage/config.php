<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('include/tmdb-api.php');
require_once('include/formatting.php');
require_once('include/function.php');
require_once('include/meta.php');

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );
define('VERSION', '1.11' );

    /*
    |--------------------------------------------------------------------------
    | DO NOT MODIFY OPTIONS BELOW. UNTIL YOU KNOW WHAT ARE YOU DOING.
    |--------------------------------------------------------------------------
    */

    $_ocim   = new _Ocim;
    $config  = new stdClass();
    $config->prefix = 'ocim_';

    /*
    |--------------------------------------------------------------------------
    | Meta Seo Header
    |--------------------------------------------------------------------------
    */

    $config->title            = 'MovieandTVStream'; //Logo Title
    $config->meta_title       = 'Watch Movies and TV Series Stream Online'; //Meta Home Title
    $config->meta_description = 'Watch movies and tv series stream full hd online for free';
    $config->meta_keywords    = 'watch movie online,watch movie online, watch full movie,tv series, watch movie free, tv show';

    $config->meta_playing     = 'Now Playing | Watch Movies and TV Series Stream Online'; //Meta playing Title
    $config->meta_toprated    = 'Toprated Movies | Watch Movies and TV Series Stream Online'; //Meta toprated Title
    $config->meta_upcoming    = 'Upcoming Movies | Watch Movies and TV Series Stream Online'; //Meta upcoming Title

    /*
    |--------------------------------------------------------------------------
    | Permalink
    |--------------------------------------------------------------------------
    */

    $config->seo              = 'true'; // true or false
    $config->url_movie        = 'movie'; // true or false
    $config->url_tv           = 'tv'; // true or false

    /*
    |--------------------------------------------------------------------------
    | Other
    |--------------------------------------------------------------------------
    */
    $config->templates        = 'v3'; //template v1,v2 or v3
    $config->email            = '';
    $config->dmca             = ''; //pisahkan dengan baris baru, example --> http://prntscr.com/8ko225

    /*
    |--------------------------------------------------------------------------
    | API TMDB
    |--------------------------------------------------------------------------
    | $config->tmdbapi = array(
    |	    "api 1",
    |	    "api 2",
    |	    ); 
    | Tutorial https://www.youtube.com/watch?v=82FsjMmP9R4
    */

    $config->tmdbapi = array(
            "9e2f68dd8018696901f709b459d1953d",
            "46be6afe87f36117bce126d796eaf9f2",
    ); 

    $apikey      = $config->tmdbapi[mt_rand(0, count($config->tmdbapi) - 1)];
    $language    = 'en';
    $tmdb        = new TMDB($apikey, $language, true);

    if($config->dmca != null){
            if($_ocim->strposa($_ocim->canonical(), preg_split('/\n|\r\n?/',$config->dmca) )) :
                    header("Location: /");
            endif;
    }