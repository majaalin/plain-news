<?php


declare(strict_types=1); 


require __DIR__ . '/data.php';


/**
 * Sort articles by date, newest first
 *
 * @param array $a
 * @param array $b
 * 
 * @return int
 */

function sortArticlesByDate(array $a, array $b) : int {
    return strtotime($b['published_date']) - strtotime($a['published_date']);
}


/**
 * Get name of author from the authors array to use in the article array
 *
 * @param int $articleAuthorId
 * @param array $authors
 * 
 * @return string
 */

function getAuthorsName(int $articleAuthorId, array $authors) : string { 
    foreach ($authors as $author) {
        if ($author['id'] === $articleAuthorId) {
            $name = $author['full_name'];
        }
    }
return $name;
}