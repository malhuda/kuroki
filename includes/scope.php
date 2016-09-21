<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
require '../config.php';
require 'functions.php';  
require_once 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication(FB_APPID,FB_APPSECRET);
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper(BASE_URL .'/connect' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me?fields=email,name' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;


  checkuser($fbid,$fbfullname,$femail); // To update local DB 
    /* ---- header location after session ----*/



  $query = mysqli_query($connection, "select * from users where fuid='".$fbid."'");
  $table = null;
  while ($row = mysqli_fetch_array($query)) {
    $table = $row;       
    }
  if($table[4] == 0) {

    session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
    header("Location: /?error=100");  
    die();

  }
  
  if ( $detect->isMobile() ) {
  header('location: /mobile/index.php?dashboard=index');
  } else {
  header("Location: /dashboard"); }
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}

?>
