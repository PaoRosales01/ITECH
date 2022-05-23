<?php
	include '../../itech/php/conn.php';
    $sql = "SELECT * FROM contacto ORDER BY nombre_suc ASC";
    
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
                $id = $val['id_contacto'];
                $c['id_contacto'] = $id;
                $c['nombre_suc'] = $val['nombre_suc'];
                $c['direccion'] = $val['direccion'];
                $c['email'] = $val['email'];
                $c['tel'] = $val['tel'];
                $c['whatsapp'] = $val['whatsapp'];
                $c['cel'] = $val['cel'];
                $list[$id] = $c;
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