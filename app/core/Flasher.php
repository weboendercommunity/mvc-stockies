<?php

class Flasher{

    public static function setFlash($message, $do, $type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'do'      => $do,
            'type'    => $type
        ];
    }
    public static function flash(){
        if (isset ($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert"> Data
                    <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['do'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
            unset($_SESSION['flash']);
        }
    }
}