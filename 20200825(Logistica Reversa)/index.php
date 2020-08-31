<!DOCTYPE  html>
<?php session_start(); $_SESSION["frutas"]=array();?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Logistica reversa</title>
        <script src="jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                   var fruta = $("input[name='fruta']").val();
                    $.get("cadastro.php",{"nomedafruta":fruta}, function(msg){
                        if(msg == "Nova fruta cadastrada"){
                            $("#div_receptora").html($("#div_receptora").html()+"<li>"+fruta+"</li>");
                            $("#ja_registrou").css("color", "green");
                        }else{
                            $('#ja_registrou').css("color", "red");
                        }
                        $("#ja_registrou").html(msg);
                    });
                });
            });
        </script>
    </head>
    <body>
            <input type = "text" id = "campo_fruta" name="fruta"></input>
            <button id="btn">Cadastro Assíncrono</button>
            <hr />
            <span id="ja_registrou"></span>
            <div id="div_receptora"></div>
    </body>
</html>