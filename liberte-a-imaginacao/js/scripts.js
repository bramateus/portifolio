/* MÁSCARA DE CAMPOS */
$(document).ready(function () {
    var options = {
        onInvalid: function (val, e, f, invalid, options) {
            var error = invalid[0];
            alert($("#celular").length);
            /*if($("#celular").length < 3) {
                alert("TESTE");
            }*/
        }
    };

    $("#cpf").mask("999.999.999-99");
    $("#fixo").mask("(99) 99999-9999");
    $("#celular").mask("(99) 99999-9999", options);
});

/* EFEITO MOBILE FORMULÁRIO */
$(".efeito").hide();
$("#btn-formulario-a,#btn-formulario-b").click(function () {
    $("#form-box").show();
    $(".efeito").show();
});

$(".btn-close").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();

    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
});

$("#eft").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();
});

/* ENVIO DO FORMULÁRIO */
$("#aguarde").hide();
$('form').submit(function () {
    $("#submit").attr("disabled", "disabled");
    $("#aguarde").show();
    $("#inscreva").hide();
});








$(window).on('mousemove', function(e){
  var w = $(window).width();
  var h = $(window).height();
  
  var offsetX = 0.5 - e.pageX / w;
  var offsetY = 0.5 - e.pageY / h;
  
  console.log('mousemove');
  
  $('.parallax').each(function(i, el){
    var offset = parseInt($(el).data('offset'));
    
    var translate = "translate3d("+ Math.round(offsetX * offset) + "px," + Math.round(offsetY * offset) + "px, 0px";
    
    console.log('each');
    
    $(el).css({
      'transform':translate
    })
  })
})





// convém estar no onload da janela
window.onload = function()
{

  // primeiro tens de sacar a dimensão da janela
  // neste caso a área visível do browser
  var largura = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

  // depois é brincar com if's e colocar o banner que queiras:

  if(largura<=425)
  {

    $('img').remove();
    $('#mobil').append('<img  src="img/conteudo_b.png" class="img-flui ml-2 conteudo-b d-block mx-auto" alt="">');


    
    // mete o banner com mais detalhe
  } else {



    // mete o banner com menos detalhe
  }
} // fim do window.onload