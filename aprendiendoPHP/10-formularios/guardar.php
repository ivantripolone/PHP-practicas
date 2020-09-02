<?php

    if(isset($_GET['titulo'])&& isset($_GET['descripcion'])){
        echo "<h1>".$_GET['titulo']."</h1>"."</br>".$_GET['descripcion'];
        
        
    }

