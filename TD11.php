<?php

#exo1

$email = juniorjm.kuyo@gmail.com
if preg_match ("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)
{
    echo "Cette adresse email est valide"
}
else
{
    echo "Erreur email non valide"
} 

#exo2

$ip = 0.0.0.0
if preg_match ("#^[0–9]{1,3}.){3}.([0–9]{1,3}$#", $ip)
{
    echo "Cette adresse ip est valide"
}
else
{
    echo "Erreur ip non valide"
} 

#exo3

$mac = 00:1B:44:11:3A:B7
if preg_match ("#^[0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})|([0-9a-fA-F] {4}$#", $mac)
{
    echo "Cette adresse mac est valide"
}
else
{
    echo "Erreur mac non valide"
} 





















?>