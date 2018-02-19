<?php

session_start();
echo "You are logged in as ".$_SESSION['name'];