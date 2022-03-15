<?php
//session start
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location: ../dashboard");