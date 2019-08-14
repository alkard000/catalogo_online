<?php

include_once 'funcion/funciones-cloth.php'; 
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $name = $_POST['name_cloth'];
    $price = $_POST['price'];
    $reference = $_POST['reference'];
    $marca = $_POST['marca'];
    $discipline = $_POST['dicipline'];
    $category = $_POST['category'];
    $genre =  $_POST['genre'];
    $id_registro = $_POST['id_registro_cloth'];


if($_POST['producto'] == 'nuevo'){
    
    try{
        $stmt = $conn->prepare(" INSERT INTO info_cloth (url_images, 
                                                            url_image, 
                                                            name_cloth, 
                                                            price, 
                                                            pass, 
                                                            id_cat_marc, 
                                                            id_cat_type, 
                                                            id_cloth_cat, 
                                                            id_cloth_genre ) 
                                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssssiiii", $img1, $img2, $name, $price, $reference, $marca, $discipline, $category, $genre );
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro > 0){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_cloth' => $id_registro
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
        }catch (Exception $e){
            echo "Error" . $e->getMessage();
        }
        die(json_encode($respuesta));

    
}

if($_POST['producto'] == 'actualizar'){

    try{
        
        $stmt = $conn->prepare(" UPDATE info_cloth SET  url_images = ?, 
                                                        url_image = ?, 
                                                        name_cloth = ?, 
                                                        price = ?, 
                                                        pass = ?, 
                                                        id_cat_marc = ?, 
                                                        id_cat_type = ?, 
                                                        id_cloth_cat = ?, 
                                                        id_cloth_genre = ?,
                                                        editado = NOW() WHERE id_cloth = ? ");
        $stmt->bind_param("sssssiiii", $img1, $img2, $name, $price, $reference, $marca, $discipline, $category, $genre);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_cloth_actualizado' => $id_registro
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch (Exception $e){
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}

if($_POST['registro'] == 'eliminar'){
    $id_borrar = $_POST['id'];

    try{
        $stmt = $conn->prepare(" DELETE FROM info_cloth WHERE id_cloth = ? ");
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    }catch ( Exception $e){
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
?>