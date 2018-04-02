<?php
/*
Реализуйте функцию buildDefinitionList, которая генерирует html список определений (dd) и возвращает получившуюся строку. Аргументы:

    Список определений следующего формата:

    <?php

    $definitions = [
      ['definition1', 'description1'],
      ['definition2', 'description2']
    ];

<?php

$definitions = [
    ['key', 'value'],
    ['key2', 'value2']
];
buildDefinitionList($definitions);
// => '<dl><dt>key</dt><dd>value</dd><dt>key2</dt><dd>value2</dd></dl>';

*/

//Вариант 1

namespace App\Strings;

// BEGIN (write your solution here)
function buildDefinitionList($definitons)
{
    $parts = [];
    foreach ($definitons as $definiton) {
        $parts [] = "<dt>{$definiton[0]}</dt><dd>{$definiton[1]}</dd>";
    }
    $innerValue = implode($parts, '');
    $result = "<dl>{$innerValue}</dl>";
    return $result;
}
// END

//Вариант 2

// BEGIN
function buildDefinitionList(array $definitions)
{
    $parts = [];
    foreach ($definitions as list($definition, $description)) {
        $parts[] = "<dt>{$definition}</dt><dd>{$description}</dd>";
    }
    $innerValue = implode($parts, '');
    $result = "<dl>{$innerValue}</dl>";

    return $result;
}
// END
