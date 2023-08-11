<?php 
class égua 
{
    public string $cor;
    public int $casco;
    public int $galope;
    public bool $olhos;
    public bool $cabresto;

    public function setCor(string $cor): void
    {
        $this->cor = $cor;
    }

    public function setcasco(int $casco): void 
    {
        $this->casco = $casco;
    }

    public function setgalope(int $galope): void
    {
        $this->galope = $galope;
    }

    public function setolhos(bool $olhos): void
    {
        $this->olhos = $olhos;
    }

    public function setcabresto(bool $cabresto): void
    {
        $this->cabresto = $cabresto;
    }
}
    
