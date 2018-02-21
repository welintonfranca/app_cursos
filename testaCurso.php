<?php
/**
 * Created by PhpStorm.
 * User: Wélinton
 * Date: 20/02/2018
 * Time: 22:36
 */
include 'vendor\autoload.php';

$c1 = new App\Model\Curso();
$c1->setNome("Banco em 2 horas");
$c1->setValor(150.00);

echo $c1->getNome() . $c1->getValor();


$c1DAO = new App\DAO\CursoDao();
$c1DAO->inserir($c1);
