$(document).ready(function(){
	 $("body").delegate(".submit","click",function(event){
      var check=document.getElementsByClassName('ctype');
      var sum=0;
      for (var i = 0; i < check.length; i++) {
        if (check[i].checked===true) {
          sum +=parseInt(check[i].value);
        }
      }
      question(sum);
       $("#total").html(sum);
    })
	function question(a){
    var b=a;
     $.ajax({
         url : "action.php",
         method :"POST",
         data:{update:1,sum:b},
         success : function(data){
         alert(data)
          
         }
      })
   }
  $("body").delegate(".chreport","click",function(){
     $("#chreport").show();
     var pdate=$("#pdate").val();  
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{pdt:1,pdate:pdate},
         success : function(data){
            $('#pdtresult').html(data);
         }
      })
      
    })  
 });