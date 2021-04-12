<?php
$bookstore=simplexml_load_file("example.xml") or die("Error: Cannot create object");

foreach ($bookstore->xpath('//book') as $book)
echo "Author: " . $book->author . "<br>Title: " . $book->title . "<br>Year: " . $book->year . "<br>Price: " . $book->price . "<br><br>";

?>