<?php
header('Content-Type: application/javascript');
$data = "";
$cont = "";
$q = "";
$type = "";

if(isset($_GET['find'])) {
    $q = "&q=".$_GET['find'];
}


if (isset($_GET['container'])) {
     switch($_GET['data']) {
        case 'girlcelly':
        $cont = "agirlcelly";
        break;
        case 'hgame':
        $cont = "ahgame";
        break;
        case 'moonkaini':
        $cont = "amoonkaini";
        break;
        case 'hikarinoakari':
        $cont = "ahikarinoakari";
        break;
}
}
if(isset($_GET['data'])) {
    switch($_GET['data']) {
        default:
        die();
        break;
        case 'girlcelly':
        $data = "girlcelly";
        break;
        case 'hgame':
        $data = "hgame";
        break;
        case 'nhentai':
        $data = "nhentai";
        break;
        case 'hikarinoakari':
        $data = "hikarinoakari";
        switch($_GET['type']) {
            case 'album':
            $type = "&type=album";
            break;
            case 'single':
            $type = "&type=single";
            break;
        }
        break;
        case 'moonkaini':
        $data = "moonkaini" ?>

<?php if(isset($_GET['mobile'])) { ?>
$('div#containerdata<?php echo $cont; ?>').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

    // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style="background: #f9f9f9; min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;"><div id="circleG"><div id="circleG_1" class="circleG"></div><div id="circleG_2" class="circleG"></div><div id="circleG_3" class="circleG"></div></div></div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: 'a',

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: null,

    /*----------------------
     * Pagination
     *---------------------*/

    pagination: {

        // Turn pagination on or off
        active: true,

        // The # of pages to load on init
        pages: 1,

        // The # of results to load per page
        count: 12,

        // Append results to container without replacing current set
        appendResults: false,

        /*
        Load Events
        */

        // Activate lazy load, overrides other load events
        lazyLoad: true,

        // jQuery selector for next result set button
        nextBtn: 'a.next',

        // jQuery selector for previous result set button
        prevBtn: 'a.previous',

        // Set a custom load event (click, blur, focus, hover, etc.)
        loadOnEvent: null,

        // jQuery selector for the custom event target
        loadOnTarget: null
    },

    /*----------------------
     * API
     *---------------------*/

    api: {

        // The API endpoint, local or re
        uri: '/api/get/?source=moonkaini<?php echo $q; ?>',

        // GET or POST request
        httpMethod: 'GET',

        // Force JSONP on local requests
        forceJSONP: false,

        // Send pagination vars to API in AJAX request
        pagination: false,

        // Set key of current page # param sent in API request
        pagesKey: 'page',

        // Set key of limit param sent in API request
        limitKey: 'limit',

        // Set key of offset param sent in API request
        offsetKey: 'offset',

        // Additional params to send with each request
        params: {}
    },

    /*----------------------
     * Debug
     *---------------------*/

    // Turn debug mode on or off
    debug: false,

    /*----------------------
     * Callbacks
     *---------------------*/

    // Fires after load event
    afterLoad: function (res) {}
});

<?php } else { ?>    
$('div#containerdata<?php echo $cont; ?>').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

    // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style=" min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;"><?php if(!$cont) { echo '<div class="loader"></div>'; } ?></div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: null,

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: null,

    /*----------------------
     * Pagination
     *---------------------*/

    pagination: {

        // Turn pagination on or off
        active: <?php if(!$cont) { echo "true"; } else { echo "false"; } ?>,
        // The # of pages to load on init
        pages: 1,

        // The # of results to load per page
        count: 12,

        // Append results to container without replacing current set
        appendResults: false,

        /*
        Load Events
        */

        // Activate lazy load, overrides other load events
        lazyLoad: <?php if(!$cont) { echo "true"; } else { echo "false"; } ?>,

        // jQuery selector for next result set button
        nextBtn: 'a.next',

        // jQuery selector for previous result set button
        prevBtn: 'a.previous',

        // Set a custom load event (click, blur, focus, hover, etc.)
        loadOnEvent: null,

        // jQuery selector for the custom event target
        loadOnTarget: null
    },

    /*----------------------
     * API
     *---------------------*/

    api: {

        // The API endpoint, local or re
        uri: '/api/get/?source=moonkaini<?php echo $q; ?>',

        // GET or POST request
        httpMethod: 'GET',

        // Force JSONP on local requests
        forceJSONP: false,

        // Send pagination vars to API in AJAX request
        pagination: false,

        // Set key of current page # param sent in API request
        pagesKey: 'page',

        // Set key of limit param sent in API request
        limitKey: 'limit',

        // Set key of offset param sent in API request
        offsetKey: 'offset',

        // Additional params to send with each request
        params: {}
    },

    /*----------------------
     * Debug
     *---------------------*/

    // Turn debug mode on or off
    debug: false,

    /*----------------------
     * Callbacks
     *---------------------*/

    // Fires after load event
    afterLoad: function (res) {}
});

        <?php }
        die();
        break;
    }
}
else{
    die();
}
?>

