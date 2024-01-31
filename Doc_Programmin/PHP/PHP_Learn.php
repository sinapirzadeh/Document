<?php // Start to Learn PHP




// echo 'sina is good boy!';


// varebels ---------------------------------------
$sina = 'sina';
$amir = 'amir';
echo $sina . $amir;
define('name', 'value');
echo name;


// string -----------------------------------------
$name = 'sina pirzadeh';
$age = 19;
$sum = $name . $age . ' is my info';
echo $sum;
echo "hi $name";
echo "hi {$name}";
echo 'hi $name';
echo str_replace('s', 'a', $name);
echo strlen($name);
echo strtolower($name);
echo strtoupper($name);


// number ----------------------------------------
$num = 1;
$num++;
$num--;
$num += 12;
// flote
$flo = 1.23;
echo floor($flo);



// Arrays ---------------------------------------
$pepole_name = ['sara', 'amir', 'ali', 'mahdi'];
$cityes = ['Germy', 'ardabil', 'Thran', 'karaj'];
print_r($pepole_name);

print_r(array_merge($cityes, $pepole_name));
echo $pepole_name[2];

$cityes[1] = 'arbil';
print_r($cityes);

$amir = array_pop($cityes);
echo $amir;



// key value array -------------------------------
$users = [
    "ali" => 1221,
    "kasra" => 3423,
    "mobina" => 53342
];

print_r($users);

$book = [
    [12, 3, 5, 3],
    [12, 3, 5, 3],
    [12, 3, 5, 55],
    [12, 3, 3, 43],
];

echo $book[1][1];


//Condetion - Loops -------------------------------

if (12 === 12) {
    echo 'sina';
} elseif (12 === 13) {
    # code...
    echo 'amir';
}


$names_array = ['sina', 'amir', 'ali', 'ahmad'];

for ($i = 0; $i < count($names_array); $i++) {
    echo $i . '<br>' . $names_array[$i] . '<br>';
}

foreach ($names_array as $name) {
    echo $name . '<br>';
}

while (count($names_array) < 2) {
    echo $names[0];
}




// thernery opertors ----------------------------
$result > 2 ? 'sina' : 'amir';



// include - require ----------------------------
include 'say_ali.php';
require 'say_ali.php';




// xss ataccer ----------------------------
htmlspecialchars($_POST['text']);





// supper global ----------------------------
$_GET['name'];
$_POST['name'];
$_SERVER['SERVER_NAME'];
$_SESSION['name'] = $_GET['user_name'];


// session in php ----------------------------
session_start();
$_SESSION["sina"] = "sina start";
print_r($_SESSION);
// remove all session variables
session_unset();
// destroy the session  
session_destroy();




// cookis ----------------------------
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if (isset($_COOKIE['gender'])) {
    echo $_COOKIE['gendeer'];
}




// date _ time ----------------------------
echo date('y:m:d:H:h:i:s:a');
date_default_timezone_set('iran/tehran');
mktime(12, 2, 3, 4, 5, 6);
strtotime("10:30pm April 15 2014");



// Working whit Files ----------------------------
file_put_contents('sina.txt', 'lorem is very good boy!'); //for create file
unlink('sina.txt'); // for delete file
// for read file
$file = fopen('sina.txt', 'a+');
echo fread($file, filesize($filename));
// for write file
fwrite($sina, 'sina');
// for exist file
if (file_exists('sli.txt'))



    // work whit json ----------------------------
    if (file_exists('file.json')) {
        $file = fopen('file.json', 'a+');
        echo fread($file, filesize($filename));
        // convet to json - array
        $array = json_decode($flie, true);
        $object = json_decode($file);
        // ot array be json
        $sjon = json_encode($array);
    }



// functions ------------------------------------

function say_hello($name)
{
    echo 'Hello ' . $name;
}
say_hello('sina');




// call back function ----------------------------
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map(function ($item) {
    return strlen($item); }, $strings);
print_r($lengths);



// <<<<<<<<<<<<<<<<<<< OOP IN PHP >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Class & objects & OOP
class First
{
    private $sina = '';
    public function __construct($name, $family)
    {
        $this->sina = $name;
        echo $name . $family;
    }

