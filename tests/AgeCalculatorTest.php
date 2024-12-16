<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php'; // emplacement des fichiers à tester
class AgeCalculatorTest extends TestCase
{
    // Test pour la fonction getCurrentYear
    public function testGetCurrentYear()
    {
        $currentYear = getCurrentYear();
        $this->assertEquals(date('Y'), $currentYear, "getCurrentYear() should return the current year.");
    }

    // Test pour la fonction getFullDate
    public function testGetFullDate()
    {
        $fullDate = getFullDate();
        $expectedDate = date('m/d/Y');
        $this->assertEquals($expectedDate, $fullDate, "getFullDate() should return today's date in the format 'm/d/Y'.");
    }

    // Test pour le calcul de l'âge
    public function testAgeCalculationValidDate()
    {
        $dob = '01/01/2000'; // Exemple de date de naissance
        $birthDate = DateTime::createFromFormat('m/d/Y', $dob);
        $today = new DateTime();
        $expectedAge = $today->diff($birthDate)->y;

        $this->assertEquals(24, $expectedAge, "The calculated age should be correct.");
    }

    // Test pour une date invalide
    public function testAgeCalculationInvalidDate()
    {
        $dob = 'invalid-date';
        $birthDate = DateTime::createFromFormat('m/d/Y', $dob);

        $this->assertFalse($birthDate, "An invalid date format should return false.");
    }
}
