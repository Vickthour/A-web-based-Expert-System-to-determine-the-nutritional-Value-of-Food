<?php 
	include('conn.php');
	if(isset($_POST['send'])){	
		$msg=$_POST['msg'];
        $search=$con->query("SELECT * FROM 'msg' WHERE 'msg' LIKE '%$msg%' "); 
        $result = $search->fetchAll(PDO::FETCH_ASSOC);
        $rowCount = $search->rowCount();

        if($rowCount > 0){
             foreach($result as $data){
                $sars= $data['msg'];
                echo json_encode($sars);
            }
        }
	}



?>