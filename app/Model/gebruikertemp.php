<?php
/**
 * Short description of class Gebruiker
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Gebruiker
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute gebruiker_id
     *
     * @access private
     * @var integer
     */
    private $gebruiker_id = null;

    /**
     * Short description of attribute gebruiker_user
     *
     * @access private
     * @var string
     */
    private $gebruiker_user = '';

    /**
     * Short description of attribute gebruiker_wachtwoord
     *
     * @access private
     * @var string
     */
    private $gebruiker_wachtwoord = '';

    /**
     * Short description of attribute gebruiker_voornaam
     *
     * @access private
     * @var string
     */
    private $gebruiker_voornaam = '';

    /**
     * Short description of attribute gebruiker_tussenvoegsel
     *
     * @access private
     * @var string
     */
    private $gebruiker_tussenvoegsel = '';

    /**
     * Short description of attribute gebruiker_achternaam
     *
     * @access private
     * @var string
     */
    private $gebruiker_achternaam = '';

    /**
     * Short description of attribute gebruiker_email
     *
     * @access private
     * @var string
     */
    private $gebruiker_email = '';

    /**
     * Short description of attribute gebruiker_geboorteDatum
     *
     * @access protected
     * @var string
     */
    protected $gebruiker_geboorteDatum = '';

    /**
     * Short description of attribute gebruiker_adres
     *
     * @access public
     * @var string
     */
    public $gebruiker_adres = '';

    /**
     * Short description of attribute gebruiker_woonplaats
     *
     * @access public
     * @var string
     */
    public $gebruiker_woonplaats = '';

    /**
     * Short description of attribute gebruiker_telefoonPrive
     *
     * @access public
     * @var string
     */
    public $gebruiker_telefoonPrive = '';

    /**
     * Short description of attribute gebruiker_telefoonWerk
     *
     * @access public
     * @var string
     */
    public $gebruiker_telefoonWerk = '';

    /**
     * Short description of attribute gebruiker_inDienst
     *
     * @access public
     * @var string
     */
    public $gebruiker_inDienst = '';

    /**
     * Short description of attribute gebruiker_functie
     *
     * @access public
     * @var string
     */
    public $gebruiker_functie = '';

    /**
     * Short description of attribute gebruiker_actief
     *
     * @access private
     * @var boolean
     */
    private $gebruiker_actief = false;

    /**
     * Short description of attribute gebruiker_bijzonder
     *
     * @access public
     * @var string
     */
    public $gebruiker_bijzonder = '';

    /**
     * Short description of attribute rechten
     *
     * @access private
     * @var integer
     */
    private $rechten = null;

    /**
     * Short description of attribute sessie_id
     *
     * @access private
     * @var integer
     */
    private $sessie_id = null;

    /**
     * Short description of attribute gebruiker_coachId
     *
     * @access public
     * @var integer
     */
    public $gebruiker_coachId = null;

    /**
     * Short description of attribute gebruiker_projectLeiderId
     *
     * @access public
     * @var integer
     */
    public $gebruiker_projectLeiderId = null;

    /**
     * Short description of attribute gebruiker_docentId
     *
     * @access public
     * @var integer
     */
    public $gebruiker_docentId = null;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @return mixed
     */
    public function __construct(DbGebruiker $db = null)
    {
        $this->dbGebruiker = $db;
        $this->rechten = new RechtBitfield();
    }

    /**
     * Short description of method setGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerId($gebruiker)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C38 begin
        $this->gebruiker_id = $gebruiker;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C38 end
    }

    /**
     * Short description of method setGebruikerUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerUser($gebruiker)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C3A begin
        
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_USERNAME_EMPTY);
        }
        
        $this->gebruiker_user = $gebruiker;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C3A end
    }

    /**
     * Short description of method setGebruikerWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerWachtwoord($gebruiker)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C30 begin
        $this->gebruiker_wachtwoord = md5($gebruiker);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C30 end
    }

    /**
     * Short description of method setGebruikerVoornaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerVoornaam($gebruiker)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C28 begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_VOORNAAM_EMPTY);
        }
        $this->gebruiker_voornaam = $gebruiker;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C28 end
    }

    /**
     * Short description of method setGebruikerTussenvoegsel
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_id
     * @return mixed
     */
    public function setGebruikerTussenvoegsel($gebruiker_id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2A begin
        if(!is_string($gebruiker_id)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_TUSSENVOEGSEL_EMPTY);
        }
        $this->gebruiker_tussenvoegsel = $gebruiker_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2A end
    }

    /**
     * Short description of method setGebruikerAchternaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerAchternaam($gebruiker)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2C begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_ACHTERNAAM_EMPTY);
        }
        $this->gebruiker_achternaam = $gebruiker;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2C end
    }

    /**
     * Short description of method setGebruikerEmail
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerEmail($gebruiker)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2E begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_MAIL_EMPTY);
        }
        $this->gebruiker_email = $gebruiker;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C2E end
    }

    /**
     * Short description of method setGebruikerGeboorteDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerGeboorteDatum($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C62 begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_GEBOORTEDATUM_EMPTY);
        }
        $this->gebruiker_geboorteDatum = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C62 end
    }

    /**
     * Short description of method setGebruikerAdres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerAdres($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C64 begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_ADRES_EMPTY);
        }
        $datum_array = explode(" ", $gebruiker);
        if(count($datum_array) == 1 || is_numeric($datum_array[0]) || !is_numeric($datum_array[1])){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_ADRES_INVALID);
        }
       
        
        $this->gebruiker_adres = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C64 end
    }

    /**
     * Short description of method setGebruikerWoonplaats
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerWoonplaats($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C66 begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_WOONPLAATS_EMPTY);
        }
        $this->gebruiker_woonplaats = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C66 end
    }

    /**
     * Short description of method setGebruikerTelefoonPrive
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerTelefoonPrive($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C68 begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_TELEFOONPRIVE_EMPTY);
        }
        $this->gebruiker_telefoonPrive = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C68 end
    }

    /**
     * Short description of method setGebruikerTelefoonWerk
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerTelefoonWerk($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6A begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_TELEFOONWERK_EMPTY);
        }
        $this->gebruiker_telefoonWerk = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6A end
    }

    /**
     * Short description of method setGebruikerInDienst
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerInDienst($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6C begin
        if(empty($gebruiker) || !is_string($gebruiker)){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_INDIENST_EMPTY);
        }
        $this->gebruiker_inDienst = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6C end
    }

    /**
     * Short description of method setGebruikerFunctie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerFunctie($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6E begin
        $this->gebruiker_functie = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C6E end
    }

    /**
     * Short description of method setGebruikerActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerActief($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C70 begin
        
        
       
        
        if(!is_int($gebruiker) || $gebruiker > 1){
            throw new Exception(TEXT_ERROR_MANDATORY_FIELD_ACTIEF_EMPTY);
        }
        $this->gebruiker_actief = $gebruiker ? true:false;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C70 end
    }

    /**
     * Short description of method setGebruikerBijzonder
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerBijzonder($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C72 begin
        $this->gebruiker_bijzonder = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C72 end
    }

    /**
     * Short description of method setGebruikerCoachId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerCoachId($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C74 begin
        $this->gebruiker_coachId = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C74 end
    }

    /**
     * Short description of method setGebruikerProjectleiderId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerProjectleiderId($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C76 begin
        $this->gebruiker_projectLeiderId = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C76 end
    }

    /**
     * Short description of method setGebruikerDocentId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker
     * @return mixed
     */
    public function setGebruikerDocentId($gebruiker)
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C78 begin
        $this->gebruiker_docentId = $gebruiker;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C78 end
    }

    /**
     * Short description of method setRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechten
     * @return mixed
     */
    public function setRechten($rechten)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C32 begin
        if (!is_array($rechten)) {
            // Oops
        }
        // komt array binnen, omzetten naar rechtbitveld
        // maak leeg rechtbitveld object aan
        foreach ($rechten as $recht_positie) {
            $this->rechten->addRecht($recht_positie);
        }
        
        
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C32 end
    }

    /**
     * Short description of method setRechtgroepId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechtgroep_id
     * @return mixed
     */
    public function setRechtgroepId($rechtgroep_id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C34 begin
        if ((!strlen($rechtgroep_id) > 0) || !is_numeric($rechtgroep_id)) {
            throw new Exception(GEBRUIKER_ERROR_GEENRECHTENID);
        }
        $this->rechtgroep_id = $rechtgroep_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C34 end
    }

    /**
     * Short description of method setSessieId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  sessie_id
     * @return mixed
     */
    public function setSessieId($sessie_id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C36 begin
        $this->sessie_id = $sessie_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C36 end
    }

    /**
     * Short description of method getGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerId()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1C begin
        return $this->gebruiker_id;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1C end
    }

    /**
     * Short description of method getGebruikerUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerUser()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C36 begin
        return $this->gebruiker_user;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C36 end
    }

    /**
     * Short description of method getGebruikerWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerWachtwoord()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C26 begin
        return $this->gebruiker_wachtwoord;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C26 end
    }

    /**
     * Short description of method getGebruikerVoornaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerVoornaam()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1E begin
        return $this->gebruiker_voornaam;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1E end
    }

    /**
     * Short description of method getGebruikerTussenvoegsel
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTussenvoegsel()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C20 begin
        return $this->gebruiker_tussenvoegsel;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C20 end
    }

    /**
     * Short description of method getGebruikerAchternaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerAchternaam()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C22 begin
        return $this->gebruiker_achternaam;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C22 end
    }

    /**
     * Short description of method getGebruikerEmail
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerEmail()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C24 begin
        return $this->gebruiker_email;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C24 end
    }

    /**
     * Short description of method getGebruikerGeboorteDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerGeboorteDatum()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7A begin
        return $this->gebruiker_geboorteDatum;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7A end
    }

    /**
     * Short description of method getGebruikerAdres
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerAdres()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7C begin
        return $this->gebruiker_adres;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7C end
    }

    /**
     * Short description of method getGebruikerWoonplaats
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerWoonplaats()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7E begin
        return $this->gebruiker_woonplaats;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C7E end
    }

    /**
     * Short description of method getGebruikerTelefoonPrive
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTelefoonPrive()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C80 begin
        return $this->gebruiker_telefoonPrive;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C80 end
    }

    /**
     * Short description of method getGebruikerTelefoonWerk
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerTelefoonWerk()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C82 begin
        return $this->gebruiker_telefoonWerk;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C82 end
    }

    /**
     * Short description of method getGebruikerInDienst
     *
     * @access private
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerInDienst()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C84 begin
        return $this->gebruiker_inDienst;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C84 end
    }

    /**
     * Short description of method getGebruikerFunctie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerFunctie()
    {
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C86 begin
        return $this->gebruiker_functie;
        // section -64--88-2-12-756322ce:14c868ca0ff:-8000:0000000000000C86 end
    }

    /**
     * Short description of method getGebruikerActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerActief()
    {
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D81 begin
        return $this->gebruiker_actief;
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D81 end
    }

    /**
     * Short description of method getGebruikerBijzonder
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerBijzonder()
    {
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D83 begin
        return $this->gebruiker_bijzonder;
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D83 end
    }

    /**
     * Short description of method getGebruikerCoachId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerCoachId()
    {
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D85 begin
        return $this->gebruiker_coachId;
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D85 end
    }

    /**
     * Short description of method getGebruikerProjectleider
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerProjectleider()
    {
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D87 begin
        return $this->gebruiker_projectLeiderId;
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D87 end
    }

    /**
     * Short description of method getGebruikerDocentId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerDocentId()
    {
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D89 begin
        return $this->gebruiker_docentId;
        // section -64--88-2-12--3ca9b3c4:14c8a3fd03f:-8000:0000000000000D89 end
    }

    /**
     * Short description of method getGebruikerById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return mixed
     */
    public function getGebruikerById($id)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C28 begin
        $gebruiker = new DbGebruiker();
        return $gebruiker->getGebruikerByIdDb($id);
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C28 end
    }

    /**
     * Short description of method getGebruikerList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerList()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2A begin
        $dbGebruikerList =  new DbGebruiker();
        return $dbGebruikerList->getGebruikerListDb();
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2A end
    }

    /**
     * Short description of method getGebruikerByUser
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerByUser()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2C begin
        return $this->dbGebruiker->getGebruikerByUserDb($gebruiker_user);
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2C end
    }

    /**
     * Short description of method getGebruikerByActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getGebruikerByActief()
    {
        // section -64--88-2-12-60faa14:14c8a584e1b:-8000:0000000000000D96 begin
        return $this->dbGebruiker->getGebruikerByActiefDb($gebruiker_actief);
        // section -64--88-2-12-60faa14:14c8a584e1b:-8000:0000000000000D96 end
    }

    /**
     * Short description of method getRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getRechten()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2E begin
        return $this->rechten;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C2E end
    }

    /**
     * Short description of method getRechtgroepId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getRechtgroepId()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C30 begin
        return $this->rechtgroep_id;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C30 end
    }

    /**
     * Short description of method getSessieId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getSessieId()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C32 begin
        return $this->sessie_id;
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C32 end
    }

    /**
     * Short description of method createGebruiker
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechten
     * @return mixed
     */
    public function createGebruiker($rechten)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C14 begin
        $gebruiker = new DbGebruiker();
        $gebruiker->createGebruikerDb($array);

        /* $this->dbGebruiker->createGebruikerDb(
          $this->setGebruikerUser($this->gebruiker_user),
          $this->setGebruikerVoornaam($this->gebruiker_voornaam),
          $this->setGebruikerTussenvoegsel($this->gebruiker_tussenvoegsel),
          $this->setGebruikerAchternaam($this->gebruiker_achternaam),
          $this->setGebruikerEmail($this->gebruiker_email),
          $this->setRechten($this->rechten),
          $this->setSessieId($this->sessie_id),
          $this->setGebruikerWachtwoord(md5($this->gebruiker_wachtwoord)));
         */

        // Sla recht op basis van rechtgroep id (gebruiker_recht tabel)
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C14 end
    }

    /**
     * Short description of method updateGebruiker
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  myinputs
     * @param  id
     * @return mixed
     */
    public function updateGebruiker($myinputs, $id)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C18 begin
        
        
         try{
            if( empty($this->gebruiker_wachtwoord) ){
                // Generate ww
                // $this->wachtwoord = $this->,;
            }
            //haal rechtengroep rechten op
            //$rechten = new RechtGroep($myinputs['recht']);
            $this->setGebruikerId($id);
            $this->setGebruikerUser($myinputs['gebruiker_user']);
            $this->setGebruikerVoornaam($myinputs['gebruiker_voornaam']);
            $this->setGebruikerTussenvoegsel($myinputs['gebruiker_tussenvoegsel']);
            $this->setGebruikerAchternaam($myinputs['gebruiker_achternaam']);
            $this->setGebruikerEmail($myinputs['gebruiker_email']);   
            $this->setGebruikerGeboorteDatum($myinputs['gebruiker_geboorteDatum']);
            $this->setGebruikerAdres($myinputs['gebruiker_adres']);
            $this->setGebruikerWoonplaats($myinputs['gebruiker_woonplaats']);
            $this->setGebruikerTelefoonPrive($myinputs['gebruiker_telefoonPrive']);
            $this->setGebruikerTelefoonWerk($myinputs['gebruiker_telefoonWerk']);
            $this->setGebruikerInDienst($myinputs['gebruiker_inDienst']);
            $this->setGebruikerActief((int)$myinputs['gebruiker_actief']);
            
            $dbgebruiker = new DbGebruiker();
            //stuurt info toe naar dbgebruiker
            $dbgebruiker->updateGebruikerDb($this);
            
        }catch(Exception $e){
            throw new Exception( 'Message: '. $e->getMessage());
        }
        
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C18 end
    }

    /**
     * Short description of method readGebruiker
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechten
     * @return mixed
     */
    public function readGebruiker($rechten)
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C16 begin
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C16 end
    }

    /**
     * Short description of method deleteGebruiker
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteGebruiker()
    {
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1A begin
        $this->dbGebruiker->deleteGebruikerDb($this->gebruiker_id);
        // section -84-19-69-71--6add4d69:14bee37f7a2:-8000:0000000000000C1A end
    }

    /**
     * Short description of method heeftRecht
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  rechten
     * @param  recht_positie
     * @return mixed
     */
    public function heeftRecht($rechten, $recht_positie)
    {
        // section -64--88-2-12-60faa14:14c8a584e1b:-8000:0000000000000DA8 begin
        $this->rechten->setBitfield($rechten);
        if ($this->rechten->heeftRecht($recht_positie)) {
            return TRUE;
        } else {
            return FALSE;
        }
        // section -64--88-2-12-60faa14:14c8a584e1b:-8000:0000000000000DA8 end
    }

    /**
     * Short description of method checkLengteWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  gebruiker_wachtwoord
     * @return mixed
     */
    public function checkLengteWachtwoord($gebruiker_wachtwoord)
    {
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DAC begin
        if (strlen($gebruiker_wachtwoord) < 8) {
            return false;
        } else {
            return TRUE;
        }
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DAC end
    }

    /**
     * Short description of method updateWachtwoord
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateWachtwoord()
    {
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DAF begin
        if ($this->checkWachtwoord($this->oude_wachtwoord) == true) {
            if ($this->wachtwoordBestaat($this->gebruiker_wachtwoord) == false) {
                if ($this->updateWachtwoord($this->gebruiker_wachtwoord) == true) {

                    return true;
                }
            }
        }
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DAF end
    }

    /**
     * Short description of method updateGebruikerRechtGroep
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateGebruikerRechtGroep()
    {
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DB1 begin
        $this->updateGebruikerRechtGroep($this->recht_groep_id, $this->gebruiker_id);
        // section -64--88-2-12--5f87927:14c8ab5f041:-8000:0000000000000DB1 end
    }

    /**
     * Short description of method saveGebruiker
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  myinputs
     * @return mixed
     */
    public function saveGebruiker($myinputs)
    {
        try{
            if( empty($this->gebruiker_wachtwoord) ){
                $this->setGebruikerWachtwoord($this->randomPassword());
            }
            //haal rechtengroep rechten op
            $rechten = new RechtGroep($myinputs['recht']);
            
            //*
            echo __FILE__.__LINE__.__FUNCTION__.'<br />';
            echo '<pre>';
            var_dump($rechten);
            var_dump($rechten->getRechtBitfield());
            echo '</pre>';
            //*/
            
            
            $this->setGebruikerUser($myinputs['gebruiker_user']);
            $this->setGebruikerVoornaam($myinputs['gebruiker_voornaam']);
            $this->setGebruikerTussenvoegsel($myinputs['gebruiker_tussenvoegsel']);
            $this->setGebruikerAchternaam($myinputs['gebruiker_achternaam']);
            //fixen hier onder behalve recht/actief
            //$this->setRechten($rechten->getRechtBitfield());
            $this->setRechtgroepId($myinputs['recht']);
            $this->setGebruikerEmail($myinputs['gebruiker_email']);
            
            $this->setGebruikerGeboorteDatum($myinputs['gebruiker_geboorteDatum']);
            $this->setGebruikerAdres($myinputs['gebruiker_adres']);
            $this->setGebruikerWoonplaats($myinputs['gebruiker_woonplaats']);
            $this->setGebruikerTelefoonPrive($myinputs['gebruiker_telefoonPrive']);
            $this->setGebruikerTelefoonWerk($myinputs['gebruiker_telefoonWerk']);
            $this->setGebruikerInDienst($myinputs['gebruiker_inDienst']);
            // Rechten moeten gefixd worden
            $this->setGebruikerActief((int)$myinputs['gebruiker_actief']);
            
            //maak dbgebruiker object
            $dbgebruiker = new DbGebruiker();
            //stuurt info toe naar dbgebruiker
            $dbgebruiker->createGebruikerDb($this);
            
        }catch(Exception $e){
            throw new Exception( 'Message: '. $e->getMessage());
        }
    }

    /**
     * Short description of method randomPassword
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function randomPassword()
    {
        // section -84-19-87-90-4ea08e7:14e1f66384f:-8000:0000000000000F26 begin
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
        }
        $wachtwoord = implode($pass);

        
        return $wachtwoord; //turn the array into a string
        
        // section -84-19-87-90-4ea08e7:14e1f66384f:-8000:0000000000000F26 end
    }

}