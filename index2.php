<?php 

class Silnik
{
    private $moc;
    private $moment;
    private $paliwo;

    public function setMoc($moc)
    {
        $this->moc = $moc;
    }

    public function getMoc()
    {
        return $this->moc;
    }

} 

class Auto
{
    private $marka;
    private $model;
    private $silnik;

    public function __construct($marka, $model, $moc)
    {
        $this->marka = $marka;
        $this->model = $model;

        $this->silnik = new Silnik;
        $this->silnik->setMoc($moc);
    }

    public function print()
    {
        print "Parametry samochodu: \n";
        print "Marka: " . $this->marka . "\n";
        print "Model: " . $this->model . "\n";
        print "Moc silnika: " . $this->silnik->getMoc() . "KM";
    }
}

$auto = new Auto ("Syrena", "S-31", 45);
$auto->print();

?>
