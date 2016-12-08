<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
//use PdoGsb;
class HistoriqueController extends Controller
{
    public function indexAction()
    {
		return $this->render('PgGsbFraisBundle:Historique:historique.html.twig');
     }
  
}
?>