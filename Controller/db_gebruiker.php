<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.db_gebruiker.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 06.04.2015, 18:44:22 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000089A-includes begin
require_once FILE_DB;
// section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000089A-includes end

/* user defined constants */
// section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000089A-constants begin
// section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000089A-constants end

/**
 * Short description of class db_gebruiker
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbGebruiker extends database {
    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---

    /**
     * Short description of attribute gebruiker_id
     *
     * @access private
     * @var Integer
     */
    private $gebruiker_id = null;

    /**
     * Short description of attribute gebruiker_user
     *
     * @access private
     * @var String
     */
    private $gebruiker_user = null;

    /**
     * Short description of attribute gebruiker_wachtwoord
     *
     * @access private
     * @var String
     */
    private $gebruiker_wachtwoord = null;

    /**
     * Short description of attribute gebruiker_voornaam
     *
     * @access private
     * @var String
     */
    private $gebruiker_voornaam = null;

    /**
     * Short description of attribute gebruiker_tussenvoegsel
     *
     * @access public
     * @var String
     */
    public $gebruiker_tussenvoegsel = null;

    /**
     * Short description of attribute gebruiker_achternaam
     *
     * @access private
     * @var String
     */
    private $gebruiker_achternaam = null;

    /**
     * Short description of attribute gebruiker_email
     *
     * @access private
     * @var String
     */
    private $gebruiker_email = null;

    /**
     * Short description of attribute gebruiker_geboorteDatum
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_geboorteDatum = null;

    /**
     * Short description of attribute gebruiker_adres
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_adres = null;

    /**
     * Short description of attribute gebruiker_woonplaats
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_woonplaats = null;

    /**
     * Short description of attribute gebruiker_telefoonPrive
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_telefoonPrive = null;

    /**
     * Short description of attribute gebruiker_telefoonWerk
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_telefoonWerk = null;

    /**
     * Short description of attribute gebruiker_inDienst
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_inDienst = null;

    /**
     * Short description of attribute gebruiker_functie
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_functie = null;

    /**
     * Short description of attribute gebruiker_actief
     *
     * @access protected
     * @var Boolean
     */
    protected $gebruiker_actief = null;

    /**
     * Short description of attribute gebruiker_bijzonder
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_bijzonder = null;

    /**
     * Short description of attribute rechten
     *
     * @access public
     * @var String
     */
    public $rechten = null;

    /**
     * Short description of attribute sessie_id
     *
     * @access public
     * @var Integer
     */
    public $sessie_id = '';

    /**
     * Short description of attribute gebruiker_coachId
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_coachId = null;

    /**
     * Short description of attribute gebruiker_projectleiderId
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_projectleiderId = null;

    /**
     * Short description of attribute gebruiker_docentId
     *
     * @access public
     * @var Integer
     */
    public $gebruiker_docentId = null;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function __construct() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008B9 begin
        parent::__construct();
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008B9 end
    }

    /**
     * Short description of method setGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerId($gebruiker) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000090C begin
        $this->gebruiker_id = $gebruiker;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000090C end
    }

    /**
     * Short description of method setGebruikerUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerUser($gebruiker) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000090E begin
        $this->gebruiker_user = $gebruiker;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000090E end
    }

    /**
     * Short description of method setGebruikerWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerWachtwoord($gebruiker) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AED begin
        $this->gebruiker_wachtwoord = $gebruiker;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AED end
    }

    /**
     * Short description of method setGebruikerVoornaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerVoornaam($gebruiker) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AE7 begin
        $this->gebruiker_voornaam = $gebruiker;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AE7 end
    }

    /**
     * Short description of method setGebruikerTussenvoegsel
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerTussenvoegsel($gebruiker) {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:0000000000000B9D begin
        $this->gebruiker_tussenvoegsel = $gebruiker;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:0000000000000B9D end
    }

    /**
     * Short description of method setGebruikerAchternaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerAchternaam($gebruiker) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AE9 begin
        $this->gebruiker_achternaam = $gebruiker;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AE9 end
    }

    /**
     * Short description of method setGebruikerEmail
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerEmail($gebruiker) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AEB begin
        $this->gebruiker_email = $gebruiker;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AEB end
    }

    /**
     * Short description of method setGebruikerGeboortDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerGeboortDatum($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC4 begin
        $this->gebruiker_geboortedatum = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC4 end
    }

    /**
     * Short description of method setGebruikerAdres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerAdres($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC6 begin
        $this->gebruiker_adres = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC6 end
    }

    /**
     * Short description of method setGebruikerWoonplaats
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerWoonplaats($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC2 begin
        $this->gebruiker_woonplaats = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC2 end
    }

    /**
     * Short description of method setGebruikerTelefoonPrive
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerTelefoonPrive($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC8 begin
        $this->gebruiker_telefoonPrive = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DC8 end
    }

    /**
     * Short description of method setGebruikerTelefoonWerk
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerTelefoonWerk($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCA begin
        $this->gebruiker_telefoonWerk = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCA end
    }

    /**
     * Short description of method setGebruikerInDienst
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerInDienst($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCD begin
        $this->gebruiker_inDienst = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCD end
    }

    /**
     * Short description of method setGebruikerFunctie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerFunctie($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCF begin
        $this->gebruiker_functie = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DCF end
    }

    /**
     * Short description of method setGebruikerActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerActief($gebruiker) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AFD begin
        $this->gebruiker_actief = $gebruiker;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AFD end
    }

    /**
     * Short description of method setGebruikerBijzonder
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerBijzonder($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD1 begin
        $this->gebruiker_bijzonder = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD1 end
    }

    /**
     * Short description of method setRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechten
     * @return mixed
     */
    public function setRechten($rechten) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF5 begin
        $this->rechten = $rechten;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF5 end
    }

    /**
     * Short description of method setRechtGroepId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechtgroep_id
     * @return mixed
     */
    public function setRechtGroepId($rechtgroep_id) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AEF begin
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AEF end
    }

    /**
     * Short description of method setSessie_Id
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  sessie_id
     * @return mixed
     */
    public function setSessie_Id($sessie_id) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF1 begin
        $this->sessie_id = $sessie_id;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF1 end
    }

    /**
     * Short description of method setGebruikerCoachId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerCoachId($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD3 begin
        $this->gebruiker_coachId = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD3 end
    }

    /**
     * Short description of method setGebruikerProjectleiderId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerProjectleiderId($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD5 begin
        $this->gebruiker_projectleiderId = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD5 end
    }

    /**
     * Short description of method setGebruikerDocentId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerDocentId($gebruiker) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD7 begin
        $this->gebruiker_docentId = $gebruiker;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD7 end
    }

    /**
     * Short description of method getGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerId() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C1 begin
        return $this->gebruiker_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C1 end
    }

    /**
     * Short description of method getGebruikerUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerUser() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C3 begin
        return $this->gebruiker_user;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C3 end
    }

    /**
     * Short description of method getGebruikerWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerWachtwoord() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CB begin
        return $this->gebruiker_wachtwoord;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CB end
    }

    /**
     * Short description of method getGebruikerVoornaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerVoornaam() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C5 begin
        return $this->gebruiker_voornaam;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C5 end
    }

    /**
     * Short description of method getGebruikerTussenvoegsel
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTussenvoegsel() {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:0000000000000B9B begin
        return $this->gebruiker_tussenvoegsel;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:0000000000000B9B end
    }

    /**
     * Short description of method getGebruikerAchternaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerAchternaam() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C7 begin
        return $this->gebruiker_achternaam;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C7 end
    }

    /**
     * Short description of method getGebruikerEmail
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerEmail() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C9 begin
        return $this->gebruiker_email;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008C9 end
    }

    /**
     * Short description of method getGebruikerGeboorteDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerGeboorteDatum() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD9 begin
        return $this->gebruiker_geboorteDatum;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DD9 end
    }

    /**
     * Short description of method getGebruikerAdres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerAdres() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDB begin
        return $this->gebruiker_adres;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDB end
    }

    /**
     * Short description of method getGebruikerWoonplaats
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerWoonplaats() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDD begin
        return $this->gebruiker_woonplaats;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDD end
    }

    /**
     * Short description of method getGebruikerTelefoonPrive
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTelefoonPrive() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDF begin
        return $this->gebruiker_telefoonPrive;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DDF end
    }

    /**
     * Short description of method getGebruikerTelefoonWerk
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTelefoonWerk() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE1 begin
        return $this->gebruiker_telefoonWerk;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE1 end
    }

    /**
     * Short description of method getGebruikerInDienst
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerInDienst() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE3 begin
        return $this->gebruiker_inDienst;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE3 end
    }

    /**
     * Short description of method getGebruikerFunctie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerFunctie() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE5 begin
        return $this->gebruiker_functie;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE5 end
    }

    /**
     * Short description of method getGebruikerActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerActief() {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AFB begin
        return $this->gebruiker_actief;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AFB end
    }

    /**
     * Short description of method getGebruikerBijzonder
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerBijzonder() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE7 begin
        return $this->gebruiker_bijzonder;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE7 end
    }

    /**
     * Short description of method getRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getRechten() {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF3 begin
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF3 end
    }

    /**
     * Short description of method getSessie_Id
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getSessie_Id() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D5 begin
        return $this->sessie_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D5 end
    }

    /**
     * Short description of method getRechtGroepId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getRechtGroepId() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D3 begin
        return $this->recht_groep_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D3 end
    }

    /**
     * Short description of method getGebruikerCoachId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerCoachId() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE9 begin
        return $this->gebruiker_coachId;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DE9 end
    }

    /**
     * Short description of method getGebruikerProjectleiderId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerProjectleiderId() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEB begin
        return $this->gebruiker_projectleiderId;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEB end
    }

    /**
     * Short description of method getGebruikerDocentId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerDocentId() {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DED begin
        return $this->gebruiker_docentId;
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DED end
    }

    /**
     * Short description of method getGebruikerById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_id
     * @return mixed
     */
    public function getGebruikerByIdDb($id) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CD begin
        $query = "SELECT * FROM `gebruiker` WHERE 
            `gebruiker_id` =  '". $id."'";
        
 
        
        // haalt de array op aan de hand van database's fetchDbArray function.
        // als het null is,    
        if (!$this->dbquery($query)) {
            return false;
        }
        
       if (!($result = $this->dbFetchAll())) {
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
        
        foreach ($result as $idx => $row){
            $gebruiker =  new Gebruiker();
            $gebruiker->setGebruikerUser($row['gebruiker_user']);
            $gebruiker->setGebruikerEmail($row['gebruiker_email']);
            $gebruiker->setGebruikerVoornaam($row['gebruiker_voornaam']);
            $gebruiker->setGebruikerTussenvoegsel($row['gebruiker_tussenvoegsel']);
            $gebruiker->setGebruikerAchternaam($row['gebruiker_achternaam']);
            $gebruiker->setGebruikerGeboorteDatum($row['gebruiker_geboorteDatum']);
            $gebruiker->setGebruikerAdres($row['gebruiker_adres']);
            $gebruiker->setGebruikerWoonplaats($row['gebruiker_woonplaats']);
            $gebruiker->setGebruikerTelefoonPrive($row['gebruiker_telefoonPrive']);
            $gebruiker->setGebruikerTelefoonWerk($row['gebruiker_telefoonWerk']);
            $gebruiker->setGebruikerInDienst($row['gebruiker_inDienst']);
        }

        
        return $gebruiker;
        /* if ($data == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            $data['rechten'] = unserialize($data['rechten']);

            return $data;
        }
         *
         */
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CD end
    }

    /**
     * Short description of method getGebruikerListDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerListDb() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CF begin
        // Query selecteert de gebruiker aan de hand van class vars.
        $query = "SELECT * FROM  `gebruiker` ORDER BY `gebruiker_id` ASC";

        // haalt de array op aan de hand van database's fetchDbArray function.
        // als het null is,
        if (!$this->dbquery($query)) {
            return false;
        }
        if (!($result = $this->dbFetchAll())) {
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
           
        
 
        
        foreach($result as $idx => $row){
            $gebruiker_object[$row['gebruiker_id']] = new Gebruiker();
            
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerId($this->dbOutString($row['gebruiker_id']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerUser($this->dbOutString($row['gebruiker_user']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerVoornaam($this->dbOutString($row['gebruiker_voornaam']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerTussenvoegsel($this->dbOutString($row['gebruiker_tussenvoegsel']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerAchternaam($this->dbOutString($row['gebruiker_achternaam']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerEmail($this->dbOutString($row['gebruiker_email']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerGeboorteDatum($this->dbOutString($row['gebruiker_geboorteDatum']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerAdres($this->dbOutString($row['gebruiker_adres']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerWoonplaats($this->dbOutString($row['gebruiker_woonplaats']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerTelefoonPrive($this->dbOutString($row['gebruiker_telefoonPrive']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerTelefoonWerk($this->dbOutString($row['gebruiker_telefoonWerk']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerInDienst($this->dbOutString($row['gebruiker_inDienst']));
            $gebruiker_object[$row['gebruiker_id']]->setGebruikerActief((int)$row['gebruiker_actief']);
            
           
            
        }
        

        
         return $gebruiker_object;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008CF end
    }

    /**
     * Short description of method getGebruikerByUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_user
     * @return mixed
     */
    public function getGebruikerByUserDb($gebruiker_user, $rechten) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D1 begin
        $query = "SELECT * FROM gebruiker WHERE gebruiker_user = '$gebruiker_user'";
        $rechten = \unserialize($query['rechten']);

        $this->dbQuery($query);
        $user = $this->dbFetchAll($query);

        if ($user == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $user;
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D1 end
    }

    /**
     * Short description of method getGebruikerByActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_actief
     * @return mixed
     */
    public function getGebruikerByActiefDb($gebruiker_user) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEF begin
        $query = "SELECT * FROM gebruiker WHERE (gebruiker_user = '$gebruiker_user')"
                . "AND (gebruiker_actief= 1)";

        $this->dbQuery($query);
        $user = $this->dbFetchAll($query);

        if ($user == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $user;
        }
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEF end
    }

    /**
     * Short description of method createGebruikerDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_user
     * @param  gebruiker_wachtwoord
     * @param  gebruiker_voornaam
     * @param  gebruiker_tussenvoegsel
     * @param  gebruiker_achternaam
     * @param  gebruiker_email
     * @param  rechten
     * @param  sessie_id
     * @return mixed
     */
    public function createGebruikerDb($gebruiker) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BB begin
       
        
        
        if( !is_object($gebruiker) && get_class( $gebruiker)){
            // Oops
        }
        
        // Get database representable rechten structure
        $rechten = $this->dbInString( serialize( $gebruiker->getRechten() ));
        
        //*
        echo __FILE__.__LINE__.__FUNCTION__.'<br />';
        echo '<pre>';
        var_dump($gebruiker);
        var_dump($rechten);
        echo '</pre>';
        echo $rechten;
        //*/
        
        //INSERT INTO `cegelec`.`gebruiker` ( `gebruiker_user`, `gebruiker_wachtwoord`, `gebruiker_voornaam`, `gebruiker_tussenvoegsel`, `gebruiker_achternaam`, `gebruiker_email`, `gebruiker_geboorteDatum`, `gebruiker_adres`, `gebruiker_woonplaats`, `gebruiker_telefoonPrive`, `gebruiker_telefoonWerk`, `gebruiker_inDienst`, `gebruiker_functie`, `gebruiker_status`, `gebruiker_bijzonder`, `rechten`, `sessie_id`, `gebruiker_actief`, `gebruiker_coachID`, `gebruiker_projectleiderID`, `gebruiker_docentID`) VALUES ('cqwertyuiop', 'wefefewf', 'wdqdqd', 'y', 'qwdwdwqq', 'qqw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL);
        
        $query = "INSERT INTO  `cegelec`.`gebruiker` (
                `gebruiker_user` ,
                `gebruiker_wachtwoord` ,
                `gebruiker_voornaam` ,
                `gebruiker_tussenvoegsel`,
                `gebruiker_achternaam` ,
                `gebruiker_email` ,
                `gebruiker_geboorteDatum`,
                `gebruiker_adres`,
                `gebruiker_woonplaats`,
                `gebruiker_telefoonPrive`,
                `gebruiker_telefoonWerk`,
                `gebruiker_inDienst`,
                `gebruiker_actief`
                )
                  VALUES (".
                "'" . $this->dbInString($gebruiker->getGebruikerUser() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerWachtwoord() ) . "',    
                '" . $this->dbInString($gebruiker->getGebruikerVoornaam() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerTussenvoegsel() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerAchternaam() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerEmail() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerGeboorteDatum() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerAdres() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerWoonplaats() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerTelefoonPrive() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerTelefoonWerk() ) . "',
                '" . $this->dbInString($gebruiker->getGebruikerInDienst() ) . "',
                '" . $gebruiker->getGebruikerActief()  . "'
                )";
        
     //* 
        echo __FILE__.__LINE__.__FUNCTION__.'<br />';
        echo '<pre>';
        var_dump($gebruiker);
        echo($query);
        echo '</pre>';
        //*/
        
        
        
        
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->gebruiker_user = $gebruiker->getGebruikerUser();
            $this->gebruiker_wachtwoord = $gebruiker->getGebruikerWachtwoord();
            $this->gebruiker_voornaam = $gebruiker->getGebruikerVoornaam();
            $this->gebruiker_tussenvoegsel = $gebruiker->getGebruikerTussenvoegsel();
            $this->gebruiker_achternaam = $gebruiker->getGebruikerAchternaam();
            $this->gebruiker_email = $gebruiker->getGebruikerEmail();
            $this->gebruiker_geboorteDatum = $gebruiker->getGebruikerGeboorteDatum();
            $this->gebruiker_adres = $gebruiker->getGebruikerAdres();
            $this->gebruiker_woonplaats = $gebruiker->getGebruikerWoonplaats();
            $this->gebruiker_telefoonPrive = $gebruiker->getGebruikerTelefoonPrive();
            $this->gebruiker_telefoonWerk = $gebruiker->getGebruikerTelefoonWerk();
            $this->gebruiker_inDienst = $gebruiker->getGebruikerInDienst();
            $this->gebruiker_actief = $gebruiker->getGebruikerActief();
            $this->dbOutString($gebruiker->setGebruikerId($this->dbLastInsertedId()));
            //$this->setGebruikerId($this->dbGetLastInsertedId() );
            
        
            
            return true;
        }
        
        
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BB end
    }

    /**
     * Short description of method updateGebruikerDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_user
     * @param  rechten
     * @param  sessie_id
     * @param  gebruiker_wachtwoord
     * @param  gebruiker_id
     * @return mixed
     */
    public function updateGebruikerDb($myinputs) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BD begin
        // serialize rights
        //$rechten = serialize($rechten);
        // Query updates the item using inserted parameters. 
        $query = "UPDATE `gebruiker` 
                    SET `gebruiker_user` = '" . $this->dbInString($myinputs->getGebruikerUser()) . "', 
                        `gebruiker_email` = '" . $this->dbInString($myinputs->getGebruikerEmail()) . "',  
                        `gebruiker_voornaam` = '" . $this->dbInString($myinputs->getGebruikerVoornaam()) . "', 
                        `gebruiker_tussenvoegsel` = '" . $this->dbInString($myinputs->getGebruikerTussenvoegsel()) . "', 
                        `gebruiker_achternaam` = '" . $this->dbInString($myinputs->getGebruikerAchternaam()) . "',    
                        `gebruiker_geboorteDatum` = '" . $this->dbInString($myinputs->getGebruikerGeboorteDatum()) . "',         
                        `gebruiker_adres` = '" . $this->dbInString($myinputs->getGebruikerAdres()) . "', 
                        `gebruiker_woonplaats` = '" . $this->dbInString($myinputs->getGebruikerWoonplaats()) . "',     
                        `gebruiker_telefoonPrive` = '" . $this->dbInString($myinputs->getGebruikerTelefoonPrive()) . "',   
                        `gebruiker_telefoonWerk` = '" . $this->dbInString($myinputs->getGebruikerTelefoonWerk()) . "',    
                        `gebruiker_inDienst` = '" . $this->dbInString($myinputs->getGebruikerInDienst()) . "',
                        `gebruiker_actief` = '" . $myinputs->getGebruikerActief() . "'
WHERE   
                        `gebruiker_id` = '" . $this->dbInString($myinputs->getGebruikerId()) . "'";


      
        if (!$this->dbquery($query)) {
            return false;
        } else {
            header('Location: '. 'index.php?page=gebruikers' );
            return true;
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BD end
    }

    /**
     * Short description of method deleteGebruikerDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_id
     * @return mixed
     */
    public function deleteGebruikerDb($gebruiker_id) {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BF begin
        $query = "DELETE FROM gebruiker WHERE gebruiker . gebruiker_id = '" . $gebruiker_id . "'  LIMIT 1 ";
        if (!$this->dbquery($query)) {
            return false;
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008BF end
    }

}

/* end of class db_gebruiker */
?>