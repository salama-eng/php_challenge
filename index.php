<?php
  $x = 800;
  $y = 250;
   /******$GLOBALS is used to define variables glopally and used them any where ******** */
  function addition() {
    $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
   
  addition();
  echo $sum;

/**      server is super glopal variable that
 *  used to give inforation about the server 
 *  and those some examples  * */
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['HTTP_HOST'];
  echo "<br>";
  echo $_SERVER['HTTP_REFERER'];
  echo "<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];

  echo "<br><br><br>";


/*******          $_REQUEST is a PHP super global variable
 *  which is used to collect data after submitting an HTML form.              ***** */
echo "
<html>
<body>

<form method='post' action='index.php'>
  Name: <input type='text' name='fname'>
  <input type='submit'>
</form>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty ):";
  } else {
    echo $name;
  }
}




echo "<br><br><br>";


/*******      get method               ***** */



echo "
<html>
<body>

<form method='get' action='index.php'>
  Name: <input type='text' name='fname'>
  <input type='submit'>
</form>";


if ($_SERVER["REQUEST_METHOD"] == "get") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty ):";
  } else {
    echo $name;
  }
}


echo "<br><br><br>";

/**********  to store variables in session ********** */

session_start();

// Set session variables
$_SESSION["my name"] = "salama";
print_r($_SESSION);
/**********  to store variables in cookie ********** */
echo "<br><br><br>";
$cookie_name = "user";
$cookie_value = "salama";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Value is: " . $_COOKIE[$cookie_name];


echo "<br><br><br>";