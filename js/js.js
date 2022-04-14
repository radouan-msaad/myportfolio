function ajax(url){
 $.ajax({
  url:"pages/"+url+".html",
  success:function(res){
     $(".info").html(res);
  },
  error:function(xhr,type,err){
     $(".info").html(type+':'+err);
  },
   beforeSend:function(){
     $(".info").html('<img src="images/charg9.gif" style="height:100px;width:100px;margin-left:30%;">');
   }
});
}
function moreAM(){
	ajax("about");
}
$.fn.isValid = function(){
	let k=true;
	$(this).each(function(){
		if(!this.checkValidity())
			k=false;
	});
	return k;
}
$(document).ready(function(){

ajax("info");
$(".skills a").click(function(){
	ajax("skills");
});
$(".portfolio").click(function(){
	ajax("info");
});
$(".works a").click(function(){
	ajax("works");
});

$(".about a").click(function(){
	ajax("about");
});
$(".contact a").click(function(){
	ajax("contact");
});


});
