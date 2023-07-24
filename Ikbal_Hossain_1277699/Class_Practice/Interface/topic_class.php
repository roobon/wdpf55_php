
02
03
04
05
06
07
08
09
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
<?php
class Member implements Persistable {
  private $username;
  private $location;
  private $homepage;
  public function __construct( $username, $location, $homepage ) {
    $this->username = $username;
    $this->location = $location;
    $this->homepage = $homepage;
  }
  public function getUsername() {
    return $this->username;
  }
  public function getLocation() {
    return $this->location;
  }
  public function getHomepage() {
    return $this->homepage;
  }
  public function save() {
    echo "Saving member to database<br>";
  }
  public function load() {
    echo "Loading member from database<br>";
  }
  public function delete () {
    echo "Deleting member from database<br>";
  }
}
?>