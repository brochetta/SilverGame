<form action="inscription" method="post" id="Form">
    
    <fieldset>
        <legend> Identifiants </legend>
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo" class=":required"/>

     
            <label for="email">Email: </label>
            <input type="text" name="email" class=":required :email"/>


        
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password" class=":required"/>


       
            <label for="confirm">Confirmez votre mot de passe: </label>
            <input type="password" name="confirm" class=":same_as;password :required"/>

    </fieldset>
    
    <!-- Page 2 *************************************************************************** -->
      
    <fieldset>
        <legend> Personnage </legend>

            <label for="confirm">Confirmez votre mot de passe: </label>
            <input type="password" name="confirm" class=":required"/>


    </fieldset>
        
    <fieldset>
        <legend> Conditions d'utilisation </legend>
    </fieldset>
   <input type="submit" value="S'inscrire"/>

</form>
