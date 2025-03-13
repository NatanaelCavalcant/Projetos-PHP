<?php 

$frases = [
    1 => "É importante agradecer pelo hoje sem nunca desistir do amanhã!", 
    2 => "Se expressarmos gratidão pelo que temos, teremos mais pelo que expressar gratidão", 
    3 => "Um dia sem treinar é um dia longe do seu sonho", 
    4 => "Lute. Acredite. Conquiste. Perca. Deseje. Espere. Alcance. Invada. Caia. Seja tudo o quiser ser, mas, acima de tudo, seja você sempre."
];

echo <<< MOTIVAR
    \u{2600} A Frase do dia é:    

MOTIVAR;

$numerosAleatorios = rand(1, 4);

echo $frases[$numerosAleatorios];

?>