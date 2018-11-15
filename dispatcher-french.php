<?php
// Get a global counter from server and update counter
$counter_file = "/tmp/dispatch-counter-1";
$counter_val = file_get_contents($counter_file);
file_put_contents($counter_file, $counter_val + 1);

// Possible redirections
$redirects = array("http://spellout.net/ibexexps/redudley/IIFDafranwbs1/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwbs2/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwbs3/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwbs4/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwlb1/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwlb2/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwlb3/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwlb4/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwub1/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwub2/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwub3/experiment.html",
                   "http://spellout.net/ibexexps/redudley/IIFDafranwub4/experiment.html");
// Redirect user to the next link
header("Location: " . $redirects[$counter_val % count($redirects)]);
?>
