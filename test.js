


// function showCustomer(str){

//     if(str==" "){
//    document.getElementById('txtHint').innerHTML='';
//     }

//     var xhttp=new XMLHttpRequest();
//     xhttp.onreadystatechange=function(){
//        if(this.readyState==4 && this.status==200){
//          document.getElementById('txtHint').innerHTML=this.responseText;
//        }
//        };
//        xhttp.open('GET','showcustomer.php?q='+str,true);
//        xhttp.send();

//     }


    function validation(str){
      var xhttp=new XMLHttpRequest();
      xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
         document.getElementById('text').innerHTML=this.responseText;
        }
      }

      xhttp.open('GET','serverpage.php?text='+str,true);
      xhttp.send();
      
    }