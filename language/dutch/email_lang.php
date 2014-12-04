<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, Pieter Krul
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Directe toegang tot scripts is niet toegestaan');

$lang['email_must_be_array']		= 'De validatiemethode voor email heeft er graag een array bij. Ja? Dus..';
$lang['email_invalid_address']		= 'Dit emailadres wordt niet als zodanig beschouwd: %s';
$lang['email_attachment_missing']	= 'Het lukt me niet om de bijlage die bij dit bericht hoort erbij te halen: %s';
$lang['email_attachment_unreadable']	= 'Ik kan de bijlage die bij dit bericht hoort niet lezen. Ja? Dus: %s';
$lang['email_no_from']			= 'Email versturen zonder "From"-header, dat doe ik niet. Ja?';
$lang['email_no_recipients']		= 'Onthoudt: ontvangers (Naar, Cc, of Bcc) horen er ook bij.';
$lang['email_send_failure_phpmail']	= 'Het lukt niet om email te versturen met PHP mail(). Deze server zou wel eens een andere methode gebruiken om berichten te sturen. Dus..';
$lang['email_send_failure_sendmail']	= 'Het lukt niet om email te versturen met PHP Sendmail. Deze server zou wel eens een andere methode gebruiken om berichten te sturen. Dus..';
$lang['email_send_failure_smtp']	= 'Het lukt niet om email te versturen met PHP SMTP.  Deze server zou wel eens een andere methode gebruiken om berichten te sturen. Dus..';
$lang['email_sent']			= 'Het bericht is daadwerkelijk verstuurd, via het volgende protocol. Dus: %s';
$lang['email_no_socket']		= 'Het lukt niet om een socket naar sendmail te openen.  Controleer instellingen.  Ja? hmmm.';
$lang['email_no_hostname']		= 'Specificeer een SMTP hostnaam, die ontbrak nog.  ';
$lang['email_smtp_error']		= 'Tegengehouden door een SMTP-foutmelding: %s';
$lang['email_no_smtp_unpw']		= 'Fout: geef een SMTP gebruikersnaam met wachtwoord.';
$lang['email_failed_smtp_login']	= 'De AUTH LOGIN opdracht gaf een foutmelding bij het versturen: %s';
$lang['email_smtp_auth_un']		= 'Bij het authenticeren gaf de gebruikersnaam een foutmelding: %s';
$lang['email_smtp_auth_pw']		= 'Bij het authenticeren gaf het wachtwoord een foutmelding:  %s';
$lang['email_smtp_data_failure']	= 'Ik kan geen data versturen: %s';
$lang['email_exit_status']		= 'Exit statuscode: %s. Ja?';

/* End of file email_lang.php */
/* Location: ./application/language/dutch/email_lang.php */
