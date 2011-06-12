<?php

function create_post_dialog_object($episode, $quote) {
    $object = new stdClass();
    $object->title = $episode->title;
    $object->number = $episode->number;
    $object->picture = $episode->picture;
    $object->quote = $quote;
    $object->nerdtrackLink = $episode->getNerdTrackLink();
    $object->nerdcastLink = $episode->getNerdcastLink();
    
    return json_encode($object);
}


?>
