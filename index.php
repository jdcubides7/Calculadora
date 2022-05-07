<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4"><h2>Calculadora<h2></div>
</div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel-panel-success">
                     <div class="panel-body">               
                             <form action="" method="GET">

                             <h3>Numero1</h3>
                             <input name="numero1"  class="form-control" type="number"></input>
                             <h3>Numero2</h3>
                             <input name="numero2" class="form-control" type="number"></input>
                             
                             <div class="form-group">

                                <br>

                             <h3>Operacion</h3>
                                 <select name="operacion" id="operacion" class="form-control" required>
                                 <option value="" selected>Seleccione operacion</option>
                                     <option <?php print(@$_GET['operacion'] == 'suma' ? 'selected' : '') ?>            value="suma">suma</option>
                                     <option <?php print(@$_GET['operacion'] == 'resta' ? 'selected' : '') ?>           value="resta">resta</option>
                                     <option <?php print(@$_GET['operacion'] == 'multiplicacion' ? 'selected' : '') ?>  value="multiplicacion">multiplicacion</option>
                                     <option <?php print(@$_GET['operacion'] == 'division' ? 'selected' : '') ?>  value="division">division</option>
                                 </select>
                             </div>       
                             <button type="submit" class="btn btn-info pull-right">Operar</button>         
                            </form>
                     </div>       
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php
                   @$operacion = $_GET['operacion'];
                   @$numero1 = $_GET['numero1'];
                   @$numero2 = $_GET['numero2'];
                    
                    //print($numero1.$operacion.$numero2);

                    if($operacion== 'suma'){     
                        print("El resultado de la suma  es: ");                   
                        print($numero1+$numero2);

                    }else if($operacion == 'resta'){      
                        print("El resultado de la resta  es: ");                   
                        print($numero1-$numero2);

                    }else if($operacion == 'multiplicacion'){ 
                        print("El resultado de la multiplicacion  es: ");                        
                        print($numero1*$numero2);

                    }else if($operacion == 'division'){     
                        print("El resultado de la division es es: ");                    
                        print($numero1/$numero2);

                    }
                    
                ?>
            </div>
        </div>
    </div>


    
</body>
</html>