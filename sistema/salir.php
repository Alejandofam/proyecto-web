<?php

    session_start();
    session_destroy();
    header("location: ../untitled-1.php"); //una ves destruidas las sesiones existentes ponemos este header a que se regrese una
