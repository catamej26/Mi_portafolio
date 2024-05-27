<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel= "stylesheet">
<?php
    require_once("../config/conexion.php");
    require_once("../model/Social_Media.php");
    $social_media=new SocialMedia();

    switch($_GET["opc"]){
        case "mostrar":
            $datos = $social_media->get_socialMedia_con_parametro($_POST["socmed_id"]);
            if (is_array($datos)==true and count($datos)<>0){
                foreach ($datos as $row){
                    $output["socmed_icono"] = $row["socmed_icono"];
                    $output["socmed_url"] = $row ["socmed_url"];
                }
                echo json_encode($output);
            }
        case "modificar":
            $social_media->update_socialMedia(
                $_POST["socmed_id"],
                $_POST["socmed_icono"],
                $_POST["socmed_url"],
            );
        
        case "guardaryeditar":
            if (empty($_POST["socmed_id"])){
                $social_media->insert_socialMedia($_POST["socmed_icono"],$_POST["socmed_url"]);
            }else{
                $social_media->update_socialMedia($_POST["socmed_id"],$_POST["socmed_icono"],$_POST["socmed_url"]);
            }
        case "eliminar":
            $social_media->delete_socialMedia($_POST["socmed_id"]);
        case "listar":
            $datos=$social_media->get_socialMedia();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["socmed_incono"];
                $sub_array[] = $row["socmed_url"];

                $sub_array[] = '<button type="button" onClick="editar"('.$row["socmed_id"].');" id="'.$row["socmed_id"].'"
                class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit" ></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar"('.$row["socmed_id"].');" id="'.$row["socmed_id"].'"
                class="btn btn-outline-danger btn-icon"><div><i class="fa fa-closa"></i></div></button>';          }
                $data[] = $sub_array;
        
    }

    $results = array(
        "sEcho"=>1,
        "iTotalRecords"=>count($data),
        "iTotalDisplayRecords"=>count($data),
        "aaData"=>$data);
        echo json_encode($results);
