<?php 
	include_once "../coss.php";
	if($_GET){
		$data = $_GET;
	}else{
		$data = $_POST;
	}
	switch ($data['type']) {
		case 'user':
			$csql = "SELECT * FROM guser WHERE openid = '{$data[openid]}'";
			$cres = mysql_query($csql);
			if(mysql_num_rows($cres)<=0){
				$sql = "INSERT INTO guser (id,openid,nickname,headimgurl,name,phone,score) VALUES (NULL,'{$data[openid]}','{$data[nickname]}','{$data[headimgurl]}','{$data[name]}','{$data[phone]}','{$data[score]}')";
				$res = mysql_query($sql);
				var_dump($res);
			}
			break;
		case 'score':
			$cssql = "SELECT * FROM guser WHERE openid = '{$data[openid]}'";
			$csres = mysql_query($cssql);
			$row = mysql_fetch_assoc($csres);
			$oldscore = $row['score'];
			if($oldscore<$data['score']){
				$gsql = "UPDATE guser SET score = '{$data[score]}' WHERE openid = '{$data[openid]}'";
                $gres = mysql_query($gsql);
                $oldscore = $data['score'];
			}
            $psql = "SELECT * FROM guser WHERE score>'{$data[score]}'";
            $pres = mysql_query($psql);
            $arrp['cheng'] = mysql_num_rows($pres)+1;
            $arrp['best'] = $oldscore;
			echo json_encode($arrp);
			break;
        case 'pai':
            $jsql = "SELECT * FROM guser ORDER BY score DESC LIMIT 0,5";
            $jres = mysql_query($jsql);
            $jarr = array();
			while ($jrow = mysql_fetch_assoc($jres)) {
            	$jarr[] = $jrow;
            }
            echo json_encode($jarr);
            break;
        case 'start':
            $cssql = "SELECT * FROM guser WHERE openid = '{$data[openid]}'";
			$csres = mysql_query($cssql);
            if(mysql_num_rows($csres)>0){
            	echo '{"err":0}';
            }else{
            	echo '{"err":1}';
            }
            break;
		default:
			# code...
			break;
	}
 ?>