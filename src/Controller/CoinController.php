<?php

namespace App\Controller;
   
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;  

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Psr\Log\LoggerInterface;

use App\Model\CallApi;

class CoinController extends AbstractController{
    
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function coinsList(Request $request){
        $requestData = $request->query->get("page");
        $offset = $requestData == 0 ? 0 : intval($requestData-1) * 50;
        $getData = new CallApi("https://api.coinranking.com/v1/public/coins?offset=".$offset);
        $content = $getData->getData(); 
        // Create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(dirname(__FILE__)."/log.txt", Logger::INFO));
        // // add records to the log
        $log->info($requestData);
        return $this->render("coinsList.html.twig", array("data"=>$content["data"]));
    }

    /**
     * @Route("/coin/{coin}",name="coin")
     * @Method("GET")
     */
    public function coin(Request $request){
        $requestData = $request->attributes->get("coin");
        $coinId = explode("+",$requestData)[0];
        $getData = new CallApi("https://api.coinranking.com/v1/public/coin/".$coinId);
        $content = $getData->getData(); 

        // Create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(dirname(__FILE__)."/log.txt", Logger::INFO));
        // // add records to the log
        $log->info($coinId[0]);
       
       return $this->render("coin.html.twig", array("data"=>$content["data"]["coin"])); 
    }
   
    

}








