<?

#Numeric indexed array;
$fruits = array("Mango", "Banana", "Lichi", "Orange", "Apple");
echo "The number of items in fruits array is " . count($fruits);
echo "<pre>";
echo var_dump($fruits);
echo print_r($fruits);
echo "<br>";

$ages = array("Masum"=> 20, "Imran" => 21, "Mizan"=> 22, "Molla"=> 23);

foreach ($ages as $name => $age) {
    echo " The name is " . $name . " & the age is " . $age . "<br>" ;
}
echo PHP_EOL;
//Multidimensional array

$Students = array(
    "Masum"=> array("email"=>"abc@gmail.com", "phone"=> "01798537135"), 
    "Rojoni"=> array("email"=>"xyz@gmail.com", "phone"=>"01911457963"), 
    "Iqbal"=> array("email"=>"pqr@gmail.com", "phone"=> "01521323367"));
print_r($Students);

echo $Students["Iqbal"]["phone"];