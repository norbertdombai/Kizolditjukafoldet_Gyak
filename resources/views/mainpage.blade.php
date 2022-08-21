<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"></script>
   
    <!--***CSRF TOKENHEZ TARTOZO META TAG!!!!!!!!!!!***-->
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <!--***********************************************-->
    <script src="/js/kizolditjukafoldet/Ajax.js"></script>
    <script src="/js/kizolditjukafoldet/Main.js"></script>
 
</head>
<body>
<header>
        <h1>Kizöldítjük a Földet</h1>
    </header>

   

    <article>    
        <form method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Mit tettél ma a Földért?</legend>

            <!--    <div id="formfejlec">
                    <div>                       
                        <select name="osztalyok" id="osztalyok">
                            <option value="0">--Válassz osztályt--</option>
                        </select>
                    </div>  -->

                    <div>                      
                        <select name="tevekenysegek" id="tevekenysegek">
                            <option class="nev" value="0">Válasszon tevékenységet</option>
                        </select>
                    </div>

                    <div>
                        <input type="button" id="kuld" name="kuld" value="Küld" >
                    </div>
                </div>
            </fieldset>
        </form>
</article> 
</body>
</html>