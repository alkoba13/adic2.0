<?php
	use pdomysql AS pdomysql;
	use posts AS posts;
	use ConnectionFactory AS ConnectionFactory;
require_once('ConnectionFactory.php');

    $requestData= $_REQUEST;
    $mysqli = ConnectionFactory::getFactory()->getConnection();

    $columns = array(
	'username', 
	'user_data.name',
	'User_data.negocio', 
	'pass', 
	'role', 
	'active', 
	'reg_type'
	);

    $filter = true;
    $order = 'ORDER BY  ';


			foreach ($requestData['order'] as $key => $col) {
							$order .= $columns[$col['column']].' '.$col['dir'];
							if($key != count($requestData['order'])-1)
									$order .= ' , ';
			}


    $having = ' HAVING 1 ';

    foreach ($requestData['columns'] as $i => $column) {
        if($column['search']['value']!=''){
            if(strcmp(substr($column['search']['value'], 0,1), "+")!=0)
                $having .= 'AND '.$columns[$i]." LIKE '%".$column['search']['value']."%'";
            else
                $having .= 'AND '.$columns[$i]." = '".substr($column['search']['value'],1)."'";

            $filter = true;
        }
    }


//    error_log(print_r($requestData,true));

    $query = "SELECT username, user_data.name,user_data.negocio, pass, role, active, reg_type from user inner join user_data on user.iduser = user_Id where role = 'socio'".$having.$order;
		
		//error_log($query);
        $sqlsl = $mysqli->prepare($query);
        $sqlsl->execute();
        $sqlsl->store_result();

        $query .= " LIMIT ".$requestData['start']." ,".$requestData['length'];


        $data = array();
        $sql = $mysqli->prepare($query);
        $sql->execute();
        $result = $sql->get_result();
        $today = new DateTime(date('Y-m-d'));
        while ( $row = $result->fetch_array(MYSQLI_NUM)){
            $data[] = $row ;
        }
        $sql->close();
    	//total de publicaciones
        $sqlTotal = $mysqli->prepare("select * from user ");
    	$sqlTotal->execute();
    	$sqlTotal->store_result();
        $json_data = array(
        		"draw" 				=> intval($requestData['draw']),
        		"recordsTotal"		=> intval($filter ? $sqlsl->num_rows :$sqlTotal->num_rows),
        		/*"recordsFiltered"   => intval($filter ? count($data) : $sqlTotal->num_rows),*/
                "recordsFiltered"   => intval( $filter ? $sqlsl->num_rows :$sqlTotal->num_rows),
        		"aaData"				=> $data

        	);

        $sqlTotal->close();
        error_log(print_r($json_data,true));
        echo json_encode($json_data);
        //print_r(json_decode($_POST['areasServ']));

 ?>
