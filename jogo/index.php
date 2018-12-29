<?php
include "head.html";

$array = [
    ["Card"=> 1, "Nome"=> "Minotauro Guerreiro",   "Img"=> "minotauro.jpg", "Atrib1" => 2, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Minotauro Guerreiro",   "Img"=> "minotauro.jpg", "Atrib1" => 2, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Dragão Lendário",   "Img"=> "shen-long.jpg", "Atrib1" => 8, "Atrib2" => 8],
    ["Card"=> 1, "Nome"=> "Elfo da Floresta",   "Img"=> "elfo.jpg", "Atrib1" => 2, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Elfo da Floresta",   "Img"=> "elfo.jpg", "Atrib1" => 2, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Orc Destruidor",   "Img"=> "orc.jpg", "Atrib1" => 5, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Maga Piromante",   "Img"=> "mage.jpg", "Atrib1" => 4, "Atrib2" => 1],
    ["Card"=> 1, "Nome"=> "Ladrão Noturno",   "Img"=> "rogue.jpg", "Atrib1" => 2, "Atrib2" => 4],
    ["Card"=> 1, "Nome"=> "Ladrão Noturno",   "Img"=> "rogue.jpg", "Atrib1" => 2, "Atrib2" => 4],
    ["Card"=> 1, "Nome"=> "Paladino",   "Img"=> "paladino.jpg", "Atrib1" => 4, "Atrib2" => 4],
    ["Card"=> 1, "Nome"=> "Paladino",   "Img"=> "paladino.jpg", "Atrib1" => 4, "Atrib2" => 4],
    ["Card"=> 1, "Nome"=> "Anão da Montanha",   "Img"=> "anao.jpg", "Atrib1" => 1, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Cavaleiro",   "Img"=> "cavaleiro.jpg", "Atrib1" => 1, "Atrib2" => 4],
    ["Card"=> 1, "Nome"=> "Zumbi Errante",   "Img"=> "zumbi.jpg", "Atrib1" => 1, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Zumbi Errante",   "Img"=> "zumbi.jpg", "Atrib1" => 1, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Warlock",   "Img"=> "warlock.jpg", "Atrib1" => 1, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Voltron",   "Img"=> "robo.jpg", "Atrib1" => 3, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Voltron",   "Img"=> "robo.jpg", "Atrib1" => 3, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Hiena Guerreira",   "Img"=> "hiena.jpg", "Atrib1" => 1, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Hiena Guerreira",   "Img"=> "hiena.jpg", "Atrib1" => 1, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Lagarto Guerreiro",   "Img"=> "lagarto.jpg", "Atrib1" => 2, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Lagarto Guerreiro",   "Img"=> "lagarto.jpg", "Atrib1" => 2, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Fortaleza",   "Img"=> "fortaleza.jpg", "Atrib1" => 0, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Fortaleza",   "Img"=> "fortaleza.jpg", "Atrib1" => 0, "Atrib2" => 3],
    ["Card"=> 1, "Nome"=> "Troll da Floresta",   "Img"=> "troll.jpg", "Atrib1" => 2, "Atrib2" => 5],
    ["Card"=> 1, "Nome"=> "Troll da Floresta",   "Img"=> "troll.jpg", "Atrib1" => 2, "Atrib2" => 5],
    ["Card"=> 1, "Nome"=> "Samurai",   "Img"=> "samurai.jpg", "Atrib1" => 3, "Atrib2" => 1],
    ["Card"=> 1, "Nome"=> "Samurai",   "Img"=> "samurai.jpg", "Atrib1" => 3, "Atrib2" => 1],
    ["Card"=> 1, "Nome"=> "Tritão",   "Img"=> "tritao.jpg", "Atrib1" => 3, "Atrib2" => 2],
    ["Card"=> 1, "Nome"=> "Tritão",   "Img"=> "tritao.jpg", "Atrib1" => 3, "Atrib2" => 2],
];


$countArray = count($array);
?>
<div class="bloco-geral">

<?php
for ($i=0; $i < $countArray; $i++) { 
?>
	<div class="bloco-card">
		<div class="bloco-card-interno">
			<div class="title-card">
				<span><?php echo strtoupper($array[$i]["Nome"]) ?></span>
			</div>
			<div class="card-img">
				<img src="imgs/<?php echo $array[$i]["Img"] ?>">
			</div>
			<div class="desc-card">
				<div class="value-left"><img src="imgs/sword.png"></img> <?php echo $array[$i]["Atrib1"] ?></div>
				<div class="value-right"><img src="imgs/shield.png"></img></i><?php echo $array[$i]["Atrib2"] ?></div>
			</div>
		</div>
	</div>	

<?php 
} 
?>




</div>

