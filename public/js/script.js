function quickSearch(){
$(".search-bar").keyup(function(e){
    $query = e.target.value;
    if($query.length===0){
      $("#coins-results").text("");  
      $("#exchanges-results").text("");  
      $("#coins-search-header").text("");  
      $("#exchanges-search-header").text("");   
      $(".search-results").css("display","none");  
    } 
    else{
     $.ajax({
         method:"GET",
         url:"http://localhost/coinwatch/public/search?q="+$query,
         success:function(data){

          // Search result for cryptocurrencies
          let coinsResult = "";
          if(data[0].length>0){
            $("#coins-results").text("");   
            $(".search-results").css("display","block");  
            $("#coins-search-header").text("Cryptocurrencies");
              // Reduce search results to max 4 coins
              const coinsData = data[0].slice(0,4);
                coinsData.forEach(coin=>{
                  coinName = coin[0].replace(" ","").toLowerCase();
                  coinsResult +=  `<div class="coins-item"><a href="http://localhost/coinWatch/public/coin/${coin[1]}+${coinName}">${coin[0]}</a></div>`
                 
                  })
                $("#coins-results").append(coinsResult)  
          }

          // Search result for exchanges
          let exchangesResult = "";
          if(data[1].length>0){
            $("#exchanges-results").text(""); 
              $("#exchanges-search-header").text("Exchanges");
              // Reduce search results to max 2 exchanges
              const exchangesData = data[1].slice(0,2);
                exchangesData.forEach(exchange=>{
                  exchangeName = exchange[0].replace(" ","").toLowerCase(); 
                  exchangesResult += `<div class="exchanges-item"><a href="http://localhost/coinWatch/public/exchange/${exchange[1]}+${exchangeName}">${exchange[0]}</a></div>`
                  })
                $("#exchanges-results").append(exchangesResult)  
            }
          }
        })  
      }
  })
}

quickSearch()


  