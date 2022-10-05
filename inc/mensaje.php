<!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH01sSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H661ZH81PoY1FhbGU+6BZp6G7niu735Sk71N" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>
-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH01sSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H661ZH81PoY1FhbGU+6BZp6G7niu735Sk71N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php 

function mensaje ($mensaje, $pagina){
echo"

<script>
    $(document).ready(function(){
       $('#myModal').modal('show');
    });
</script>
";

echo "
    <meta charset='UTF-8'>
    <div class='modal' tabindex='-1' id='myModal' data-bs-backdrop='static' data-bs-keyboard='false'>
        <div class='modal-dialog'>
            <div class='modal-content'>

                <div class='modal-body'>
                <center>
                    <b>".$mensaje."</b> </center>
                </div>
                
                <div class='modal-footer'>
                    <button type='button' class='btn btn-light' data-dismiss='modal' onclick='regresarPaginaAnterior()' style='background-color: #E8983E; color: white;'>Cerrar</button>
                </div>
            
            </div>
        </div>
    </div>

    <script>
        function regresarPaginaAnterior(){
            window.open('".$pagina."','_self');
        }
    </script>
";
}


/*function mensaje ($mensaje, $pagina){
echo"

<script>
    $(document).ready(function(){
        $('#myModal').modal('show');
    });

    M.AutoInit();
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(options);
    });
</script>
";

echo "
    <div id='myModal' class='modal'>
        <div class='modal-content'>
            <b>".$mensaje."</b>
        </div>
        <div class='modal-footer'>
            <button type='button' class='modal-close waves-effect waves-light btn-flat' data-dismiss='modal' onclick='regresarPaginaAnterior()'>Cerrar</button>
        </div>
    </div>

    <script>
        function regresarPaginaAnterior(){
            window.open('".$pagina."','_self');
        }
    </script>
";
}
*/

?>