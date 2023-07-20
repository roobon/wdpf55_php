<?php 

$address = array(
    ["name"=>"Radiq", "phone"=>"015546541", "email"=>"Rafiq@gmail.com"  ],
    ["name"=>"Rashid", "phone"=>"019996332", "email"=>"Rashid@gmail.com"  ],
    ["name"=>"Sadid", "phone"=>"012355561", "email"=>"Sadid@gmail.com"  ],
    ["name"=>"Hadid", "phone"=>"014125645", "email"=>"Hadid@gmail.com"  ],
    ["name"=>"Laden", "phone"=>"0163232132", "email"=>"Laden@gmail.com"  ],
    ["name"=>"Obama", "phone"=>"0155132168", "email"=>"Obama@gmail.com"  ],
    ["name"=>"Salsabil", "phone"=>"013656456", "email"=>"salsabil@gmail.com"  ],
);


$name = array_column($address, "name");
echo "<pre>" ;
print_r($name) ;

echo  $address[2]["name"];

$email = array_column($address ,"email" );
echo "<pre>" ;
print_r($email) ;


?>