<?php

namespace Sessions;

class Session
{
    public function setName($name): void
    {
        session_name($name);
    }

    public function getName(): string
    {
        return session_name();
    }

    public function setId($id): void
    {
        session_id($id);
    }

    public function getId(): string
    {
        return session_id();
    }

    public function cookieExists(): bool
    {
        return !empty($_COOKIE);
    }

    public function sessionExists(): bool
    {
        return !empty($_SESSION);
    }

    public function start(): bool
    {
        return session_start();
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function setSavePath($savePath): void
    {
        session_save_path($savePath);
    }

    public function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function contains($key): bool
    {
        return $_SESSION[$key] ? true : false;
    }

    public function delete($key): void
    {
        unset($_SESSION[$key]);
    }
}
