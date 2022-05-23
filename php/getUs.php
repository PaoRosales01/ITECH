<?php
	include '../../itech/php/conn.php';
    $sql = "SELECT * FROM nosotros WHERE estado=1";
    
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
                $id = $val['id_nosotros'];
                $c['id_nosotros'] = $id;
                $c['titulo'] = $val['titulo'];
                $c['imagen'] = $val['imagen'];
                $c['descripcion'] = $val['descripcion'];
                $c['estado'] = $val['estado'];
                array_push($list, $c);
                //echo json_encode($val);
            }
            echo json_encode($list);
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