<?php if(isset($_GET['mobile'])) { ?>
$('div#containerdata<?php echo $cont; ?>').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

    // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style="background: #f9f9f9; min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;"><div id="circleG"><div id="circleG_1" class="circleG"></div><div id="circleG_2" class="circleG"></div><div id="circleG_3" class="circleG"></div></div></div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: '/assets/images/loadmobi.gif',

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: null,

    /*----------------------
     * Pagination
     *---------------------*/

    pagination: {

        // Turn pagination on or off
        active: true,

        // The # of pages to load on init
        pages: 1,

        // The # of results to load per page
        count: 12,

        // Append results to container without replacing current set
        appendResults: false,

        /*
        Load Events
        */

        // Activate lazy load, overrides other load events
        lazyLoad: true,

        // jQuery selector for next result set button
        nextBtn: 'a.next',

        // jQuery selector for previous result set button
        prevBtn: 'a.previous',

        // Set a custom load event (click, blur, focus, hover, etc.)
        loadOnEvent: null,

        // jQuery selector for the custom event target
        loadOnTarget: null
    },

    /*----------------------
     * API
     *---------------------*/

    api: {

        // The API endpoint, local or re
        uri: '/api/get/?source=<?php echo $data;?><?php echo $q; ?><?php echo $type; ?>',

        // GET or POST request
        httpMethod: 'GET',

        // Force JSONP on local requests
        forceJSONP: false,

        // Send pagination vars to API in AJAX request
        pagination: true,

        // Set key of current page # param sent in API request
        pagesKey: 'page',

        // Set key of limit param sent in API request
        limitKey: 'limit',

        // Set key of offset param sent in API request
        offsetKey: 'offset',

        // Additional params to send with each request
        params: {}
    },

    /*----------------------
     * Debug
     *---------------------*/

    // Turn debug mode on or off
    debug: false,

    /*----------------------
     * Callbacks
     *---------------------*/

    // Fires after load event
    afterLoad: function (res) {}
});

<?php } else { ?>

$('div#containerdata<?php echo $cont; ?>').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

     // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style=" min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;"><?php if(!$cont) { echo '<div class="loader"></div>'; } ?></div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: null,

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: null,

    /*----------------------
     * Pagination
     *---------------------*/

    pagination: {

        // Turn pagination on or off
        active: <?php if(!$cont) { echo "true"; } else { echo "false"; } ?>,

        // The # of pages to load on init
        pages: 1,

        // The # of results to load per page
        count: 25,

        // Append results to container without replacing current set
        appendResults: false,

        /*
        Load Events
        */

        // Activate lazy load, overrides other load events
        lazyLoad: <?php if(!$cont) { echo "true"; } else { echo "false"; } ?>,

        // jQuery selector for next result set button
        nextBtn: 'a.next',

        // jQuery selector for previous result set button
        prevBtn: 'a.previous',

        // Set a custom load event (click, blur, focus, hover, etc.)
        loadOnEvent: null,

        // jQuery selector for the custom event target
        loadOnTarget: null
    },

    /*----------------------
     * API
     *---------------------*/

    api: {

        // The API endpoint, local or re
        uri: '/api/get/?source=<?php echo $data;?><?php echo $q; ?><?php echo $type; ?><?php if(isset($_GET['id'])) { echo '&id='.$_GET['id'];} ?>',

        // GET or POST request
        httpMethod: 'GET',

        // Force JSONP on local requests
        forceJSONP: false,

        // Send pagination vars to API in AJAX request
        pagination: true,

        // Set key of current page # param sent in API request
        pagesKey: 'page',

        // Set key of limit param sent in API request
        limitKey: 'limit',

        // Set key of offset param sent in API request
        offsetKey: 'offset',

        // Additional params to send with each request
        params: {}
    },

    /*----------------------
     * Debug
     *---------------------*/

    // Turn debug mode on or off
    debug: true,

    /*----------------------
     * Callbacks
     *---------------------*/

    // Fires after load event
    afterLoad: function (res) {}
});
<?php } ?>    