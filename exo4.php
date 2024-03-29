<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php





$capitales = 
[
    "France"=> "Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

// La fonction qui va nous permettre d'afficher les pays avec leur capitales dans le tableau
function afficherTableHTML($capitales)
{

    // On trie le tableau par la clé (Pays)
    asort($capitales);

    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>
                <tbody>";
                
    foreach($capitales as $pays=>$capitale)
    {
        // La fonction mb_strtoupper permet de transformer tout le texte en MAJUSCULES
        // La fonction ucfirst permet de transformer la première lettre en MAJUSCULE
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td> 
                        <td>".ucfirst($capitale)."</td>
                        <td><a href='https://fr.wikipedia.org/wiki/".$capitale."' target='_blank'>Lien</a>
                    </tr>";
    }

    $result .= "</tbody></table>";

    return $result;
}

   echo afficherTableHTML($capitales);

?>