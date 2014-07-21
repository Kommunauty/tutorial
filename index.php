<?php
# ceci un tuto d'exemple à l'utilisation de github

$like = null;

// la function
function secure($text){
	return $texte = htmlentities($text,ENT_QUOTES,'UTF-8');
}

if($like == "love")
{
    echo secure("j'adore Kommunauty,<input type='text' />");
}
else
{
	 echo secure("<a href='#' title='mon site' >j'adore Kommunauty mais je reste sur mon site</a>")
}

?>
