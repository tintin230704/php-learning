<?php

/**
 * Cette classe contient un ensemble de fonctions à compléter qui vous permettront de vous permettra de prendre en main les bases de l'algorithmie et du langage PHP.
 * 
 * Pour chacune des fonctions pensez à écrire un pseudo-code qui vous permettra de réfléchir à la logique à implémenter.
 */
class BasicsExercises
{
    /**
     * Fonction qui permet de calculer un taux de participation employeur aux prix des repas (en pourcentage du prix du repas).
     * 
     * Les règles métier sont les suivantes pour le calcul du taux de participation :
     *  - si l’employé·e est célibataire, le taux initial de participation s’élève à 20%.
     *  - dans les autres cas (marié, veuf ou pacsé), son taux initial de participation est porté à 25%.
     * 
     * La participation est majorée de 15 % supplémentaire par enfant.
     *
     * Si le salaire mensuel de l’employé•e est inférieur à 1 800 €, le montant de la participation est majoré de 10%.
     * Le taux de participation reste toutefois plafonné à 50%.
     *
     * @param integer $salary Le salaire d'un employé
     * @param integer $childrenCount Le nombre d'enfants d'un employé
     * @param boolean $single Le status marital de l'employé. true si célibataire, false sinon
     * @return integer Le taux de participation employeur (entier)
     */
    public static function mealParticipationRate(int $salary, int $childrenCount, bool $single): int
    {
        $taux = 0;

        if ($single == true) 
        {
            $taux = 20;
        } else {
            $taux = 25;
        }

        $taux = $taux + ($childrenCount * 15);

        if ($salary < 1800)
            $taux = $taux + 10;

        if ($taux > 50)
            $taux = 50;

        return $taux;
    }

    /**
     * Indique si un nombre entier passé en paramètre est impair.
     *
     * @param integer $i Le nomre à traiter
     * @return boolean true si $i est impair, false sinon
     */
    public static function isOdd(int $i): bool
    {
        if ($i % 2 != 0) {
            return true;
        }
        return false;
    }

    /**
     * Indique si un nombre entier passé en paramètre est pair.
     *
     * @param integer $i Le nomre à traiter
     * @return boolean true si $i est pair, false sinon
     */
    public static function isEven(int $i): bool
    {
        if ($i % 2 == 0) {
            return true;
        }
        return false;
    }
}
