<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tipo de letra de google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300;600&display=swap" rel="stylesheet">
  <!-- / -->
  <!-- traigo el estilo del archivo css -->
  <link href="../css/style.css" rel="stylesheet">
  <!-- / -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--Jquery-->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <!--Ajax-->
  <script src="ajax/ajax.js"></script>


</head>
<body>

 <div class="content-wrapper">
    <div class="container">
        
    
  <section class="content">      
    <div class="row">
   
         <div class="col-lg-3 col-xs-12"></div>

      

      <div class="col-lg-6 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>



            <div class="box-body">
  
              <div class="box">
    <center>
        <form method="post" id="formulario">
        <div>
            <h1>Calculadora PHP - Ajax</h1>
        </div>    
        <div class="form-group">
            <div class="input-group">
        <input type="number" class="form-control input-lg" name="variable1" id="variable1" placeholder="numero 1" required>
            </div>  
        </div>
        <div class="form-group">
            <div class="input-group">
        <input type="number" class="form-control input-lg" name="variable2" id="variable2" placeholder="numero 2" required>
            </div>  
        </div>
        <div class="form-group">
            <div class="input-group">
        <select name="operador" id="operador" class="form-control input-lg">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multi">multiplicacion</option>
            <option value="divi">division</option>
        </select>
            </div>  
        </div>
        
        <div class="form-group">
            <div class="input-group">
                <input id="resp" name="resp" class="form-control input-lg" readonly>
            </div>  
        </div>
        
        <input type="button" class="btn btn-primary" name="ingresar" id="btn-ingresar" value="Ingresar" />
        <input type="reset" class="btn btn-danger" name="limpiar" id="btn-limpiar" value="Limpiar" />
       
         
    </form>
      <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>

    </center>
    <br>

        </div>
            
      </div>

      

      </div>
      </div>

      <div class="col-lg-3 col-xs-12"></div>
      
    </div>
   
  </section>
</div>
</div>
<!--Jquery-->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</body>
</html>



