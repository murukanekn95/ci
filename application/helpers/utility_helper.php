<?php 

function debug($ele=array())
	{
		echo "<pre>";
		print_r($ele);
		$data=debug_backtrace();
		echo '<br>File Name =>'.$data[0]['file'];
		echo '<br>Line No   =>'.$data[0]['line'];
		echo "<br>";
	}
	
	function asset_url(){
		return base_url().'assets/';
	}


	function random_str($count=32) {
		//$input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$input = 'ab1c2d3e4f5g6h7i8j9kl1m2n34p5q6r7s8t9uv1w2x3y4z5A6B7C8D9EF1G2H3I4J5K6L7M8N9P1Q2R3S4T5U6V7W8X9YZ';
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $count; $i++) {
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
		return $random_string;
	
}

?>