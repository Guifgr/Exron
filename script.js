window.onload = function(){
var url      = window.location.href; 
console.log(url);

    if(url == "http://exron.xyz/?send=1"){
        opentheSwal();
        var audio = new Audio('dice.mp3');
        audio.play();
    }else{
        $("#darken").css("display", "block");
    }

};

function clean() { 
$("#darken").fadeOut("slow");
$("#input").css("display", "block");
$(".QEA").fadeIn("slow");

}



$("#BR").click(function(){
	$(".container").fadeTo("slow", 0);
	$("#email").attr("placeholder", "Email").val("").focus().blur();
	$("#pergunta").attr("placeholder", "Sua pergunta").val("").focus().blur();
	$("#enviar").attr("placeholder", "enviar").val('enviar').focus().blur();
	clean();
});

$("#ES").click(function(){
	$(".container").fadeTo("slow", 0);
	$("#email").attr("placeholder", "correo electronico").val("").focus().blur();
	$("#pergunta").attr("placeholder", "envía tu pregunta").val("").focus().blur();
	$("#enviar").attr("placeholder", "enviar").val('Enviar').focus().blur();
	clean();

});

$("#JP").click(function(){
	$(".container").fadeTo("slow", 0);
	$("#email").attr("placeholder", "メール").val("").focus().blur();
	$("#pergunta").attr("placeholder", "もっと知りたいですか？").val("").focus().blur();
	$("#enviar").attr("placeholder", "enviar").val('送る').focus().blur();
	clean();
});

$("#RU").click(function(){
	$(".container").fadeTo("slow", 0);
	$("#email").attr("placeholder", "по электронной почте").val("").focus().blur();
	$("#pergunta").attr("placeholder", "Хотите узнать больше?").val("").focus().blur();
	$("#enviar").attr("placeholder", "enviar").val('отправить!').focus().blur();
	clean();
});

$("#US").click(function(){
	$(".container").fadeTo("slow", 0);
	$("#email").attr("placeholder", "Email").val("").focus().blur();
	$("#pergunta").attr("placeholder", "Message").val("").focus().blur();
	$("#enviar").attr("placeholder", "enviar").val('GO').focus().blur();
	clean();
});

function opentheSwal() {
       $("#footer").fadeOut("slow");
       swal("∑XRON", "", "success");
       $(".QEA").fadeOut("slow");
       $(".container").remove();
       $(".link").css("display", "none");
       setTimeout(function(){
       font();
       }, 1000);
}

function font(){
  $("#footer").css("font-size", "25px");
  $("#footer").fadeIn("slow");
};
