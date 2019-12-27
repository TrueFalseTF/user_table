//механика корзины на сотроне клиента



function CLIENT_changing_user_basket(id, sign) {
    if(sign === "add") {        
        document.getElementById(id).innerHTML = 
            Number.parseInt(document.getElementById(id).innerHTML) + 1;
        
        document.getElementById("in_total_basket").innerHTML = 
            Number.parseInt(document.getElementById("in_total_basket").innerHTML) + 1;

        document.getElementById("in_total_price").innerHTML = 
            Number.parseInt(document.getElementById("in_total_price").innerHTML) + 
            Number.parseInt(document.getElementById("price_"+id).innerHTML);
    } else if (sign === "subtract" && document.getElementById(id).innerHTML != 0) {
        document.getElementById(id).innerHTML = 
            Number.parseInt(document.getElementById(id).innerHTML) - 1; 
            
        document.getElementById("in_total_basket").innerHTML = 
            Number.parseInt(document.getElementById("in_total_basket").innerHTML) - 1;

        document.getElementById("in_total_price").innerHTML = 
            Number.parseInt(document.getElementById("in_total_price").innerHTML) - 
            Number.parseInt(document.getElementById("price_"+id).innerHTML);
    }
    
} 

function CLIENT_clean_user_basket(pop, id_elements_cleaned) {
    for(i=1; i <= pop; i++){
        if(id_elements_cleaned) {
            var i_s = id_elements_cleaned+i;
            if(null != document.getElementById(i_s)) {
                document.getElementById(i_s).innerHTML = "";
            }            
        } else {
            var i_s = ""+i;        
            document.getElementById(i_s).innerHTML = "0";
        }
    }

    document.getElementById("in_total_basket").innerHTML = "0";
    document.getElementById("in_total_price").innerHTML = "0";
}

function clean_user_basket() {

    var URL = "index.php";
            
    var get_request = URL + "?clean_basket";
        
    var xhr = getXmlHttp();
    xhr.open("GET", get_request, true);
        
    xhr.send(null);
    console.log("determination().Открыт ассинхронный XMLHttpRequest запрос. ");		
            
    var timerId = setTimeout(function check_execution() {
        if (xhr.readyState == 4) {	console.log("determination().Состояние XMLHttpRequest запроса - 4. ");				
            if(xhr.status == 200) {	console.log("determination().Получен статус соединения 200. ");
                xhr.abort();
                xhr = 0;
                console.log("determination().XMLHttpRequest запрос закрыт следующая команда - return. ");
                return;					
            }
        }
        timerId = setTimeout(check_execution, 10);
    }, 10);    

}

function changing_user_basket(id, sign) {

    var URL = "index.php";
            
    var get_request = URL + "?changing_user_basket=changing&id=" + escape(id) + "&sign=" + escape(sign);
        
    var xhr = getXmlHttp();
    xhr.open("GET", get_request, true);
        
    xhr.send(null);
    console.log("determination().Открыт ассинхронный XMLHttpRequest запрос. ");		
            
    var timerId = setTimeout(function check_execution() {
        if (xhr.readyState == 4) {	console.log("determination().Состояние XMLHttpRequest запроса - 4. ");				
            if(xhr.status == 200) {	console.log("determination().Получен статус соединения 200. ");
                xhr.abort();
                xhr = 0;
                console.log("determination().XMLHttpRequest запрос закрыт следующая команда - return. ");
                return;					
            }
        }
        timerId = setTimeout(check_execution, 10);
    }, 10);    
}

function sending_emeil() {

    var URL = "index.php";
            
    var get_request = URL + "?sending_emeil";
        
    var xhr = getXmlHttp();
    xhr.open("GET", get_request, true);
        
    xhr.send(null);
    console.log("determination().Открыт ассинхронный XMLHttpRequest запрос. ");		
            
    var timerId = setTimeout(function check_execution() {
        if (xhr.readyState == 4) {	console.log("determination().Состояние XMLHttpRequest запроса - 4. ");				
            if(xhr.status == 200) {	console.log("determination().Получен статус соединения 200. ");
                xhr.abort();
                xhr = 0;
                console.log("determination().XMLHttpRequest запрос закрыт следующая команда - return. ");
                return;					
            }
        }
        timerId = setTimeout(check_execution, 10);
    }, 10); 
}



function getXmlHttp() {
    var xmlhttp;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } 	catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
  }
  console.log("Создан объект XMLHttpRequest.");
    return xmlhttp;
}