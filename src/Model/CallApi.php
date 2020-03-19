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
use App\Controller;

class CallApi{
    private $url;
    
    public function __construct($apiUrl){
        $this->url=$apiUrl;
     }   

    public function getData(){
        $client = HttpClient::create();
        $url = $this->url;
        $response = $client->request("GET",$url);
        $content = $response->toArray();
        return $content;
    }

}