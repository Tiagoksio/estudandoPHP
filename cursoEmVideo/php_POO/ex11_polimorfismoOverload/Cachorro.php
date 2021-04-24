<?php
require_once "Lobo.php";
class Cachorro extends Lobo {
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
    public function reagirFrase($frase) {
        $frase = strtolower($frase);
        if ($frase == "toma comida" || $frase == "olá") {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    public function reagirHora($hora) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }        
    }
    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar e Latir</p>";            
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
}
