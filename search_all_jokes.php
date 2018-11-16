<?php

//Gdy są jakiekolwiek znaczenia w tabele, pokaż ich jedną za raz.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

//Początek odbioru danych z tabeli
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "JokesID: " . $row["JokeID"]. " Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
//Koniec odbioru danych z tabeli i pokazu ich 

?>
