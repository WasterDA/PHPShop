<?PHP

require 'View/indexView.php';
require 'Controller/ViewController.php';
require 'arrays/arrayrightside.php';

use IndexView\View;
use ViewController\Controller;
use ArraysRSide\ArraysRSide;



$View = new View();
$controller = new Controller($View);
$array = new ArraysRSide();

echo $View->head();
echo $View->header();
echo $View->leftSide();
echo $View->rightSide();
echo $View->footer();



?>


