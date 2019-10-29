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
    <link href="https://fonts.googleapis.com/css?family=Karla|Montserrat|Open+Sans:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="">
        <ul>
            <li>Home</li>
            <li>Article</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </header>
    <main>
        <?php foreach ($articles as $article) : ?>
            <article>
                <div class="content">
                <h2><?php echo $article['title']; ?></h2>
                <img src="<?php echo $article['image']; ?>"  loading="lazy"; alt="<?php echo $article['title']; ?>">
                <ul>
                    <li class="author-name">By: <?php echo getAuthorsName($article['author_id'], $authors);?></li>
                    <li class="published-date"><?php echo $article['published_date']; ?></li>
                </ul>
                <p><?php echo $article['content']; ?></p>
                </div>
                <ul>
                    <li class="like">&#x2764;  <?php echo $article['like_counter']; ?></li>
                </ul>
            </article>
        <?php endforeach ?>
    </main>
</body>