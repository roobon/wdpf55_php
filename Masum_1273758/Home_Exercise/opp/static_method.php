<?php 
// class testClass{
//     public static $count = 0;
//     public static $name="";
//     public static $age="";
//     public static function counter(){
//    return "the static method".My name is".self::$name."His years of old".self::$age;
   
//     }
// }
// testClass::$count=5;

// echo "<br>";
//  testClass::$name="Khayrul Alam Rayan";
//  testClass::$age=30;
// echo testClass::counter();


// class testStatic{
//      public static $count =0;
//      public static $country = "Bangaldesh";
//      public static $district = "Comilla";
//      public static function counter(){
//         echo "It's static counter";
//         echo self::$count++."<br>";
        
//         return "My Country Name is".self::$country."And MY District Name is".self::$district;
//      }
//      static public function information(){
//         return "My Country Name is".self::$country."And MY District Name is".self::$district;
//      }
// }
// testStatic::counter();
// echo "<br>";
//  testStatic::counter();

//  testStatic::counter();

//  testStatic::counter();

//  testStatic::counter();
//  testStatic::counter();
// echo testStatic::counter();
// echo "<br>";
// echo testStatic::information();
// class Course{
//       static $courseName = "PHP professonal";
//      public static function getCourseName(){
       
//      }
// }
// class student extends Course{
//     public static $courseName = " HIGH  LEVEL LANGUAGE JAVASCRIPT";
//     public static function getCourseName(){
       
//     return self::$courseName;
// }
// }
// echo student::getCourseName();


// class Course{
//         public static $courseName = "JavaScript";
//         public static $name = "khayrul Alam Rayan";
//         public static $age  =30;
//         public static $email="email@gamil.com";
//         public static $department ="Management";
//         public static function getName(){
//             $output =" Your Course Name ".static::$courseName;
//          $output .=" You are full Name is ".static::$name;
//           $output.=" You are age ".static::$age;
//           $output .=" you are Email ".static::$email;
//          $output.=" You are Department ".static::$department; 
//          return $output;
//         }
// }
// class Student extends Course{
//     public static $country = "Bangladesh";
//     public static $district = "Comilla";
// }
// echo Course::getName();
// echo "<br>";
// echo Student::getName();
class Course{
    public static $courseName = "PHP Server Language";
    public static function getCourseName(){
        return static::$courseName;
    }
}
class student extends Course{
    public static $courseName="Javascript Loosly Type Language";
}
echo Course::getCourseName();
echo "<br>";
echo student::getCourseName();
?>