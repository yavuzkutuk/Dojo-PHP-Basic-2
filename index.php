<?php

/**
 * Boucle FOR
 * afficher de 0 à 9 inclus via une boucle
 * afficher de 0 à 10 inclus via une boucle
 * afficher de 1 à 10 inclus via une boucle
 * afficher de 10 à 0 inclus via une boucle
 * afficher de 25 à 50 inclus, tous les 5
 * afficher les valeurs possibles entre 10 à -10, tous les 3
 */
echo '<h2>Boucle FOR</h2>';
echo '<h5>afficher de 0 à 9 inclus via une boucle</h5>';
echo '<ul>';
for ($i=0;$i<=9;$i++){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo'<hr/>';
echo '<h5>afficher de 0 à 10 inclus via une boucle</h5>';
echo '<ul>';
for ($i=0;$i<=10;$i++){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo '<h5>afficher de 1 à 10 inclus via une boucle</h5>';
echo '<ul>';
for ($i=1;$i<=10;$i++){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo '<h5>afficher de 10 à 0 inclus via une boucle</h5>';
echo '<ul>';
for ($i=10;$i>=0;$i--){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo '<h5>afficher de 25 à 50 inclus, tous les 5</h5>';
echo '<ul>';
for ($i=25;$i<=50;$i+=5){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo '<h5>afficher les valeurs possibles entre 10 à -10, tous les 3</h5>';
echo '<ul>';
for ($i=10;$i>=(-10);$i-=3){
    echo '<li>'.$i.'</li>';
}
echo '</ul>';
echo '<h2>Conditions</h2>';
/**
 * Soit $name = 'Darth Vader';
 * test si $name égal "Darth Vader" ou "Darth Sidious", affiche "Sith"
 * sinon si $name égal "Yoda", affiche "Jedi"
 * sinon affiche "sans doute une personne sans pouvoir"
 */
echo '<h5>Soit $name = \'Darth Vader\';</h5>';
$name = 'Darth Vader';

if("Darth Vader"==$name || "Darth Sidious"==$name)
    echo "Sith";
elseif ("Yoda"==$name)
    echo "Jedi";
else
    echo "sans doute une personne sans pouvoir";

/**
 * Soit les valeurs : 'Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'
 * Construire un tableau $jedis (indexé numériquement)
 * Ajouter 'Rey' dans le tableau
 * Afficher le plus expérimenté uniquement
 * Boucler pour afficher tous les jedis
 */
echo '<h2>Tableau indexé</h2>';
$jedis = ['Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
array_push($jedis, 'Rey');
echo '<h5>Afficher le plus expérimenté uniquement</h5>';
echo '<p>'.$jedis[0].'</p>';
echo '<h5>Boucler pour afficher tous les jedis</h5>';
echo '<ul>';
foreach($jedis as $value){
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

/**
 * Créer un tableau en tableau associatif avec le nom en clé et l'age en valeur :

Yoda 900
Leia 19
Luke Skywalker 19
Darth Vader 46
Chewbacca 200
Ajouter Han Solo, 29ans au tableau
Classer le tableau du plus jeune au plus vieux, puis afficher les noms et ages dans une liste HTML
Afficher les noms et ages des personnages par ordre alphabétique dans une liste HTML
Afficher uniquement les personnages ayant plus de 100ans (afficher leur age)
Soit les personnages :

Jedi : Luke Skywalker, Yoda, Windu
Sith: Darth Vader, Darth Maul, Dooku
Gungan : Jar Jar Binks
Human : Han Solo, Leia
Créé un tableau associatif avec le nom des races en clé, et en valeur, un tableau de personnages de cette race

Boucler sur le tableau afin d'afficher les noms de race dans une balise h2, suivi d'une liste pour les noms de cette race
Boucler sur le tableau pour afficher dans une liste, la race et le nombre de personnages de cette race
 */
echo '<h2>Tableau associatif</h2>';
$jedis = ['Yoda'=>900,'Leia'=>19,'Luke Skywalker'=> 19, 'Darth Vader'=> 46, 'Chewbacca' =>200];
$jedis += ['Han Solo'=> 29];
echo'<h5>Classer le tableau du plus jeune au plus vieux, puis afficher les noms et ages dans une liste HTML</h5>';
asort($jedis);
echo'<ul>';
    foreach ($jedis as $key => $value){
        echo '<li>'.$key.' '.$value.'</li>';
    }
echo'</ul>';
echo'<h5>Afficher les noms et ages des personnages par ordre alphabétique dans une liste HTML</h5>';
ksort($jedis);
echo'<ul>';
foreach ($jedis as $key => $value){
    echo '<li>'.$key.' '.$value.'</li>';
}
echo'</ul>';
echo'<h5>Afficher uniquement les personnages ayant plus de 100ans (afficher leur age)</h5>';
echo'<ul>';
foreach ($jedis as $key => $value){
    echo ($value>=100)?'<li>'.$key.' '.$value.'</li>':'';
}
echo'</ul>';
$jedis = [
    'Jedi'=>['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith'=>['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan'=>['Jar Jar Binks'],
    'Human'=>['Han Solo', 'Leia']
];
echo'<h5>Boucler sur le tableau afin d\'afficher les noms de race dans une balise h2, suivi d\'une liste pour les noms de cette race</h5>';
echo'<ul>';
foreach ($jedis as $key => $value){
    echo '<h2>'.$key.'</h2>';
    echo'<ul>';
    foreach ($value as $item){
        echo'<li>'.$item.'</li>';
    }
    echo'</ul>';
}
echo'</ul>';
echo'<h2>Boucler sur le tableau pour afficher dans une liste, la race et le nombre de personnages de cette race</h2>';
echo'<ul>';
foreach ($jedis as $key => $value){
    echo '<p>'.$key.' '.count($value).'</p>';
}
echo'</ul>';