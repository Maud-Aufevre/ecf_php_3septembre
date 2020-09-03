$(document).ready(function(){
    console.log("coucou");
    $("#corpsPage").html("<h2>Ca marche</h2>");


    $.ajax({
        url:"api_recherche.php",
        type: 'GET',
        success:function(result1){
            if(result1 != ""){
                        // console.log(result);
            let response1=JSON.parse(result1);
            console.log(response1);
            traitement1(response1);
            }else{
                $.ajax({
                    url:"api.php",
                    type: 'GET',
                    success:function(result){
                    // console.log(result);
                    let response=JSON.parse(result);
                    console.log(response);
                    traitement(response);
                    },
                    error:function(error){
                        console.log(error);
                    }
                });
            }
        },
        error:function(error1){
            console.log(error1);
        }
    });

    function traitement(resultats){
        let articles = "";
        for(const art of resultats){
            articles +=  `<a href=detail_article.php?id=${art.Id}><article>
                                <div class="continent">${art.Id_continent}</div>
                                <div class="image">
                                    <img src=../assets/images/${art.Image} alt=${art.Visuel}/>
                                </div>
                                <ul class="légende">
                                    <li class="pays">${art.Pays}</li>
                                    <li class="typeTrip">${art.Type_trip}</li>
                                    <li class="auteur">- par  ${art.Auteur}  -</li>
                                    <li class="récit">${art.Recit}</li>
                                </ul> 
                        </article></a>`;

        } 
        
        
    $("#corpsPage").html(articles);

    $("article").each(function() {
        console.log(this);
        let Id_cont = $(this.firstChild)[0].nextSibling.innerText;
        console.log(Id_cont);
        if(Id_cont == "3"){
            $(this).addClass('afrique');
        }else if(Id_cont == "4"){
            $(this).addClass('asie');
        }else if(Id_cont == "1"){
            $(this).addClass('europe');
        }else if(Id_cont == "2"){
            $(this).addClass('oceanie');
        }else{
            $(this).addClass('amerique');
        }
      });
    }


    function traitement1(resultats){
        let articles = "";
        for(const art of resultats){
            articles +=  `<a href=detail_article.php?id=${art.Id}><article>
                                <div class="continent">${art.Id_continent}</div>
                                <div class="image">
                                    <img src=../assets/images/${art.Image} alt=${art.Visuel}/>
                                </div>
                                <ul class="légende">
                                    <li class="pays">${art.Pays}</li>
                                    <li class="typeTrip">${art.Type_trip}</li>
                                    <li class="auteur">- par  ${art.Auteur}  -</li>
                                    <li class="récit">${art.Recit}</li>
                                </ul> 
                        </article></a>`;

        } 
        
        
    $("#corpsPage").html(articles);

    $("article").each(function() {
        console.log(this);
        let Id_cont = $(this.firstChild)[0].nextSibling.innerText;
        console.log(Id_cont);
        if(Id_cont == "3"){
            $(this).addClass('afrique');
        }else if(Id_cont == "4"){
            $(this).addClass('asie');
        }else if(Id_cont == "1"){
            $(this).addClass('europe');
        }else if(Id_cont == "2"){
            $(this).addClass('oceanie');
        }else{
            $(this).addClass('amerique');
        }
      });
    }


   
    

});