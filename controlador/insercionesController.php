<?php
require_once('../modelo/entregable.php');

$insersion = new insersiones();

if(isset($_POST['contrato_compranet'])){

    if(method_exists($insersion,'contrato_in')){

        $insersion::{'contrato_in'}();
  
      }
}else if(isset($_POST['unitario'])){

    if(method_exists($insersion,'entregables')){

        $insersion::{'entregables'}();
  
      }
}else if (isset($_POST['uni'])){


    if(method_exists($insersion,'requirente')){

        $insersion::{'requirente'}();
  
      }
}else if(isset($_POST['un'])){

    if(method_exists($insersion,'compradora')){

        $insersion::{'compradora'}();
  
      }

}else if(isset($_POST['apellido_paterno'])){
    if(method_exists($insersion,'administrador')){

        $insersion::{'administrador'}();
  
      }  

      
}else if(isset($_POST['consolidador'])){
    if(method_exists($insersion,'consolidado')){

        $insersion::{'consolidado'}();
  
    }  
}else if(isset($_POST['noo'])){
    if(method_exists($insersion,'proveedor')){

        $insersion::{'proveedor'}();
  
    }  
}else if(isset($_FILES['uploadedfile'])){
    if(method_exists($insersion,'subir_cvs')){

        $insersion::{'subir_cvs'}();
  
    }  
}else if(isset($_FILES['pdf'])){
    if(method_exists($insersion,'subir_pdf')){

        $insersion::{'subir_pdf'}();
  
    }  
}else if(isset($_POST['select-entregables-recepcion'])){
    if(method_exists($insersion,'recepcion')){

        $insersion::{'recepcion'}();
  
    }  
}else if(isset($_POST['clave_partida'])){
    if(method_exists($insersion,'asignaciones')){

        $insersion::{'asignaciones'}();
  
    }  
}else if(isset($_POST['partida'])){
    if(method_exists($insersion,'presupuesto')){

        $insersion::{'presupuesto'}();
  
    }  
}else if(isset($_POST['presupuesto'])){
    if(method_exists($insersion,'modificar_presupuesto')){

        $insersion::{'modificar_presupuesto'}();
  
    }  
}else if(isset($_POST['insatf'])){
    if(method_exists($insersion,'contrato_fechas')){

        $insersion::{'contrato_fechas'}();
  
    }  
}else if(isset($_POST['cantidadm'])){
    if(method_exists($insersion,'entregas_m')){

        $insersion::{'entregas_m'}();
  
    }  
}

?>