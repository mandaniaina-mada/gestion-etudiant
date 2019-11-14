<form method="post" action="register1.php">
<ul>
	<li><a href='accueil1.php'> Accueil</a></li>
    <li><a href='register2.php'> S'inscrire</a></li>
    <li><a href='filtre1.php'> Filtrage des élèves </a></li>
    <li><a href='info11.php'> Information sur un élèves </a></li>
    <li><a href='listefinal1.php'> Listes des élèves </a></li>
</ul>
<h1><span>Changer les données d'un élèves : </span></h1>;
<link rel="stylesheet" type="text/css" href="style.css">
<form method="post" action="edit.php">
        <p><label>NOM</label> : <input type="text" name="nom" required></p>
        <p> <label>PRENOM</label> : <input type="text" name="prenom" required></p>
        <p><label>DATE DE NAISSANCE</label> : <input type="date" name='dates' required></p>
        <p><label>ADDRESSE EMAIL</label> :  <input type="email" name="email" required></p>
        <p><label>DIPLOME </label> :
        <select name="diplome" required>
            <option value="A2">Serie A2</option>
            <option value="D">D</option>
        <option value="C">C</option>   
        </select></p>
        <p><label>FILIAIRE</label> :
        <select name="options" required>
            <option value="DEV">intégration et développement</option>
            <option value="RSI">réseaux et systèmes </option>
        </select>
        </p>
        <p><input type="submit" value="envoyer mes informations"></p>
</form>