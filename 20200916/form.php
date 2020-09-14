<!DOCTYPE  html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> </title>
        <style>
			input{
                height:20px;
                color:DarkCyan;
                
			};
		</style>
        <script src="jquery-3.3.1.min.js"></script>
        <script>
        $(document).ready(function() {
            function RESET_CEP() {
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estadi").val("");
            }
            $("#cep").blur(function() {
                var cep = $(this).val().replace(/\D/g, '');
                if (cep != "") {
                    var Valida_CEP = /^[0-9]{8}$/;
                    if(Valida_CEP.test(cep)) {
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                $("#numero").focus();
                            }
                            else {
                                RESET_CEP();
                                alert("CEP não encontrado.");
                            }
                        });
                    }
                    else {
                        RESET_CEP();
                        alert("Formato de CEP inválido.");
                    }
                }
                else {
                    RESET_CEP();
                }
            });
        });
    </script>
    </head>
    <body>
		<form method="get" action=".">
			<input name="cep" type="text" id="cep" placeholder = "CEP" /> <br />
			<input name="endereco" type="text" id="endereco" placeholder = "endereco" disabled=""/> <br />
			<input name="bairro" type="text" id="bairro" placeholder = "Bairro" disabled=""/> <br />
			<input name="cidade" type="text" id="cidade" placeholder = "Cidade" disabled=""/> <br />
			<input name="estado" type="text" id="estado" placeholder = "Estado" disabled=""/> <br/>
            <input name="numero" type="text" id="numero" placeholder = "Numero"/> <br/>
		</form>
    </body>
</html>