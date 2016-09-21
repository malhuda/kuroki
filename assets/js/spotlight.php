<?php
header('Content-Type: application/javascript');
$data = "";
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
        case 'moonkaini': ?>


$('div#containerdata').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

    // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style=" min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;">
        

<ul class="bokeh">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>


    </div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: '',

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;padding:20px;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: "fadeIn",

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
        lazyLoad: false,

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
        uri: '/api/get/?source=moonkaini',

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

        <?php
        die();
        break;
    }
}
else{
    die();
}
?>
$('div#container<?php echo $data; ?>').lazyjson({

    // Fire the first API call on page load
    loadOnInit: true,

    /*----------------------
     * Templating
     *---------------------*/

    // The template element's ID prefix (e.g. "#template-lazyjson" for $('#lazyjson').lazyjson())
    templatePrefix: 'load-',

    // The loader element, will also accept a jQuery object
    loader: '<div id="loading" style=" min-height: 100%;min-height: 10vh;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-align: center;-webkit-align-items: center;-moz-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;-webkit-box-pack: center;-moz-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;"><div class="loader"><span></span><span></span><span></span><span></span></div>',

    // The URL or path to the loader image to assign to the loader object
    loaderImg: '',

    // Element displayed when results don't exist, will also accept a jQuery object
    noResults: '<div id="lj-noresponse" style="text-align:center;padding:20px;"></div>',

    // Text to display in default noResults element
    noResultsText: 'No Results Found',

    /*----------------------
     * Effects
     *---------------------*/

    // The delay between display of animated results
    delay: 50,

    // Set an animation for result display, currently accepts 'slideDown' and 'fadeIn'
    effect: "fadeIn",

    /*----------------------
     * Pagination
     *---------------------*/

    pagination: {

        // Turn pagination on or off
        active: true,

        // The # of pages to load on init
        pages: 1,

        // The # of results to load per page
        count: 4,

        // Append results to container without replacing current set
        appendResults: false,

        /*
        Load Events
        */

        // Activate lazy load, overrides other load events
        lazyLoad: false,

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
        uri: '/api/get/?source=<?php echo $data;?>',

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