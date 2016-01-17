<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>




<div class="row overlayW">
    <div class="col-lg-offset-2">
        <div class="col-lg-3">
            <img class="img-circle img-thumbnail" src="global/images/user-icon.png"/>
        </div>

        <form id="form-conxn" method="POST" action="#" class="form-group col-lg-4 ">
            <div class="">
                <h3>
                    Connexion espace étudiant / administrateur
                </h3>
            </div>

            <div class="form-group">
                <label>Login</label>
                <input class="form-control" name="login" type="email" value="diarranabe@gmail.com" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="pass" type="password" value="diarranabe"/>
            </div>
            <button class="btn btn-info" >Connexion</button>
            <button id="annuler-conxn" type="reset" class="btn"onclick="myFunction()" >Annuler</button>
        </form>


    </div>
    <script>

        function myFunction() {            
            document.getElementById("form-conxn").reset();
        }
        //document.getElementById("annuler-conxn").onclick = myFunction();

    </script>
</div>