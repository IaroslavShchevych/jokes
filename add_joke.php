<?php
/* Wyszukiwanie za słowem kłuczowym */

include "db_connect.php";
$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

//echo $keywordfromform;
//Początek odbioru danych z tabeli
echo "<h2>Trying to add a new joke: $new_joke_question and $new_joke_answer </h2>";

$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "search_all_jokes.php";

?>

<a href="index.php"> Return to main page </a>