    // this is Getter
    public function seyHello(): string
    {
        return 'hello ' . $this->sina;
    }

    // this is setter
    // public function setName($name){
    //     is_string($name)? strlen($name) > 2? $this->sina = $name:'your name is not valid';
    // }

}
$user1 = new First('sina', 'pirzadeh');
echo $user1->seyHello();




// Inheritance in PHP
final class Fruit
{
    // some code
}

// will result in error
class Strawberry extends Fruit
{
    // some code
}




// PHP - Class Constants
class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}
echo Goodbye::LEAVING_MESSAGE;




// abstract in PHP
abstract class ParentClass
{
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3(): string;
}



// interface in PHP
interface InterfaceName
{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;
}


// namespace in php
// namespace app/controller;
class main
{
    function ali()
    {
        echo 'sina';
    }
}



// trait in PHP
class ali
{
    public function m()
    {
    }
}
trait PHP
{
    public function ms()
    {
    }
}

// class main extends ali {
//     use PHP;
// }

$main = new main();
$main->m();
$main->ms();



// static method and functions
class User_count
{
    private static $count;

    function get_count()
    {
        $this->count .= 1;
    }
}

$u1 = new User_count();
echo $u1->get_count();

$u2 = new User_count();
echo $u2->get_count();


// <<<<<<<<<<<<<<<<<<< SOLID IN PHP >>>>>>>>>>>>>>>>>>>>>>>>>>>>>



// single Responsibility Principle

class User
{

    public function stor()
    {

    }

    public function update()
    {

    }
}

class UserPersint
{

    public function show($id)
    {
        // show view
    }
}





// Open Closed Principle

interface NotifcationInserface
{
    public function send($params);
}


class Telegram implements NotifcationInserface
{
    public function send($params)
    {

    }
}

class SMS implements NotifcationInserface
{
    public function send($params)
    {

    }
}

class Email implements NotifcationInserface
{
    public function send($params)
    {

    }
}

class Notifcation
{
    public function send($type, $params)
    {
        $type->send($params);
    }
}

$notif = new Notifcation();
$notif->send(new Telegram(), ['foo', 'ali']);




// Liskov Substitution Principle

// this rool say : not use parent class function
class F
{
    public function sayAli()
    {
        return "hello Ali";
    }
}

class B extends F
{
    public function sayAli()
    {
        return "hello amir";
    }
}
// >>>>>>>>>>>>>> this is roung code <<<<<<<<<<<<<<<<

// Interface Segregation Principle

interface OnlinePay
{
    public function pay();
    public function callBack();
}

interface OfflinePay
{
    public function pay();
}

class Online implements OnlinePay
{
    public function pay()
    {
    }
    public function callBack()
    {
    }
}

class Offline implements OfflinePay
{
    public function pay()
    {
    }
}



// Dependency Inversion Principle

interface Db
{
    public function connect();
}

class MySql implements Db
{
    public function connect()
    {

    }
}

class MongoDB implements Db
{
    public function connect()
    {

    }
}


class DataBase
{
    private $link;
    public function __construct(Db $db)
    {
        $this->link = $db;
    }
}



class SQLQuery
{

    // <<<<<<<<<<<<<<<<<<< SQL Query >>>>>>>>>>>>>>>>>>>>>>>>>>>>>


    // create db
    // "CREATE DATABASE database_name";


    // create table in db
    // "CREATE TABEL tabal name(values type)";


    // insert data in table
    // "INSERT INTO table_name (username, password)
    // VALUES ('sina', '123321')";


    // delete data in tabel
    // "DELETE FROM food WHERE (user_name='sina')";


    // Update data in table
    // "UPDATE tabel_name
    // SET (name='amir')
    // WHERE userid=1";


    // select from teble
    // "SELECT email FROM food";


    // where in sql
    // "SELECT email FROM food
    // WHERE full_name='sinapirzadeh'";


    // orderby in sql
    // "SELECT * FROM food
    // ORDER BY email ACS";


    // limit in sql
    // "SELECT email FROM food;
    // LIMIT 3";
}