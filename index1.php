<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="accueil1.php">
    <div id="particle-canvas">
        <h1><span style="padding-left: 50px;">Remplir les informations sur vous</span></h1>
        <span class="log" style="float: right;">
            <h1 style="color: white"><label>Login</label></h1>
            <p style="color: white"><label>Username</label> : <input type="text" name="username" required></p>
            <p style="color: white"> <label>Password</label> : <input type="password" name="password" required></p>
            <p ><input type="submit"  value="S'incrire"></p>
        </span> 
    </form>
    <form method="post" action="traitement.php">
        <p><label>NOM</label> : 
        <p><input type="text" name="nom" required></p>
        <p> <label>PRENOM</label> : 
        <p><input type="text" name="prenom" required></p>
        <p><label>DATE DE NAISSANCE</label> : 
        <p><input type="date" name='dates' required></p>
        <p><label>ADDRESSE EMAIL</label> :  
        <p><input type="email" name="email" required></p>
        <p><label>DIPLOME </label> : </p>
        <select name="diplome" required>
            <option value="A2">Serie A2</option>
            <option value="D">D</option>
            <option value="C">C</option>   
        </select></p>
        <p><label>FILIAIRE</label> : </p>
        <select name="options" required>
            <option value="DEV">intégration et développement</option>
            <option value="RSI">réseaux et systèmes </option>
        </select></p>
        <p><input type="submit" value="envoyer mes informations"></p>
    </div>
    </form>
</body>
</html>