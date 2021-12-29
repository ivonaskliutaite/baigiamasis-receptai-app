<?php
// Gauname duomenis is uzpildytos kontaktines formos
$name = $_POST['vardas'];
$email = $_POST['elpastas'];
$message = $_POST['zinute'];
$contact = $_POST['kontaktas'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // email'as yra perziurimas ar nera jokiu negalimu zenklu

echo "Labas";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = 'Atsakymas';
        $headers = 'MIME-Version: 1.0' . "rn";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn"; //biblioteka
        $headers .= 'From:' . $email . "rn";
        $headers .= 'Cc:' . $email . "rn";
        $template = 'Laba diena. ' . $name . ',<br/>'
            . '<br/>Aciu, kad kreipetes.<br/><br/>'
            . 'Name:' . $name . '<br/>'
            . 'Email:' . $email . '<br/>'
            . 'Contact No:' . $contact . '<br/>'
            . 'Message:' . $message . '<br/><br/>'
            . 'Si zinute yra patvirtinimo zinute, prasome i ja neatsakineti.'
            . '<br/>'
            . 'Susisieksime su Jumis kaip imanoma greiciau.';

        $sendmessage = wordwrap($message, 200); //iki 70 zenklu

        mail("ivonaskliutaite@gmail.com", $subject, $sendmessage, $headers);
        echo "Susisieksime su Jumis kaip imanoma greiciau.";
    }
 else {
    echo "Pasitikrinkite savo el. pasto adresa";
    }