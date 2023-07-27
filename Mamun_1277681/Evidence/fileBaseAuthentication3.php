// Preset authentication status to false
$authorized = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
// Read the authentication file into an array
$authFile = file("/usr/local/lib/php/site/authenticate.txt");
// Search array for authentication match
foreach ($authFile, $line ) {
list($user, $hash) = explode(":", $line);
if ($_SERVER['PHP_AUTH_USER'] == $user &&
password_verify($_SERVER['PHP_AUTH_PW'], trim($hash)))
$authorized = true;
break;
}