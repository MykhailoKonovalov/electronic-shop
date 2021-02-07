<?php

namespace Sessions;

class Authentication
{
    /**
     * @var Session
     */
    private Session $session;
    private string $email;
    private string $pass;

    public function __construct()
    {
        $this->session = new Session();
        $this->email = "user@gmail.com";
        $this->pass = "qwerty";
    }

    public function isAuth() : bool
    {
        return $this->session->sessionExists();
    }

    public function auth($email, $pass): bool
    {
        if ($email == $this->email && $pass == $this->pass) {
            $path = "../storage/sessions";
            $this->session->setSavePath($path);
            $this->session->set("email", $email);
            return true;
        } else {
            return false;
        }
    }

    public function getLogin()
    {
        return ($this->isAuth()) ? $this->session->get("email") : false;
    }

    public function logOut() : void
    {
        $this->session->destroy();
    }
}
