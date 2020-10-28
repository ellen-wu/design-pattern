<?php

include 'State.php';
include 'FreeState.php';
include 'BookedState.php';
include 'CheckedInState.php';
include 'Context.php';


$c = new Context();

$c->setState(new FreeState());

$c->setState(new BookedState());


