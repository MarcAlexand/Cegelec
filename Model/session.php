<?php

class Session {
    /*
     * Id van gebruiker
     * @var int
     */

    private $user_id;
    /*
     * Gebruikersnaam
     * @var string
     */
    private $gebruiker_user;
    /*
     * Rechten van gebruiker
     * @var int
     */
    //private $recht_positie;
    /*
     * Sessie
     * @var session
     */
    private $_SESSION;
    private $rechten;

    /*
     * Constructor, maakt een nieuwe session
     */

    public function __construct() {
        session_start();
    }

    /*
     * kijk of de gebruiker al ingelogd is door controleren of sessie bestaat
     */

    public function isLoggedIn() {
        if ($this->_SESSION) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
     * Maak de session aan
     */

    public function create($user) {
        //Set de user_id
        $this->user_id = $user[0]['gebruiker_id'];
        //Set de $gebruiker_user
        $this->gebruiker_user = $user[0]['gebruiker_user'];
        //Set de permission
        $this->techten = unserialize($user[0]['rechten']);
        //zet user_id in session
        $_SESSION['user_id'] = $this->user_id;
        // Zet gebruiker_user in session
        $_SESSION['gebruiker_user'] = $this->gebruiker_user;
        // Zet rechten in session
        $_SESSION['rechten'] = $this->rechten;
        $this->_SESSION = $_SESSION;
        // Return de session
        return $_SESSION;
    }

    /*
     * Log de gebruiker uit, verwijder de session
     */

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['gebruiker_user']);
        unset($_SESSION['recht_positie']);
        unset($this->userid);
        $this->loggedIn = false;
        header("Location:".FILE_V_LOGINSCHERM);
    }

    /*
     * set gebruiker_id
     */

    public function setUserId($value) {
        $this->gebruiker_id = $value;
    }

    /*
     * get gebruiker_id
     */

    public function getUserId() {
        return $this->gebruiker_id;
    }

    /*
     * set gebruiker_user
     */

    public function setGebruikerUser($gebruiker_user) {
        $this->gebruiker_user = $gebruiker_user;
    }

    /*
     * get gebruiker_user
     */

    public function getGebruikerUser() {
        return $this->gebruiker_user;
    }

    /*
     * set permission_rank
     */

    public function setPermission($permission) {
        $this->recht_positie = $permission;
    }

    /*
     * get permission_rank
     */

    public function getPermission() {
        return $this->recht_positie;
    }

}
