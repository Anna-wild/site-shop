<?php
/**
 * Created by PhpStorm.
 * User: OMEN-666
 * Date: 12.05.2018
 * Time: 10:59
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MysqlController extends AbstractController
{
    /**
     * @Route("/")
     */
public function connect(){
    $mysqli = mysqli_init();
    if (!$mysqli) {
        die('mysqli_init завершилась провалом');
    }

    if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
        die('Установка MYSQLI_INIT_COMMAND завершилась провалом');
    }

    if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
        die('Установка MYSQLI_OPT_CONNECT_TIMEOUT завершилась провалом');
    }

    if (!$mysqli->real_connect('localhost', 'root', '', 'myproject')) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

    $categories = array();
    if ($result = $mysqli->query('SELECT * FROM categories')) {
        while($tmp = $result->fetch_assoc()) {
            $categories[] = $tmp;
        }
        $result->close();
    }
    return $this->render("base.html.twig", [$categories]);
}
}