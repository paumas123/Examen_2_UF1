<?php

class UserEvent{
    private $username;
    private $pass;
    private $eventRegistred;

    /**
     * @param $username
     * @param $pass
     * @param $eventRegistred
     */
    public function __construct($username, $pass, $eventRegistred)
    {
        $this->username = $username;
        $this->pass = $pass;
        $this->eventRegistred = $eventRegistred;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getEventRegistred()
    {
        return $this->eventRegistred;
    }

    /**
     * @param mixed $eventRegistred
     */
    public function setEventRegistred($eventRegistred): void
    {
        $this->eventRegistred = $eventRegistred;
    }



}

?>