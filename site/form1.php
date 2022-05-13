<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form name="frm_dados" action="processa-dados-form.php" method="POST">

        Nome: <input type="text" name="nome" /> <br>
        Idade: <input type="text" name="idade" /> <br>
        Telefone <input type="text" name ="telefone" id="telefone" /> <br>

        
        
        
        Sexo: <br>
        <label for="">Feminino</label>
        <input type="radio" name="sexo" value="feminino" >        
        <label for="">Masculino</label> 
        <input type="radio" name="sexo" value="masculino" > <br>
        
        Interesses:
        <label for="">Java</label>
        <input type="checkbox" name="interesses" value="java">
        <label for="">PHP</label>
        <input type="checkbox" name="interesses" value="php">
        <label for="">HTML/CSS</label>
        <input type="checkbox" name="interesses" value="html">
        <label for="">Javascript</label>
        <input type="checkbox" name="interesses" value="javascript">
        <label for="">Banco de dados</label>
        <input type="checkbox" name="interesses" value="bd"> <br>

        Foto:
        <input type="file" name="arquivoUp" value="foto"> <br>

        <input type="submit" name="btn_enviar" value="Enviar dados"> <br>



    </form>

    
</body>
</html>