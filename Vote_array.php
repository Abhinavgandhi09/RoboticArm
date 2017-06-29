  <?php

//get servo
$votes = array(
  glob("./data/1/*", GLOB_NOSORT),
  glob("./data/2/*", GLOB_NOSORT),
  glob("./data/3/*", GLOB_NOSORT),
  glob("./data/4/*", GLOB_NOSORT),
  glob("./data/5/*", GLOB_NOSORT),
  glob("./data/6/*", GLOB_NOSORT),
  glob("./data/7/*", GLOB_NOSORT),
  glob("./data/8/*", GLOB_NOSORT)
);
array_map('unlink', $votes[0]);
array_map('unlink', $votes[1]);
array_map('unlink', $votes[2]);
array_map('unlink', $votes[3]);
array_map('unlink', $votes[4]);
array_map('unlink', $votes[5]);
array_map('unlink', $votes[6]);
array_map('unlink', $votes[7]);

$votes = array_map('count', $votes);

//process servo
if (array_sum($votes) == 0) {
  $return = "0\n0\n0\n0\n0";
} else {
  $winner = intval(array_search(max($votes), $votes)) + 1;
  //switch depending on vote to determine servo and direction
  if ($winner == '1') {
    $return = "1\n0\n0\n0\n0";
  } elseif ($winner == '2') {
    $return = "1\n0\n0\n0\n1";
  } elseif ($winner == '3') {
    $return = "0\n1\n0\n0\n0";
  } elseif ($winner == '4') {
    $return = "0\n1\n0\n0\n1";
  } elseif ($winner == '5') {
    $return = "0\n0\n1\n0\n0";
  } elseif ($winner == '6') {
    $return = "0\n0\n1\n0\n1";
  } elseif ($winner == '7') {
    $return = "0\n0\n0\n1\n0";
  } elseif ($winner == '8') {
    $return = "0\n0\n0\n1\n1";
  }
}

//return results
echo $return;

//return some debug stuff
//echo "\n";
//print_r($servoVotes);
//echo "\n";
//print_r($directionVotes);

?>
