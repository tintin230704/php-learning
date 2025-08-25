<?php

/**
 * Cette classe contient un ensemble de fonctions à compléter qui vous permettront de vous entraîner à l'utilisation de boucles.
 * 
 * Pour chacune des fonctions pensez à écrire un pseudo-code qui vous permettra de réfléchir à la logique à implémenter.
 */
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
        // variable qui contiendra le résultat
        $estimatedSubscribers = 0;

        // Indice : pour arrondir un entier il vous est possible d'utiliser la fonction "round" (https://www.php.net/manual/en/function.round.php)
        return $estimatedSubscribers;
    }

    /**
     * Calcule et retourne la factorielle d’un nombre donné.
     * Exemple : factorial(5) retourne 120 (car 5 × 4 × 3 × 2 × 1)
     * Utiliser une boucle for.
     * 
     * Plus d'informations sur le factorielle : https://fr.wikipedia.org/wiki/Factorielle
     * 
     * Pensez à écrire le pseudo-code avant d'écrire la fonction PHP
     *
     * @param int $n Le nombre dont on veut calculer la factorielle
     * @return int La factorielle de $n
     */
    function factorial($n): int
    {
        // TODO : Utiliser une boucle for pour calculer la factorielle

        return 0;
    }

    /**
     * Retourne la somme des chiffres d’un nombre entier positif.
     * 
     * Exemple :
     * pour l'entier 123 la somme est 1 + 2 + 3 soit 6
     * 
     * Indice : utiliser une boucle "while"
     *
     * @param int $n Le nombre à analyser
     * @return int La somme de ses chiffres
     */
    public static function sumDigits(int $n): int
    {
        // variable qui contiendra le résultat
        $sum = 0;
        
        // Indice il est possible de retrouver le chiffre le plus à droite (par exemple 3 pour 123) en récupérant le reste de la divisio par 10
        // L'opérateur permettant de calculer le reste est le modulo (%)
        // Par exemple : 123 % 10 retourne 3
        // puis 12 % 10 retoure 2
        // ...

        return $sum;
    }
}
