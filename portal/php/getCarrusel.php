<?php
	include '../../itech/php/conn.php';
    $sql = "SELECT * FROM carrusel WHERE status=1";
    
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
                $id = $val['id_slider'];
                $c['id_slider'] = $id;
                $c['imagen'] = $val['imagen'];
                $c['status'] = $val['status'];
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