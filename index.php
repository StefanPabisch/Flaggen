<?php
class Flag{
    var $Bezeichnung;
    var $Farbe;
    var $Form;
    var $Flaecheninhalt;

    public function __construct(string $Bezeichnung, string $Farbe, string $Form, string $Flaecheninhalt){
        $this -> Bezeichnung = $Bezeichnung;
        $this -> Farbe = $Farbe;
        $this -> Form = $Form;
        $this -> Flaecheninhalt = $Flaecheninhalt;
    }

    public function __toString() : string{
        return "-Bezeichnung: ".$this -> Bezeichnung.", -Farbe: ".$this -> Farbe.", -Form: ".$this -> Form.", -Flaecheninhalt: ".$this -> Flaecheninhalt;
    }
}

$Kapital = new Flag("Kapitalismus Flagge", "Gelb, Schwarz", "Dreieck", "200 cm^2");
$Pirat = new Flag("Piratenflagge", "Schwarz", "Dreieck", "300 cm^2");
$Polen = new Flag("Polnische Flagge", "Weiß, Rot", "Rechteck", "5000 cm^2");
$Ungarn = new Flag("Ungarische Flagge", "Rot, Weiss, Grün", "Rechteck", "5000cm^2");
$Rot = new Flag("Rotes Quadrat", "Rot", "Quadrat", "10000 cm^2");
$Blau = new Flag("Blaues Quadrat", "Blau", "Quadrat", "100 cm^2");

echo $Kapital."<br>";
echo $Pirat."<br>";
echo $Polen."<br>";
echo $Ungarn."<br>";
echo $Rot."<br>";
echo $Blau."<br>";