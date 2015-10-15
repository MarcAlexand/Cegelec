<?php

class Gebruiker 
{
    private $gebruiker_id;
    private $username;
    private $wachtwoord;
    private $voornaam;
    private $tussenvoegsel;
    private $achternaam;
    private $email;
    private $objectmail;
    private $geboorte_datum;
    private $adres;
    private $woonplaats;
    private $telefoon_prive;
    private $telefoon_werk;
    private $dienst;
    private $sessie_id;
    private $actief;
    private $hash;


    private $db;
    private $rechten;


    public function __construct(DbGebruiker $db) {
        $this->db = $db;
        $this->rechten = new RechtBitfield;
        $this->objectmail = new Mailer;
    }

    /**
     * @return mixed
     */
    public function getGebruikerId()
    {
        return $this->gebruiker_id;
    }

    /**
     * @param mixed $gebruiker_id
     */
    public function setGebruikerId($gebruiker_id)
    {
        $this->gebruiker_id = $gebruiker_id;
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
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * @param mixed $wachtwoord
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
        
        
        
    }

    /**
     * @return mixed
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param mixed $voornaam
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return mixed
     */
    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    /**
     * @param mixed $tussenvoegsel
     */
    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    /**
     * @return mixed
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGeboorteDatum()
    {
        return $this->geboorte_datum;
    }

    /**
     * @param mixed $geboorte_datum
     */
    public function setGeboorteDatum($geboorte_datum)
    {
        $this->geboorte_datum = $geboorte_datum;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @param mixed $adres
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    /**
     * @return mixed
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * @param mixed $woonplaats
     */
    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;
    }

    /**
     * @return mixed
     */
    public function getTelefoonPrive()
    {
        return $this->telefoon_prive;
    }

    /**
     * @param mixed $telefoon_prive
     */
    public function setTelefoonPrive($telefoon_prive)
    {
        $this->telefoon_prive = $telefoon_prive;
    }

    /**
     * @return mixed
     */
    public function getTelefoonWerk()
    {
        return $this->telefoon_werk;
    }

    /**
     * @param mixed $telefoon_werk
     */
    public function setTelefoonWerk($telefoon_werk)
    {
        $this->telefoon_werk = $telefoon_werk;
    }

    /**
     * @return mixed
     */
    public function getDienst()
    {
        return $this->dienst;
    }

    /**
     * @param mixed $dienst
     */
    public function setDienst($dienst)
    {
        $this->dienst = $dienst;
    }

    /**
     * @return mixed
     */
    public function getSessieId()
    {
        return $this->sessie_id;
    }

    /**
     * @param mixed $sessie_id
     */
    public function setSessieId($sessie_id)
    {
        $this->sessie_id = $sessie_id;
    }

    /**
     * @return mixed
     */
    public function getActief()
    {
        return $this->actief;
    }

    /**
     * @param mixed $actief
     */
    public function setActief($actief)
    {
        $this->actief = $actief;
    }

    /**
     * @return DbGebruiker
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param DbGebruiker $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

    /**
     * @return RechtBitfield
     */
    public function getRechten()
    {
        return $this->rechten;
    }

    /**
     * @param RechtBitfield $rechten
     */
    public function setRechten($rechten)
    {
        $this->rechten = $rechten;
    }
    
    public function setHash($hash){
        $this->hash = $hash;
    }
    /**
     * Return user matching a specific id.
     *
     * @param $id
     * @return mixed
     */
    public function getGebruikerById($id) {

        return $this->db->getGebruikerByIdDb($id);
    }

    public function getGebruikerByUser($username) {
        return $this->db->getGebruikerByUSerDb($username);
    }

    public function getGebruikerByActief($status) {
        return $this->db->getGebruikerByActiefDb($status);
    }
    
    public function getGebruikerProjectleiderId($id) {
        return $this->db->getGebruikerProjectleiderId($id);
    }
    
    public function getGebruikerMentorId($id) {
        return $this->db->getGebruikerMentorId($id);
    }
    
    public function getGebruikerCoachId($id) {
        return $this->db->getGebruikerCoachId($id);
    }

    /**
     * Return list of all users.
     *
     * @return mixed
     */
    public function getGebruikerList() {
        return $this->db->getGebruikerListDb();
    }

    public function getHash(){
        return $this->hash;
    }
    public function deleteGebruiker($id) {
        return $this->dbGebruiker->deleteGebruikerDb($id);
    }

    public function heeftRecht($rechten, $recht_positie) {
        $this->rechten->setBitfield($rechten);
        if ($this->rechten->heeftRecht($recht_positie)) {
            return TRUE;
        }
        return FALSE;
    }

    public function updateGebruiker($input, $id) {
        return $this->db->updateGebruikerDb($input, $id);
    }
    
    public function randomPassword()
    {
        // section -84-19-76-71--c917496:15022315175:-8000:0000000000001056 begin
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $wachtwoord = $this->setWachtwoord(implode($pass));
        $file = fopen("test.txt", "w");
        fwrite($file, $wachtwoord);
        fclose($file);
        
        $this->setHash(password_hash($wachtwoord, PASSWORD_DEFAULT)); //turn the array into a string
        return true;
        // section -84-19-76-71--c917496:15022315175:-8000:0000000000001056 end
    }
    
   
//    public function setParameters($parameters) {
//        $expected = ['voornaam', 'achternaam'];
//        foreach( $parameters as $key => $parameter) {
//            if(array_key_exists($key, $expected)){
//                $this->$key = $parameter;
//            };
//        }
//    }
    public function save($input) {
        // Eerst gebruiker aanmaken
        $this->setUsername($input['gebruiker_user']);
        $this->setEmail($input['gebruiker_email']);
        $this->randomPassword();
        $this->objectmail->mailPassword($this->getUsername(), $this->getWachtwoord(), $this->getEmail());
        
        
       

// Als aanmaken gelukt -> wachtwoord mail sturen
         
        return $this->db->createGebruikerDb($input, $this->getHash());
    }
    
}
