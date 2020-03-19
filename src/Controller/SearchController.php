<?php

namespace App\Controller;
   
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;  

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Psr\Log\LoggerInterface;

use App\Model\CallApi;
use App\Model\Search;


class SearchController extends AbstractController{
    /**
     * @Route("/search", name="search")
     * @Method("GET")
     */
    public function search(Request $request){
        $query = $request->query->get("q");

        // Search for coins 
        $getCoinsData = new CallApi("https://api.coinranking.com/v1/public/coins");
        $coinsResponse = $getCoinsData->getData(); 
        $dataCoins = new Search($coinsResponse["data"]["coins"],$query);
        $returnedCoins = $dataCoins->filterData();

        // Search for exchanges
        $getExchangesData = new CallApi("https://api.coinranking.com/v1/public/exchanges");
        $exchangesResponse = $getExchangesData->getData();  
        $dataExchanges = new Search($exchangesResponse["data"]["exchanges"],$query);
        $returnedExchanges = $dataExchanges->filterData();
        
        $searchResults = array($returnedCoins,$returnedExchanges);
        
        if($request->isXMLHttpRequest()){
            return new JsonResponse($searchResults);
        };

         // Create a log channel
         $log = new Logger('name');
         $log->pushHandler(new StreamHandler(dirname(__FILE__)."/log.txt", Logger::INFO));
         // // add records to the log
         $log->info(json_encode($searchResults));

         return new Response("No Ajax");
}
    

}