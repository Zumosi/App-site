<?php
abstract class Encryption {
    private static $salt = "";
    private static function initialization() {
        $config = require "encryption_config.php";
        self::$salt = '$6$rounds=' . $config["N"] . '$' . $config["salt_custom_part"] . '$'; // SHA-512
    }
    public static function compare($toTest, $hash) {
        return crypt($toTest, $hash) == $hash;
    }
    public static function encrypt($toEncrypt) {
        if (self::$salt === "") {
            self::initialization();
        }
        return crypt($toEncrypt, self::$salt);
    }
}

