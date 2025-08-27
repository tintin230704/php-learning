<?php

class StringExercises
{
    /**
     * Compte le nombre de caractères de la chaîne.
     * 
     * @param string $str Chaîne à traiter
     * @param string $c Caractère à compter (un seul caractère)
     * @return int Nombre de caractères comptés
     */
    public static function countChar(string $str, string $c): int
    {
        // Il est possible d'accéder à un caractère d'une chaîne en utilisant les crochets
        // Par exemple, pour la chaîne déclarée comme suit :
        // $test = "bonjour";
        // il est possible d'obtenir la première lettre ('b') avec la syntaxe $test[0]

        // une comparaison de caractères peut se faire avec l'opérateur === 
        // ainsi, il est possible d'utiliser $str[$i] === $c
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++); {
            if ($str[$i] === $c) {
                $count++;
            }
        }
        return $count;
        return -1;
    }


    /**
     * Compte le nombre de caractères minuscules.
     * 
     * @param string $str Chaîne à traiter
     * @return int Nombre de minuscules
     */
    public static function countLowerCase(string $str): int
    {
        // TODO trouver une solution en utilisant une boucle et l'utilisation d'une fonction telle que ctype_lower
        // (plus d'informations sur ctyp_lower ici https://www.php.net/manual/en/function.ctype-lower.php)
        for ($i = 0; $i < strlen($str); $i++); {
            if (ctype_lower($str[$i])) {
                return 1;
            }
        }
        return 0;
        return -1;
    }

    /**
     * Renvoie le miroir d'une chaîne.
     * 
     * Exemple :
     * pour la chaîne "bonjour" la fonction doit retourner la chaîne "ruojnob"
     * 
     * Il vous est demandé de trouvé une solution basée sur l'utilisation de boucles (et non pas une méthode PHP)
     * 
     * Pour construire une nouvelle chaîne de caractères, pensez à l'opérateur de concaténation (https://www.lephpfacile.com/cours/5-concatener-deux-chaines)
     * 
     * @param string $str Chaîne à traiter
     * @return string Chaîne en miroir
     */
    public static function mirrorString(string $str): string
    {
        $result = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $result .= $str[$i];
        }
        return $result;
        return "";
    }

    /**
     * Insère une chaîne dans une autre.
     * 
     * Exemple :
     * pour les paramètres suivants
     * str = "Helloall"
     * toInsert = " and welcome, "
     * index = 5
     * 
     * nous donnerait "Hello and welcome, all"
     * 
     * Des cas particuliers sont à prévoir :
     * 1. index > longueur => ajout à la fin
     * 2. index négatif => renvoie la chaîne originale
     * 3. insertion en début de chaîne
     * 
     * @param string $str Chaîne à traiter
     * @param string $toInsert Chaîne à insérer
     * @param int $index Position d'insertion
     * @return string Nouvelle chaîne avec insertion
     */
    public static function insertString(string $str, string $toInsert, int $index): string
    {
        // Indice : en premier lieu vous pouvez créer une chaîne de caractères $result qui contiendra la chaîne finale

        // travailler avec des boucles "for" ou "while"
        if ($index < 0) {
            return $str;
        }
        if ($index > strlen($str)) {
            return $str . $toInsert;
        }
        $result = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($i == $index) {
                $result .= $toInsert;
            }
            $result .= $str[$i];
        }
        return $result;
        return "";
    }

    /**
     * Vérifie si une chaîne est en camelCase.
     * 
     * @param string $str Chaîne à vérifier
     * @return bool true si camelCase, sinon false
     */
    public static function isCamelCaseCompliant(string $str): bool
    {
        if (ctype_lower($str[0])) {
            for ($i = 1; $i < strlen($str); $i++) {
                if (!ctype_lower($str[$i]) && !ctype_upper($str[$i]) && !is_numeric($str[$i])) {
                    return false;
                }
                if (ctype_upper($str[$i]) && ctype_upper($str[$i - 1])) {
                    return false;
                }
            }
            return true;
        }
        return false;

    /**
     * Convertit une chaîne en camelCase (sans caractères non alphanumériques).
     * Plus d'informations sur le camelCase : https://en.wikipedia.org/wiki/Camel_case
     * 
     * @param string $str Chaîne à transformer
     * @return string Chaîne transformée en camelCase
     */
    public static function camelCaseConverter(string $str): string
    {
        return $str;
    }
    /**
     * Extrait une sous-chaîne d'une chaîne source donnée.
     * 
     * Cette fonction retourne la portion de chaîne comprise entre l'index de début `$start` et l'index de fin `$end` inclus.
     * 
     * Les index sont basés sur une numérotation commençant à 0.
     * 
     * Par exemple, pour la chaîne "Bonjour" :
     * - subString("Bonjour", 0, 2) retourne "Bon"
     * - subString("Bonjour", 2, 4) retourne "njo"
     * 
     * Si `$start` est supérieur à `$end` ou en dehors des bornes de la chaîne, la fonction devra renvoyer une chaîne vide.
     * 
     * Il vous est demandé de trouver une solution en utilisant des boucles et non pas des méthodes PHP natives.
     * 
     * @param string $str Chaîne source
     * @param int $start Index début
     * @param int $end Index fin (inclus)
     * @return string Sous-chaîne extraite
     */
    public static function subString(string $str, int $start, int $end): string
    {
        return "";
    }

    /**
     * Vérifie si une chaîne contient une sous-chaîne, sans tenir compte de la casse.
     * 
     * @param string $str Chaîne à traiter
     * @param string $toLocate Sous-chaîne à chercher
     * @return bool true si contient, sinon false
     */
    public static function contains(string $str, string $toLocate): bool
    {
        return false;
    }

    /**
     * Vérifie si la chaîne est une phrase correcte (plusieurs mots, majuscule initiale, ponctuation finale).
     * 
     * @param string $str Chaîne à traiter
     * @return bool true si phrase correcte, sinon false
     */
    public static function checkIfCorrectSentence(string $str): bool
    {
        return false;
    }

    /**
     * Transforme une phrase en tableau de mots (sans ponctuation).
     * 
     * @param string $str Phrase à traiter
     * @return array Tableau de mots (string[])
     */
    public static function convertSentenceIntoArray(string $str): array
    {
        return [];
    }

    /**
     * Trouve tous les indices de début des sous-chaînes dans la chaîne.
     * 
     * @param string $str Chaîne source
     * @param string $toLocate Sous-chaîne à chercher
     * @return array Tableau d'entiers (indices)
     */
    public static function findSubStrings(string $str, string $toLocate): array
    {
        return [];
    }

    /**
     * Répète une chaîne avec un séparateur.
     * 
     * @param string $toRepeat Chaîne à répéter
     * @param int $repeatCount Nombre de répétitions
     * @param string $separator Séparateur entre répétitions (un caractère)
     * @return string Chaîne répétée
     */
    public static function repeatString(string $toRepeat, int $repeatCount, string $separator): string
    {
        return "";
    }

    /**
     * Convertit une chaîne RGB en tableau d'entiers.
     * 
     * @param string $toProcess Chaîne de la forme rgb(r,g,b)
     * @return array Tableau de 3 entiers
     */
    public static function rgbStringToIntArray(string $toProcess): array
    {
        return [0, 0, 0];
    }

    /**
     * Formate un numéro de téléphone en ajoutant un préfixe.
     * 
     * @param string $phoneNumber Numéro format classique
     * @param string $prefix Préfixe à ajouter
     * @return string Numéro formaté
     */
    public static function formatPhoneNumber(string $phoneNumber, string $prefix): string
    {
        return "";
    }
}

        }