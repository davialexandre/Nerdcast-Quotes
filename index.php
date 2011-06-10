<?php
require_once('classes/Episode.php');
require_once('lib/facebook.php');

$facebook = new Facebook(array(
  'appId' => '216412651714670',
  'secret' => '193decc78f2a21d82673d704d1b6c252',
  'cookie' => true,
));

$user = $facebook->getUser();

if(!$user) {
    $url = $facebook->getLoginUrl(array('scope'=>'publish_stream'));
    echo "<script type='text/javascript'>top.location.href = '$url';</script>";
} else {
    var_dump($facebook->api('/me'));
}

$episode = Episode::getEpisode(256);
echo $episode->title;
echo '<br />';
echo $episode->description;
echo '<br />';

echo '<ul>';
foreach($episode->quotes as $quote) {
    echo '<li>',$quote,'</li>';
}
echo '<ul>';