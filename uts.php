<?php
class Kendaraan
{
    private $merk;
    private $harga;
    private $status;
    protected $warna;

    public function __construct($merk, $harga, $status, $warna)
    {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->status = $status;
        $this->warna = $warna;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function bacaMerk()
    {
        return "Kendaraan ini adalah " . $this->merk;
    }

    public function bacaHarga()
    {
        return "Seharga " . $this->harga;
    }

    public function bacaStatus()
    {
        return $this->status;
    }

    public function infoKendaraan()
    {
        echo $this->bacaMerk() . "<br>";
        echo "Jenis kendaraan ini adalah " . get_class($this) . " yang " . $this->bacaStatus() . " dengan warna " . $this->warna . "<br>";
        echo $this->bacaHarga() . "<br>";
    }
}

class Mobil extends Kendaraan
{
    public function __construct($merk, $harga, $status, $warna)
    {
        parent::__construct($merk, $harga, $status, $warna);
        echo "Ini adalah UTS Pemrograman Web 2 Haryanto Riswanda <br>";
    }

    public function bacaWarna()
    {
        return $this->warna;
    }
}

$mobil = new Mobil("Honda", "300 juta", "Mahal", "Hitam");

$mobil->infoKendaraan();

?>