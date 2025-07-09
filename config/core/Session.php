<?php

namespace App\Core;

class Session
{
    public static function set ( $key, mixed $data): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION[$key] = $data;
    }

    public static function get (string $key): mixed
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return $_SESSION[$key] ?? null;
    }

    public static function unset (string $key): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION[$key]);
    }
    public static function isset (string $key): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION[$key]);
    }
    public static function destroy (string $key): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION[$key]);
        if (empty($_SESSION)) {
            session_destroy();
        }
        
    }
    public static function getInstance(): Session
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new self();
        }
        return $instance;
    }
}

