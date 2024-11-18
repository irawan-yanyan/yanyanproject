<?php
	$data = array(5,6,23,9,1,90);
	$finddata = 23;

	
	function finddata($data,$finddata){
		$find = 0;
		$index = 0;
		$number = 0;
		for($i=0;$i<count($data);$i++){
			if($data[$i] === $finddata){
			//	echo "data find by . ". $data[$i]. " in index ".$i;
				$find = 1;
				$index = $i;
				$number = $data[$i];
			}

		}

		if($find === 0){
			echo "data not found.";
		}else{
			echo "number ".$number." found in index ".$index;
		}

		

	}

	finddata($data,$finddata);
