<?php 
class country{
  public $country ="Bangaldesh,Paksitan,maldiv,Nepal,India";
  function getcountry(){
    return $this->country;
  } 
  private $capital ="kulkata,Kathmundo,paris,turkey," ;
  function addcapital(){
    return $this->capital;
  }
}
class anotherCountry extends country{
    function getcountry(){
        return $this->country;
      } 
      function addcapital(){
        return $this->capital;
      }
}
$newCountry=new country();
echo $newCountry->getcountry();
echo "<br>";
echo $newCountry->addcapital();
$anotherCountry=new anotherCountry();
echo "<br>";
echo $anotherCountry->getcountry();


?>