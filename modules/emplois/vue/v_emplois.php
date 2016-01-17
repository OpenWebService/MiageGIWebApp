

<div class="row overlayW">
    <div class="col-lg-offset-2">


        <form id="form-emplois" method="POST" action="#" class="  col-lg-4 " enctype="multipart/form-data">
            <div class="">
                <h3>
                    Gestion des emplois du temps
                </h3>
            </div>

            <div class=" ">
                <label>Licence 1</label>
                <input class=" " name="l1" type="file" />
            </div>
            <div class=" ">
                <label>Licence 2</label>
                <input class=" " name="l2" type="file" />
            </div>
            <div class=" ">
                <label>Licence 3</label>
                <input class=" " name="l3" type="file" />
            </div>       
            <div class=" ">
                <label>Master 1 Miage</label>
                <input class=" " name="m1m" type="file" />
            </div>                   
            <div class=" ">
                <label>Master 1 GI</label>
                <input class=" " name="m1gi" type="file" />
            </div>                         
            <div class=" ">
                <label>Master 2 Miage</label>
                <input class=" " name="m2m" type="file" />
            </div>  
            <div class=" ">
                <label>Master 2 GI</label>
                <input class=" " name="m2gi" type="file" />
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