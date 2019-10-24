<?php

declare(strict_types=1); 

require __DIR__ . '/data.php';

/**
*
* Sort articles by date
*
*@param array $a
*@param array $b
*
*@return int
*
*/

function sortArticlesByDate(array $a, array $b) : int
{
    return strtotime($b['published_date']) - strtotime($a['published_date']);
}



function getAuthorsName($articleAuthorsId, $authors) {
foreach ($authors as $author) {
    if ($author['id'] === $articleAuthorsId) {
        $name = $author['full_name'];
    }
}
return $name;
}