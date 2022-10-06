<?php

class Event{

    private $idEvent; //És una var de sessió que s'incrementa en 1 quan creo un event
    private $nameEvent; //Nom d'event
    private $initDate; //DateTime Inici
    private $endDate; //DateTime Fi
    private $accepted; //Booleà que epermet que es publiqui o no
    private $ownerEvent; // UserEvent que ha creat l'event
    private $cover; //Nom de la foto del cartell (sense extensió)

    /**
     * @param $idEvent
     * @param $nameEvent
     * @param $initDate
     * @param $endDate
     * @param $accepted
     * @param $ownerEvent
     * @param $cover
     */
    public function __construct($idEvent, $nameEvent, $initDate, $endDate, $accepted, $ownerEvent, $cover)
    {
        $this->idEvent = $idEvent;
        $this->nameEvent = $nameEvent;
        $this->initDate = $initDate;
        $this->endDate = $endDate;
        $this->accepted = $accepted;
        $this->ownerEvent = $ownerEvent;
        $this->cover = $cover;
    }

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent): void
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return mixed
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * @param mixed $nameEvent
     */
    public function setNameEvent($nameEvent): void
    {
        $this->nameEvent = $nameEvent;
    }

    /**
     * @return mixed
     */
    public function getInitDate()
    {
        return $this->initDate;
    }

    /**
     * @param mixed $initDate
     */
    public function setInitDate($initDate): void
    {
        $this->initDate = $initDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * @param mixed $accepted
     */
    public function setAccepted($accepted): void
    {
        $this->accepted = $accepted;
    }

    /**
     * @return mixed
     */
    public function getOwnerEvent()
    {
        return $this->ownerEvent;
    }

    /**
     * @param mixed $ownerEvent
     */
    public function setOwnerEvent($ownerEvent): void
    {
        $this->ownerEvent = $ownerEvent;
    }

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover): void
    {
        $this->cover = $cover;
    }




}

?>