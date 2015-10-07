<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.Mailer.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 01.10.2015, 09:31:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -84-19-76-71--c917496:15022315175:-8000:0000000000001055-includes begin
// section -84-19-76-71--c917496:15022315175:-8000:0000000000001055-includes end

/* user defined constants */
// section -84-19-76-71--c917496:15022315175:-8000:0000000000001055-constants begin
// section -84-19-76-71--c917496:15022315175:-8000:0000000000001055-constants end

/**
 * Short description of class Mailer
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Mailer
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute username
     *
     * @access private
     * @var Varchar
     */
    private $username = null;

    /**
     * Short description of attribute wachtwoord
     *
     * @access private
     * @var Varchar
     */
    private $wachtwoord = null;

    /**
     * Short description of attribute email
     *
     * @access private
     * @var Varchar
     */
    private $email = null;
    
    /**
     * Short description of attribute hash
     *
     * @access private
     * @var Varchar
     */
    private $hash = null;

    // --- OPERATIONS ---

    /**
     * Short description of method randomPassword
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    

    /**
     * Short description of method mailPassword
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  $username
     * @param  $wachtwoord
     * @param  $email
     * @return mixed
     */
    public function mailPassword($username, $wachtwoord, $email)
    {
        // section -84-19-76-71--c917496:15022315175:-8000:0000000000001058 begin
        

        
     
    
        // section -84-19-76-71--c917496:15022315175:-8000:0000000000001058 begin
        

        $mail = new PHPMailer();
        
        $mail->isSMTP();
        
        $mail->SMTPDebug = 2;
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPAuth = true;
        $mail->Username = "tjerkbieze@gmail.com";
        $mail->Password = "ikillbla";
        $mail->Subject = 'Actemium applicatie - Wachtwoord';        
        $mail->Body    = "Dit is uw gebruikersnaam: ".$username." "."wachtwoord: ".$wachtwoord;
        
        $mail->addAddress($email, 'Tjerk Bieze');
         

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
}
      

    
//*
echo __FILE__.__LINE__.__FUNCTION__.'<br />';
echo '<pre>';
var_dump($mail);
echo '</pre>';
//*/
    }
        // section -84-19-76-71--c917496:15022315175:-8000:0000000000001058 end
    

} /* end of class Mailer */

?>