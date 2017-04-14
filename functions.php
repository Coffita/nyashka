<?php
session_start();

function is_auth () {
    if ($_SESSION['is_auth'] == TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }

}
