<html>
    <head>
        <title>Subir archivos php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Subir archivos php</h1>
        <form action="subir.php"  method="POST" enctype="multipart/form-data" >
                Archivo
                </br>
                <input  type="file" name="archivo"/><br/>
                <input type="submit" value="Enviar" />
              
        </form>
        
        <h1>Listado de imagenes</h1>
        <?php 
            $gestor= opendir('./images'); 
            if ($gestor) {                
                while( ($image = readdir($gestor)) !== false){
                    
                    if($image != '.' && $image != '..'){
                        echo "<img src='images/$image' width='1000px'/> <br/>";
                  }
                }
                
            }
        ?>
        
        
        
    </body>
</html>