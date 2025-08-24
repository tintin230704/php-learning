<?php

class LoopExercises
{

    /**
     * Calcule la somme des entiers de 0 jusqu'à n (inclus).
     *
     * Par exemple, pour n = 5, le résultat sera : 0 + 1 + 2 + 3 + 4 + 5 = 15
     * 
     * En cas de paramètre invalide, la fonction retourne -1
     *
     * @param int $n L'entier jusqu'auquel on effectue la somme (doit être positif ou nul)
     * @return int La somme des entiers de 0 à n
     */
    public static function sumUpTo(int $n): int
    {
        // TODO compléter la fonction avec une boucle for ou while
      
        return -1;
    }

    /**
     * Objectif :
     * Un Youtubeur compte 2500 abonnés sur sa chaîne.
     * Son contenu de qualité lui fait gagner 5% d'abonné.e.s en plus tous les mois.
     * 
     * Calcule une estimation du nombre d'abonnés après un certain nombre de mois
     * avec un taux de croissance mensuel donné en pourcentage.
     * 
     * Exemple : un youtubeur commence avec 2500 abonnés et gagne 5% chaque mois.
     * En 3 mois le nombre d'abonné atteindra 2 894 (résultat arrondi)
     * 
     * Il vous est demandé de trouver une solution basé sur l'utilisation de boucle de votre choix
     * 
     * @param int $initialSubscribers Nombre initial d'abonnés
     * @param float $growthRate Taux de croissance mensuel en pourcentage (exemple : 5 pour 5%)
     * @param int $months Nombre de mois pour l'estimation
     * 
     * @return int Estimation du nombre d'abonnés après $months mois, arrondi au plus proche
     */
    public static function estimateSubscribers(int $initialSubscribers, float $growthRate, int $months): int
    {
        // Conversion du pourcentage en coefficient multiplicateur (5% => 1.05)
        $growthCoefficient = 1 + ($growthRate / 100);

        // Calcul du nombre d'abonnés après 'months' mois
        $estimatedSubscribers = $initialSubscribers * pow($growthCoefficient, $months);

        // On arrondit à l'entier supérieur (ou inférieur, selon préférence)
        // Indice : pour arrondir un entier il vous est possible d'utiliser la fonction "round" (https://www.php.net/manual/en/function.round.php)
        return (int) round($estimatedSubscribers);
    }

    /**
     * Retrouve et retourne l'index de la plus longue chaîne de caractères d'un tableau.
     * 
     * @param array $strings Tableau de chaînes de caractères
     * @return int Index de la plus longue chaîne
     */
    public static function findLongestString(array $strings): int
    {

        // Indice : pour trouver la longueur d'une chaîne de caracètres il est possible d'utiliser la fonction
        // "strlen" (https://www.php.net/manual/fr/function.strlen.php)
        $maxLength = -1;
        $indexLongest = -1;

        foreach ($strings as $index => $str) {
            if (strlen($str) > $maxLength) {
                $maxLength = strlen($str);
                $indexLongest = $index;
            }
        }

        return $indexLongest;
    }

    /**
     * Crée une liste de tous les nombres impairs contenus dans un tableau d'entiers.
     * 
     * @param array $array Tableau d'entiers
     * @return array Tableau contenant uniquement les valeurs impaires
     */
    public static function getOddValues(array $array): array
    {
        $oddValues = [];

        foreach ($array as $value) {
            if ($value % 2 !== 0) {
                $oddValues[] = $value;
            }
        }

        return $oddValues;
    }
}
