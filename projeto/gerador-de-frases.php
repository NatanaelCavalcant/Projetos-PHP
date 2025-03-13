<?php 

//criando um array e atribuindo numeros como indentificadores para as frases 
$frases = [
    1 => "É importante agradecer pelo hoje sem nunca desistir do amanhã!", 
    2 => "Se expressarmos gratidão pelo que temos, teremos mais pelo que expressar gratidão", 
    3 => "Um dia sem treinar é um dia longe do seu sonho", 
    4 => "Lute. Acredite. Conquiste. Perca. Deseje. Espere. Alcance. Invada. Caia. Seja tudo o quiser ser, mas, acima de tudo, seja você sempre."
];

//isso é um Heredoc, não é muito usado, mas usei por conta da aula do Guanabara que vi hoje
echo <<< MOTIVAR
    \u{2600} A Frase do dia é:    

MOTIVAR;

//variável que vai receber o rand e o rand vai mostrar número entre 1 e 4
$numerosAleatorios = rand(1, 4);

//atribuindo os números do rand aos números do array
echo $frases[$numerosAleatorios];

?>