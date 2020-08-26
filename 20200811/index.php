<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício Compartilhado</title>
    </head>
    <style>
        #quadrado{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
        }
        #quadrado2{
                border-style:solid;
                border-width:1px;
                width:500px;
                height:500px;
        }

    </style>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        var testa_negrito=0, testa_italico=0, testa_sublinhado=0;
        
       $(document).ready(

                function(){
                    $("#campo").keyup(
                        function(){
                            var texto = $("#campo").val();
                             $("#quadrado2").html(texto);
                        }
                    );

                    $("#negrito").click(
                        function(){
                            
                            if($("#quadrado2").css("font-weight") == "700"){
                                $("#quadrado2").css("font-weight", "400");
                            }
                            else{
                                $("#quadrado2").css("font-weight", "700");
                            } 
                        }
                    );

                    $("#italico").click(
                        function(){
                            console.log($("#quadrado2").css("font-style"));
                            if($("#quadrado2").css("font-style") == "italic"){
                                $("#quadrado2").css("font-style", "normal");
                            }
                            else{
                                $("#quadrado2").css("font-style", "italic");
                            }
                        }
                    )

                    $("#sublinhado").click(
                        function(){
                            console.log($("#quadrado2").css("textDecoration"));
                            var salva =  $("#quadrado2").css("textDecoration");
                            if( salva.charAt(0) == "u"){
                                $("#quadrado2").css ("textDecoration", "none");
                            }else{
                                $("#quadrado2").css ("textDecoration", "underline");
                            }
                        }
                    )
                }
        )

       /* function escreve(){
            document.getElementById("quadrado2").innerHTML=document.getElementById("campo").value;
        }
		function negrito(){

			if(document.getElementById("quadrado2").style.fontWeight == "bold")
			{
				document.getElementById("quadrado2").style.fontWeight = "normal";
			}
			else
			{
				 document.getElementById("quadrado2").style.fontWeight = "bold";
			}

		}
        function italico(){

			if(document.getElementById("quadrado2").style.fontStyle == "italic")
			{
				document.getElementById("quadrado2").style.fontStyle ="normal";
			}
			else
			{
				document.getElementById("quadrado2").style.fontStyle ="italic";
			}
		}
        function sublinhado(){

			if(document.getElementById("quadrado2").style.textDecoration == "underline")
			{
				document.getElementById("quadrado2").style.textDecoration ="none";
			}
			else
			{
				document.getElementById("quadrado2").style.textDecoration ="underline";
			}
		}*/
    </script>
    <body>
        <h3> Exercicio Compartilhado</h3>

        <img src="negrito.png" id="negrito"/>
        <img src="italico.png" id="italico"/>
        <img src="sublinhado.png" id="sublinhado"/>

        <div style = "display: table">
            <div id="quadrado" style = "display: table-cell;">
                <textarea id = "campo" name = "campo" placeholder="Digite aqui" ></textarea>
            </div>

            <div id="quadrado2" style = "display: table-cell;"></div>
        </div>
        <!-- modificação do beluzo-->
        <!--Teste-->
    </body>
</html>
