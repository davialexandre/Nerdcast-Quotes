<?php
    include('lib/facebook.php');
    $config = include('app_config.php');
    
    if(isset($_GET['code'])) {
        header('Location: http://apps.facebook.com/nerdcast_quotes');
    }

    $facebook = new Facebook(array(
      'appId' => $config['appId'],
      'secret' => $config['secret'],
      'cookie' => false,
      'domain' => 'localhost',
    ));

    $user = $facebook->getUser();

    if(!$user) {
        $url = $facebook->getLoginUrl(array('scope'=>'publish_stream', 'canvas' => 1, 'fbconnect'=>0));
        echo "<script type='text/javascript'>top.location.href = '$url';</script>";
        die();
    }
?>
