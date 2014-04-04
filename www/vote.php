<?php

require('models/Vote.php');

// get votes by color id
$color_id = $_GET['color_id'];

$vote = new Vote();

echo json_encode(
    array('id'    => $color_id,
          'votes' => $vote->getVotesByColorId($color_id)));
