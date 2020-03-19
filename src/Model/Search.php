<?php

namespace App\Model;
   
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;  

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Psr\Log\LoggerInterface;

class Search{
    private $data;
    private $query;

    public function __construct($apiData,$searchQuery){
        $this->data=$apiData;
        $this->query=$searchQuery;
    }

    public function filterData(){
        $data = $this->data;
        $query = $this->query;
        $result = array();
        foreach($data as $item){
                $validationData = strtolower(substr($item["name"],0,strlen($query)));
                if($validationData === $query){
                    $result[]=[$item["name"],$item["id"]];
                }
            }
            return $result;
    }    

}