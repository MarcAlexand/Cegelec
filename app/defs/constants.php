<?php
/**
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 * @author Ghoogendoorn
 * @version 0.2
 *
 * Version history
 * 0.1      GHoogendoorn        Initial version
 *
 * 
 * If the path is not found ad the following line to the config.php:
 *  ini_set('include_path', './' . PATH_SEPARATOR . "./common/". PATH_SEPARATOR . ini_get('include_path'));
 */
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

//echo get_include_path();

define("WWW_ROOT",                          "");
 define("HOME",                             WWW_ROOT."public/index.php");
 define("DIR_MODEL",                        WWW_ROOT."app/Model/");
 define("DIR_VIEW",                         WWW_ROOT."app/View/");
 define("DIR_CONTROLLER",                   WWW_ROOT."app/Controller/");
 define("DIR_DEFS",                         WWW_ROOT."app/defs/");
 
 // CONSTATNS
 define("FILE_DB_CONSTANTS",                DIR_DEFS."db_constants.php");
 define("FILE_DEFS_RECHTCONSTANS",          DIR_DEFS."rechtconstants.php");
 
// DATABASE CONNECTION
 define("FILE_DB",                          DIR_CONTROLLER."database.php");
 
 //ERROR FILE
 define("FILE_ERROR",                       DIR_MODEL."error.php");
 
 //RECHTEN & BITFIELD
 define("FILE_M_RECHTBITFIELD",             DIR_MODEL."rechtBitfield.php");
 define("FILE_M_RECHTGROEP",                DIR_MODEL."rechtgroep.php");
 define("FILE_DB_RECHT",                    DIR_CONTROLLER."db_recht.php");
 define("FILE_M_BITFIELD",                  DIR_MODEL."bitfield.php");
 define("FILE_DB_RECHTGROEP",               DIR_CONTROLLER."db_rechtgroep.php");
 define("FILE_M_RECHT",                     DIR_MODEL."recht.php");
 
 //LOGIN & UITLOGGEN
 define("FILE_DB_LOGINSTYSTEEM",            DIR_CONTROLLER."db_loginsysteem.php");
 define("FILE_M_LOGINSYSTEEM",              DIR_MODEL."loginsysteem.php");
 define("FILE_V_LOGINSCHERM",               DIR_VIEW."login_scherm.php");
 define("URL_WEERGEVEN_UITLOGGEN",          "Uitloggen");
 
 //SESSION
 define("FILE_M_SESSION",                   DIR_MODEL."session.php");
 
 // DASHBOARD
 define("FILE_V_DASHBOARD",                 DIR_VIEW."dashboard.php");
 define("URL_DASHBOARD",                    "?page=dashboard");
 
 // GEBRUIKER
 define("FILE_DB_GEBRUIKER",                DIR_CONTROLLER."db_gebruiker.php");
 define("FILE_M_GEBRUIKER",                 DIR_MODEL."gebruikertemp.php");
 define("FILE_M_GEBRUIKER_RECHT",           DIR_MODEL."gebruiker_recht.php");
 define("FILE_V_GEBRUIKERSOVERZICHT",       DIR_VIEW."gebruikeroverzicht.php");
 define("URL_WEERGEVEN_USER_BEHEER",        "Gebruikers");
 define("URL_USER_BEHEER",                  "?page=gebruikers");
 
    // Leerling
 define("URL_WEERGEVEN_OVERZICHT_LEERLING", "Leerling");
 define("URL_LEERLING_BEHEER",              "?page=leerling");
 define("FILE_V_LEERLING",                  DIR_VIEW."leerlingoverzicht.php");

 // OPLEIDING
 define("FILE_M_OPLEIDING",                 DIR_MODEL."opleiding.php");
 define("FILE_DB_OPLEIDING",                DIR_CONTROLLER."db_opleiding.php");
 define("FILE_V_OPLEIDING",                 DIR_VIEW."opleiding.php");
 define("URL_WEERGEVEN_OPLEIDING_BEHEER",   "Opleidingen");
 define("URL_OPLEIDING_BEHEER",             "?page=opleiding");
 
 // CURSUS
 define("FILE_M_CURSUSBLOK",                DIR_MODEL."cursusblok.php");
 define("FILE_DB_CURSUSBLOK",               DIR_CONTROLLER."db_cursusblok.php");
 define("FILE_M_CURSUS",                    DIR_MODEL."cursus.php");
 define("FILE_DB_CURSUS",                   DIR_CONTROLLER."db_cursus.php");
 
 // LOCATIE
 define("FILE_M_LOCAITE",                   DIR_MODEL."locatie.php");
 define("FILE_V_LOCATIE",                   DIR_VIEW."locatieoverzicht.php");
 define("FILE_DB_LOCATIE",                  DIR_CONTROLLER."db_locatie.php");
 define("URL_WEERGEVEN_OVERZICHT_LOCATIE",   "Locaties");
 define("URL_LOCATIE_BEHEER",             "?page=locatie");

// MEETWAARDE
 
 define("FILE_M_MEETWAARDE",                DIR_MODEL."meetwaarde.php");
 define("FILE_V_MEETWAARDE",                DIR_VIEW."meetwaarde.php");
 define("FILE_DB_MEETWAARDE",               DIR_CONTROLLER."db_meetwaarde.php");

// ERROR
 define("TEXT_FORM_FIELD_ERROR_DEFAULT",       "Tekst veld mag niet leeg zijn!");           
 define("TEXT_FORM_FIELD_ERROR_USERNAME",       "Gebruikersnaam is niet geldig!");  
 define("TEXT_FORM_FIELD_ERROR_VOORNAAM",   "Voornaam is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_TUSSENVOEGSEL",  "Tussenvoegsel is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_ACHTERNAAM", "Achternaam is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_GEBOORTEDATUM",       "Geboortedatum is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_ADRES",       "Adres is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_WOONPLAATS",       "Woonplaats is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_TELEFOONPRIVE",       "Privé nummer is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_TELEFOONWERK",       "Werk nummer is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_INDIENST",       "In dienst datum is niet geldig!");
 define("TEXT_FORM_FIELD_ERROR_RECHT",       "Recht is niet geldig!");
  
   
 
 define("TEXT_ERROR_MANDATORY_FIELD_USERNAME_EMPTY", "Verplichte username is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_VOORNAAM_EMPTY", "Verplichte voornaam is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_TUSSENVOEGSEL_EMPTY", "Verplichte tussenvoegsel is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_ACHTERNAAM_EMPTY", "Verplichte achternaam is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_MAIL_EMPTY", "Verplichte mail is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_GEBOORTEDATUM_EMPTY", "Verplichte geboorte datum is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_ADRES_EMPTY", "Verplichte adres is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_WOONPLAATS_EMPTY", "Verplichte woonplaats is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_TELEFOONPRIVE_EMPTY", "Verplichte privé nummer is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_TELEFOONWERK_EMPTY", "Verplichte werk nummer is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_INDIENST_EMPTY", "Verplichte in dienst datum is leeg.");
 define("TEXT_ERROR_MANDATORY_FIELD_RECHT_EMPTY", "Verplichte recht is niet goed ingevuld.");
 define("TEXT_ERROR_MANDATORY_FIELD_ACTIEF_EMPTY", "Verplichte actief is niet goed ingevuld.");
 
  define("TEXT_ERROR_MANDATORY_FIELD_ADRES_INVALID", "Verplichte adres is vekeerd ingevult, vul een straat en huisnummer in.");
