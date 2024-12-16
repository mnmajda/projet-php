<?php

// Active l'affichage des erreurs PHP (à désactiver en production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définir le fuseau horaire (modifiable selon le besoin)
date_default_timezone_set('America/New_York');

/**
 * Retourne l'année actuelle
 * @return string
 */
function getCurrentYear(): string {
    return date('Y');
}

/**
 * Retourne la date actuelle au format MM/DD/YYYY
 * @return string
 */
function getFullDate(): string {
    return date('m/d/Y');
}

/**
 * Calcule l'âge en années à partir de la date de naissance
 * @param string $dob Date de naissance au format MM/DD/YYYY
 * @return int|null Retourne l'âge en années ou null si la date est invalide
 */
function calculateAge(string $dob): ?int {
    $birthDate = DateTime::createFromFormat('m/d/Y', $dob);

    // Vérifier si la date est valide
    if ($birthDate && $birthDate->format('m/d/Y') === $dob) {
        $today = new DateTime();
        return $today->diff($birthDate)->y; // Différence en années
    }

    // Retourne null si la date est invalide
    return null;
}
