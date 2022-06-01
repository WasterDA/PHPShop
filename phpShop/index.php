<?PHP

require 'View/indexView.php';
require 'controllers/controller-one.php';
require 'arrays/arrayrightside.php';

use IndexView\View;
use ControllerOne\ConOne;
use ArraysRSide\ArraysRSide;



$View = new View();
$controller = new ConOne($View);


echo $View->head();
echo $View->header();
echo $View->leftSide();
echo $View->rightSide();

echo $View->footer();



?>


