<?php
$start = "index.html";
$start1 = "https://bbc.com/news";
$start2 = "http://wikidemia.info/wiki/Robert_Haubt";

function follow_links($url) {
	
	$doc = new DOMDocument();
	$doc->loadHTML(file_get_contents($url));
	
	$linklist = $doc->getElementsByTagName("a");
	
	foreach ($linklist as $link) {
		echo $link->getAttribute("href")."</br>";
	}
}

follow_links($start2);
?>