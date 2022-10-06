<?php

class Persona
{
    private $nom;
    private $cognom;
    private $snCognom;
    private $email;
    private $password;
    private $genere;
    private $rols;

    /**
     * @param $nom
     * @param $cognom
     * @param $snCognom
     * @param $email
     * @param $password
     * @param $genere
     */
    public function __construct($nom, $cognom, $snCognom, $email, $password, $genere)
    {
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->snCognom = $snCognom;
        $this->email = $email;
        $this->password = $password;
        $this->genere = $genere;
//        $this->dataNaixament = DateTime::createFormFormat("Y-m-d",$dataNaixament);
        $this->rols = ['user'];
        Dates:
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * @param mixed $cognom
     */
    public function setCognom($cognom): void
    {
        $this->cognom = $cognom;
    }

    /**
     * @return mixed
     */
    public function getSnCognom()
    {
        return $this->snCognom;
    }

    /**
     * @param mixed $snCognom
     */
    public function setSnCognom($snCognom): void
    {
        $this->snCognom = $snCognom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * @param mixed $genere
     */
    public function setGenere($genere): void
    {
        $this->genere = $genere;
    }

    /**
     * @return string[]
     */
    public function getRols(): array
    {
        return $this->rols;
    }

    /**
     * @param string[] $rols
     */
    public function setRols(array $rols): void
    {
        $this->rols = $rols;
    }

    public function setAdmin()
    {
        $this->rols[] = 'admin';
    }

    public function checkIsAdmin()
    {
        foreach ($this->rols as $rol) {
            if ($rol === 'admin') {
                return true;
            }
        }
        return false;
    }


}

?>