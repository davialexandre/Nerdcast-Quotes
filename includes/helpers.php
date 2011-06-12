<?php

function create_post_dialog_object($episode, $quote) {
    $object = new stdClass();
    $object->title = $episode->title;
    $object->number = $episode->number;
    $object->picture = $episode->picture;
    $object->quote = $quote;
    $object->nerdtrackLink = $episode->getNerdTrackLink();
    $object->nerdcastLink = $episode->getNerdcastLink();
    
    return json_encode($object,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);
}


?>
