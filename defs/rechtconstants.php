<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.RechtConstants.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.03.2015, 13:35:55 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -84-19-65--87-20ca0564:14b77b17f57:-8000:0000000000001093-includes begin
// section -84-19-65--87-20ca0564:14b77b17f57:-8000:0000000000001093-includes end

/* user defined constants */
// section -84-19-65--87-20ca0564:14b77b17f57:-8000:0000000000001093-constants begin
// section -84-19-65--87-20ca0564:14b77b17f57:-8000:0000000000001093-constants end

/**
 * Short description of class RechtConstants
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class RechtConstants
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    
    const Leerling                                = 0x001;
//    const RECHT_LEERLING_BEKIJKEN               = 0x002;
//    const RECHT_LEERLING_TOEVOEGEN              = 0x004;
//    const RECHT_LEERLINGOVERZICHT_BEKIJKEN      = 0x008;
    const Coach                                   = 0x010;
//    const RECHT_OPLEIDING_OVERZICHT_BEKIJKEN    = 0x0020;
//    const RECHT_LEERLING_AAN_OPLEIDING_KOPPELEN = 0x0040;
//    const RECHT_COACH_AAN_OPLEIDING_KOPPELEN    = 0x0080;
    const Administrator                           = 0x00160;

} /* end of class RechtConstants */

?>