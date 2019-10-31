<h1 align="center">
    <br>
    <img src="image/logo.png" alt="Plain News" width="100">
    <br>
        Plain News
    <br>
</h1>

## Assignments

The news feed items should contain:

- Title
- Content
- Author
- Published date
- Like counter _(the number of likes a news feed item has received)_

The news feed author items should contain the following data:
- ID
- Full name

The project should use the following PHP functionality:
- Variables
- Multiple data types
- Arrays
- Functions
- Loops (for, while or foreach)
- Output (echo, print etc.)

## Prerequisites

PHP 7.3.11 installed

## Installation
1. Clone down the project to your computer

    ```
    $ git clone https://github.com/majaalin/plain-news.git
     ```
2. Start a local server in the resources folder in the command line

   ```
    $ php -S localhost:1337
   ```
3. Open the index.php file in your browser

## Testers
- Terese Thulin
- Victor Ljungblad

## Code Reviews
From Oskar Joss
- `index.php:36-49` The foreach loop may be more readable if you first make a list of the different items you would like to print, like $title = article ['title'] etc., and then only print $title in the document itself
- `functions.php:19-20` The usort function was a bit hard to understand. Maybe it’s easier to do like the first example in the PHP documentation

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

