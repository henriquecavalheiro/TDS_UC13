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

        Nome: <input type="text" name="nome" /> <br><br>
        Idade: <input type="text" name="idade" /> <br><br>
        Telefone <input type="text" name ="telefone" id="telefone" /> <br><br>

        
        
        
        Sexo: <br><br>
        <label for="">Feminino</label>
        <input type="radio" name="sexo" value="feminino" >        
        <label for="">Masculino</label> 
        <input type="radio" name="sexo" value="masculino" > <br><br>
        
        Interesses:<br>
        <input type="checkbox" name="interesses[]" value="java">
        <label for="">Java</label><br>
        <input type="checkbox" name="interesses[]" value="php">
        <label for="">PHP</label><br>
        <input type="checkbox" name="interesses[]" value="html">
        <label for="">HTML/CSS</label><br>
        <input type="checkbox" name="interesses[]" value="javascript">
        <label for="">Javascript</label><br>
        <input type="checkbox" name="interesses[]" value="bd">
        <label for="">Banco de dados</label><br>
         <br>

        Foto:
        <input type="file" name="fotoUpload" value="foto"> <br><br>

        <input type="submit" name="btn_enviar" value="Enviar dados"> <br><br>



    </form>

    
</body>
</html>