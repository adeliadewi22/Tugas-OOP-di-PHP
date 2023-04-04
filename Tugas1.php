<?php
class product {
public $name;
public $price;
public $discount;
function getPrice(){
return $this->price;
}
function setPrice($price){
    $this->price=$price;
    }
    function getName(){
    return $this->name;
    }
    function setName($name){
    $this->name = $name;
    }
    function getDiscount(){
    return $this->discount;
    }
    function setDiscount($discount){
    $this->discount = $discount;
    }
    }
    /**
    * 
    */
    class CDMusik extends product
    {
    public $artist;
    public $genre;
    function __construct($name="nama", $price="harga", $discount="diskon"){
    }
    function getArtist(){
    return $this->artist;
    }
    function setArtist($artist){
        $this->artist = $artist;
        }
        function getGenre(){
        return $this->genre;
        }
        function setGenre($genre){
        $this->genre = $genre;
        }
        function setPrice($price){
        $this->price = $price;
        }
        function getPrice(){
        $harga = $this->price;
        $ppn = ((10/100) * $this->price);
        $discount = ((5/100) * $this->price);
        return ($harga + $ppn) - $discount;
        }
        function setDiscount($discount){
        $this->discount = $discount;
        }
        }
        /**
        * 
        */
        class CDRack extends product
        {
        public $capacity;
        public $modal;
        function getcapacity(){
            return $this->Capacity;
}
    function setCapacity($capacity){
    $this->capacity = $capacity;
    }

    function getModal(){
    return $this->modal;

    }
    function setModal($modal){
    $this->modal = $modal;
    }

    function setPrice($price){
    $this->price = $price;
    }

    function getPrice(){
    $harga = $this->price;
    $tambahan = ((15 / 100) * $this->price);
    return $harga + $tambahan;
}
}
$beli = new product();
$beli_cdm = new CDMusik();
$beli_cdr = new CDRack();
$beli->setName("CD musik");
$beli->setPrice(650000);
$beli->setDiscount("Discount saat ini : 1. CD Musik = 5% <br/> 2. CD Film = 0% 
(Tidak ada discount)");

    echo "Nama Product : " . $beli->getName() . "<br/>";
    echo "Harga : Rp. " . $beli->getPrice() . ",-<br/>";
    echo $beli->getDiscount() . "<br/><hr/>";
        $beli_cdm->setArtist("FIFTY FIFTY");
        $beli_cdm->setGenre("POP");
        $beli_cdm->setDiscount("5%");
        $beli_cdm->setPrice(650000);

    echo "---SELAMAT DATANG DI CDMUSIK 2023--- <br/>";
    echo "Nama Product : " . $beli->getName() . "<br/>";
    echo "Artis : " . $beli_cdm->getArtist() . "<br/>";
    echo "Genre : " . $beli_cdm->getGenre() . "<br/>";
    echo "Selamat anda mendapatkan Discount Sebesar " . $beli_cdm->getDiscount() . 
"<br/>";
    echo "Total Harga : Rp." . $beli_cdm->getPrice() . ",-<br/>Harga diatas sudah 
    termasuk PPN sebesar 10% dan Discount 5%<br/><br/><hr/>";

$beli_cdr->setCapacity("1500");
$beli_cdr->setModal("Modern");
$beli_cdr->setPrice(250000);

    echo "---SELAMAT DATANG DI CDRack 2023--- <br/>";   
    echo "Judul : " . $beli_cdr->getCapacity() . "<br/>";
    echo "Genre : " . $beli_cdr->getModal() . "<br/>";
    echo "Mohon maaf anda tidak mendapatkan Discount <br/>";
    echo "Total Harga : Rp." . $beli_cdr->getPrice() . ",-<br/>Harga diatas sudah 
    termasuk ppn sebesar 15% dan tidak mendapatkan discount";
?>
