<?php
use App\output;


$users = App\output::where('bid', 2)->get();

$toHTML = $users[0]['list'];



echo $toHTML;


