<?php

    if(isset($_POST))
    {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $email = htmlspecialchars($_POST['email']);


       

       $erreur = "";
       $query = $BDD->query('SELECT pseudo, email FROM users');

       while($pseudos = $query->fetch())  // Verification email et pseudo unique
       {
  
            if($pseudos['pseudo'] == $pseudo)
            {
                $erreur = "Ce pseudo est déjà utilisé <br />";
            }

            if($pseudos['email'] == $email)
            {

                $erreur = $erreur."Cet email est déjà utilisé <br />";
            }
       }


       $EmailSyntax='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  // Validation email
       if(!preg_match($EmailSyntax,$email) || !isset($email))
            $erreur = $erreur."L'email entré n'est pas valide <br />";

        if($password != $confirm || !isset($password) || !isset($confirm))
            $erreur = $erreur."Le mot de passe et la confirmation ne sont pas pareils <br />";

        if($erreur = "")
        {
            
        }

    }
echo $erreur;
?>

<form action="inscription" method="post" id="Form">
    
    <fieldset>
        <legend> Identifiants </legend>
            <label for="pseudo">*Pseudo: </label>
            <input type="text" name="pseudo" class=":required"/>

     
            <label for="email">*Email: </label>
            <input type="text" name="email" class=":required :email"/>


        
            <label for="password">*Mot de passe: </label>
            <input type="password" name="password" id="password" class=":required"/>


       
            <label for="confirm">*Confirmez votre mot de passe: </label>
            <input type="password" name="confirm" class=":same_as;password :required"/>

    </fieldset>
    
    <!-- Page 2 *************************************************************************** -->
      
    <fieldset>
        <legend> Personnage </legend>

            


    </fieldset>
     <!-- Page 3 *************************************************************************** -->   
    <fieldset>
        <legend> Êtes-vous humain ? </legend>
    </fieldset>
   <input type="submit" value="S'inscrire"/>

</form>
