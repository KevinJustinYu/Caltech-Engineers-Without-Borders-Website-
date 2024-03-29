<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hannahfan/Documents/MAMP Websites/Caltech-Engineers-Without-Borders-Website-/system/languages/fr.yaml',
    'modified' => 1592452400,
    'data' => [
        'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Erreur : Frontmatter invalide

Path: `%2$s`

**%3$s**

```
%4$s
```
',
        'INFLECTOR_PLURALS' => [
            '/(quiz)$/i' => '\\1zes',
            '/^(ox)$/i' => '\\1en',
            '/([m|l])ouse$/i' => '\\1ice',
            '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
            '/(x|ch|ss|sh)$/i' => '\\1es',
            '/([^aeiouy]|qu)ies$/i' => '\\1y',
            '/([^aeiouy]|qu)y$/i' => '\\1ies',
            '/(hive)$/i' => '\\1s',
            '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
            '/sis$/i' => 'ses',
            '/([ti])um$/i' => '\\1a',
            '/(buffal|tomat)o$/i' => '\\1oes',
            '/(bu)s$/i' => '\\1ses',
            '/(alias|status)/i' => '\\1es',
            '/(octop|vir)us$/i' => '\\1i',
            '/(ax|test)is$/i' => '\\1es',
            '/s$/i' => 's',
            '/$/' => 's'
        ],
        'INFLECTOR_SINGULAR' => [
            '/(quiz)zes$/i' => '\\1',
            '/(matr)ices$/i' => '\\1ix',
            '/(vert|ind)ices$/i' => '\\1ex',
            '/^(ox)en/i' => '\\1',
            '/(alias|status)es$/i' => '\\1',
            '/([octop|vir])i$/i' => '\\1us',
            '/(cris|ax|test)es$/i' => '\\1is',
            '/(shoe)s$/i' => '\\1',
            '/(o)es$/i' => '\\1',
            '/(bus)es$/i' => '\\1',
            '/([m|l])ice$/i' => '\\1ouse',
            '/(x|ch|ss|sh)es$/i' => '\\1',
            '/(m)ovies$/i' => '\\1ovie',
            '/(s)eries$/i' => '\\1eries',
            '/([^aeiouy]|qu)ies$/i' => '\\1y',
            '/([lr])ves$/i' => '\\1f',
            '/(tive)s$/i' => '\\1',
            '/(hive)s$/i' => '\\1',
            '/([^f])ves$/i' => '\\1fe',
            '/(^analy)ses$/i' => '\\1sis',
            '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
            '/([ti])a$/i' => '\\1um',
            '/(n)ews$/i' => '\\1ews'
        ],
        'INFLECTOR_UNCOUNTABLE' => [
            0 => 'équipement',
            1 => 'informations',
            2 => 'riz',
            3 => 'argent',
            4 => 'espèces',
            5 => 'séries',
            6 => 'poisson',
            7 => 'mouton'
        ],
        'INFLECTOR_IRREGULAR' => [
            'person' => 'personnes',
            'man' => 'hommes',
            'child' => 'enfants',
            'sex' => 'sexes',
            'move' => 'déplacements'
        ],
        'INFLECTOR_ORDINALS' => [
            'default' => 'ème',
            'first' => 'er',
            'second' => 'ème',
            'third' => 'ème'
        ],
        'NICETIME' => [
            'NO_DATE_PROVIDED' => 'Aucune date fournie',
            'BAD_DATE' => 'Date erronée',
            'AGO' => 'plus tôt',
            'FROM_NOW' => 'à partir de maintenant',
            'SECOND' => 'seconde',
            'MINUTE' => 'minute',
            'HOUR' => 'heure',
            'DAY' => 'jour',
            'WEEK' => 'semaine',
            'MONTH' => 'mois',
            'YEAR' => 'année',
            'DECADE' => 'décennie',
            'SEC' => 's',
            'MIN' => 'm',
            'HR' => 'h',
            'WK' => 'sem',
            'MO' => 'm',
            'YR' => 'an',
            'DEC' => 'déc',
            'SECOND_PLURAL' => 'secondes',
            'MINUTE_PLURAL' => 'minutes',
            'HOUR_PLURAL' => 'heures',
            'DAY_PLURAL' => 'jours',
            'WEEK_PLURAL' => 'semaines',
            'MONTH_PLURAL' => 'mois',
            'YEAR_PLURAL' => 'années',
            'DECADE_PLURAL' => 'décennies',
            'SEC_PLURAL' => 's',
            'MIN_PLURAL' => 'm',
            'HR_PLURAL' => 'h',
            'WK_PLURAL' => 'sem',
            'MO_PLURAL' => 'mois',
            'YR_PLURAL' => 'a',
            'DEC_PLURAL' => 'décs'
        ],
        'FORM' => [
            'VALIDATION_FAIL' => '<b>La validation a échoué :</b>',
            'INVALID_INPUT' => 'Saisie non valide',
            'MISSING_REQUIRED_FIELD' => 'Champ obligatoire manquant :'
        ],
        'MONTHS_OF_THE_YEAR' => [
            0 => 'Janvier',
            1 => 'Février',
            2 => 'Mars',
            3 => 'Avril',
            4 => 'Mai',
            5 => 'Juin',
            6 => 'Juillet',
            7 => 'Août',
            8 => 'Septembre',
            9 => 'Octobre',
            10 => 'Novembre',
            11 => 'Décembre'
        ],
        'DAYS_OF_THE_WEEK' => [
            0 => 'Lundi',
            1 => 'Mardi',
            2 => 'Mercredi',
            3 => 'Jeudi',
            4 => 'Vendredi',
            5 => 'Samedi',
            6 => 'Dimanche'
        ]
    ]
];
