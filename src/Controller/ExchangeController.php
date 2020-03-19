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


class ExchangeController extends AbstractController{
    /**
     * @Route("/exchanges", name="exchanges")
     * @Method("GET")
     */
    public function exchangesList(Request $request){
        $requestData = $request->query->get("page");
        $offset = $requestData == 0 ? 0 : intval($requestData-1) * 50; 
        $getData = new CallApi("https://api.coinranking.com/v1/public/exchanges?offset=".$offset);
        $content = $getData->getData(); 
        
        return $this->render("exchangesList.html.twig",array("data"=>$content["data"]));
    }
   
      /**
     * @Route("/exchange/{exchange}", name="exchange")
     * @Method("GET")
     */
    public function exchange(Request $request){
        $requestData = $request->attributes->get("exchange");
        $exchangeId = explode("+",$requestData)[0];

        $getData = new CallApi("https://api.coinranking.com/v1/public/exchanges");
        $content = $getData->getData(); 
    
    return $this->render("exchange.html.twig",array("data"=>$content["data"]["exchanges"],"exchangeId"=>$exchangeId));
}
    

}