<?php 

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

// Sort articles by date

usort($articles, 'sortArticlesByDate');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:400,600&display=swap" rel="stylesheet">    <title>Document</title>
</head>
<body>
    <header>
        <img class="logo" src="logo.png" alt="logo">
        <div class='search'>
        <input type="text" placeholder="Search..">
        <button><img src="search.png" alt="search"></button>
        </div>
        <img src="hamburger.png" alt="menu">
    </header>
    <main>
        <?php foreach ($articles as $article) : ?>
            <article>
                <h2><?php echo $article['title']; ?></h2>
                <img src="<?php echo $article['image']; ?>"  loading="lazy"; alt="<?php echo $article['title']; ?>">
                <p><?php echo $article['content']; ?></p>
                <ul>
                    <li class="author-name"><?php echo getAuthorsName($article['author_id'], $authors);?></li>
                    <li class="published-date"><?php echo $article['published_date']; ?></li>
                    <li class="like">
                        <div class="number"><?php echo $article['like_counter']; ?></div>
                    </li>
                </ul>
            </article>
        <?php endforeach ?>
    </main>
</body>
</html>
