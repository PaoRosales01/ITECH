<?php
	include '../../itech/php/conn.php';
    $sql = "SELECT * FROM servicios";
    
    $res = mysqli_query($conn, $sql);

    if ($res)
    {
        if (mysqli_num_rows($res) > 0)
        {
            $c = array();
            $list = array();
			$id = 0;
            while ($val = mysqli_fetch_assoc($res))
            {
                $id = $val['id_servicio'];
                $c['id_servicio'] = $id;
                $c['nombre'] = $val['nombre'];
                $c['descripcion'] = $val['descripcion'];
                $c['foto'] = $val['foto'];
                array_push($list, $c);
                //echo json_encode($val);
            }
            ob_clean();
            echo json_encode($list);
            die();
        }
        else
        {
            echo mysqli_error($conn);
            //echo 0;
        }
    }
    else
    {
        echo mysqli_error($conn);
        //echo -1;
    }
?>