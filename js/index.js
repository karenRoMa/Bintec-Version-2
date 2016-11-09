$(document).ready(function(){
    var flag = false;
    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll>50){
            $("#logo").css("width",["150px"]);
            $("#logo").css("margin-top",["-175px"]);
            $("#logo").css("margin-left",["-515px"]);
        }else{
            $("#logo").css("width",["200px"]);
            $("#logo").css("margin-top",["0px"]);
            $("#logo").css("margin-left",["0px"]);
        }
        if(scroll>80){
             $("#logo").css("visibility",["hidden"]);
             $("#logoNav").css("visibility",["visible"]);
        }else{
            $("#logoNav").css("visibility",["hidden"]);
             $("#logo").css("visibility",["visible"]);
        }
    })
})