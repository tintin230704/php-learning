<?php

class ArrayExercises {

    /**
     * Compare les valeurs de deux tableaux d'entiers.
     * Attention à bien gérer la différence de taille des tableaux.
     * 
     * Exemple :
     * [1, 2, 3] est égal à [1, 2, 3]
     * [1, 2, 3] n'est pas égal à [3, 44, 2]
     * 
     * @return bool true si les tableaux sont identiques, false sinon.
     */
    public static function compareArray(array $array1, array $array2): bool {

        return true;
    }

    /**
     * Crée un nouveau tableau miroir de celui passé en paramètre.
     * Exemple :
     * [5, 10, 2, 23] en entrée doit donner [23, 2, 10, 5]
     *
     * @param array $toReverse Tableau à traiter
     * @return array Nouveau tableau miroir
     */
    public static function reverseArray(array $toReverse): array {

        return [];
    }

    /**
     * Somme tous les éléments situés aux index impairs.
     * 
     * @param array $array Le tableau à traiter.
     * @return int La somme des éléments.
     */
    public static function sumNumbersAtOddIndex(array $array): int {

        return -1;
    }

    /**
     * Additionne des tableaux 2D d'entiers de même taille (addition matricielle).
     * 
     * Exemple :
     * 5 6      1 2     6 8
     * 4 3   +  4 3  =  8 6
     * 1 2      3 2     4 4
     * 
     * @param array $array1 Premier tableau à additionner
     * @param array $array2 Second tableau à additionner
     * @return array La somme des tableaux à 2 dimensions
     */
    public static function addArrays(array $array1, array $array2): array {
        // TODO compléter le code
        // déclaration du tableau résultat
        $sumArray = [];

        // Indice : faire 2 boucles "for" (avec un "for imbriqué)
        // for () {
        //     for () {
        //     }
        // }

        return $sumArray;
    }

    /**
     * Additionne toutes les lignes d’index impair.
     * 
     * @param array $array Le tableau 2D à traiter.
     * @return int La somme des lignes impaires.
     */
    public static function sumOddLines(array $array): int {
        $result = 0;


        return $result;
    }

    /**
     * Somme des nombres situés sur la diagonale haut-gauche vers bas-droit.
     * 
     * Exemple :
     * 2  1  3
     * 5  6  8
     * 6  5  3
     * 
     * Donne le résultat : 2 + 6 + 3
     * 
     * @param array $toProcess Tableau à traiter.
     * @return int La somme des nombres de la diagonale.
     */
    public static function sumDiagonalNumbers(array $toProcess): int {
        $sum = 0;

        return $sum;
    }

    /**
     * Somme les nombres des bords du tableau.
     * 
     * Exemple :
     * 2  1  3
     * 5  6  8
     * 6  5  3
     * 
     * Résultat :
     * 2 + 1 + 3 (1ère ligne)
     * + 5 + 6 (1ère colonne sans compter le 2)
     * + 8 + 3 (dernière colonne sans compter le 3)
     * + 5 (dernière ligne sans les doublons)
     * 
     * @param array $toProcess Le tableau à traiter.
     * @return int La somme des nombres des bords.
     */
    public static function sumBordersNumbers(array $toProcess): int {


        return -1;
    }


    /**
     * Cherche un mot dans un tableau 2D de caractères et renvoie les positions
     * de sa première et de sa dernière lettre.
     * Le mot peut être écrit horizontalement, verticalement ou en diagonale.
     * 
     * Exemple :
     * 
     *  e f b l p
     *  a m P c i
     *  i v H k p
     *  b w P s q 
     *  l n A m o
     * 
     * Le mot "PHP" est écrit verticalement.
     * Première lettre aux index (1, 2), dernière lettre aux index (3, 2)
     * 
     * Dans ce cas il faudra renvoyer un tableau tel que [[1, 2], [3, 2]]
     * 
     * Dans le cas où le mot n'a pas été retrouvé, la fonction pourra renvoyer [[-1, -1], [-1, -1]]
     * 
     * @param array $array Le tableau 2D à traiter.
     * @param string $toLocate Le mot à localiser.
     * @return array Tableau contenant deux paires [i, j] : début et fin du mot.
     */
    public static function wordSearch(array $array, string $toLocate): array {
        $rows = count($array);
        $cols = count($array[0]);
        $len = strlen($toLocate);

        // Indice
        // pour indiquer l'
        $directions = [
            [0, 1],   // Droite
            [1, 0],   // Bas
            [1, 1],   // Diagonale bas-droite
            [-1, 1],  // Diagonale haut-droite
        ];

        // Mot non trouvé
        return [[-1, -1], [-1, -1]];
    }
}