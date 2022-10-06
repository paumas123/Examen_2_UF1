<?php
require_once 'Cart.php';

class UserShop
{
    private $email;
    private $pass;
    private $fullName;
    private $birthDate;
    private $cart;
    private $banned;

    /**
     * @param $email
     * @param $pass
     * @param $fullName
     * @param $birthDate
     */
    public function __construct($email, $pass, $fullName, $birthDate)
    {
        $this->email = $email;
        $this->pass = $pass;
        $this->fullName = $fullName;
        $this->birthDate = DateTime::createFromFormat('Y-m-d', $birthDate);
        $this->cart = new Cart();
        $this->banned = false;
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
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return DateTime|false
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime|false $birthDate
     */
    public function setBirthDate(bool $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return Cart
     */
    public function getCart(): Cart
    {
        return $this->cart;
    }

    /**
     * @param Cart $cart
     */
    public function setCart(Cart $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @return false
     */
    public function getBanned(): bool
    {
        return $this->banned;
    }

    /**
     * @param false $banned
     */
    public function setBanned(bool $banned): void
    {
        $this->banned = $banned;
    }

    public function checkMajorEdat()
    {
        if ($this->birthDate->diff(new DateTime())->y >= 18) {
            return true;
        }
        return false;
    }

    public function swapBan()
    {
        $this->banned = !$this->banned;
    }


}

?>