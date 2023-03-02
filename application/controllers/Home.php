<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		

		$imageA = ['width' => 250, 'height' => 500];
		$imageB = ['width' => 500, 'height' => 90]; 
		$imageB = $this->final_cover_image($imageA,$imageB);
		print_r($imageB);
		echo '<br><br>';

		$imageA = ['width' => 180, 'height' => 250];
		$imageB = ['width' => 360, 'height' => 200]; 

		$imageB = $this->final_cover_image($imageA,$imageB);

		print_r($imageB);
		echo '<br><br>';

		$imageC = ['width' => 180, 'height' => 250];
		$imageD = ['width' => 100, 'height' => 500]; 

		$imageD = $this->final_cover_image($imageC,$imageD);

		print_r($imageD);
		echo '<br><br>';

		$imageE = ['width' => 180, 'height' => 250];
		$imageF = ['width' => 150, 'height' => 245]; 

		$imageF = $this->final_cover_image($imageE,$imageF);

		print_r($imageF);
		echo '<br><br>';


		/*$square_size = 500;
		$width='250';$height='500';
		$this->scale_image($width, $height,$square_size);
		//$this->load->view('home');
		echo '<br><br>';*/
	}

	public function final_cover_image($imageA,$imageB){
		if($imageA['width']>$imageB['width']){
			$imageB['width']=$imageA['width'];
		}
		else if($imageA['width']<$imageB['width']){
			$imageB['width']=$imageB['width'];
		}
		else{
			
		}

		if($imageA['height']>$imageB['height']){
			$imageB['height']=$imageA['height'];
		}
		else if($imageA['height']<$imageB['height']){
			$imageB['height']=$imageB['height'];
		}
		else{
			
		}

		return 'w:'.$imageB['width'].' h:'.$imageB['height'];
	}

	public function scale_image($width, $height,$square_size){
		//set dimensions
		if($width> $height) {
				$width_t=$square_size;
				//respect the ratio
				$height_t=round($height/$width*$square_size);
		} elseif($height> $width) {
				$height_t=$square_size;
				$width_t=round($width/$height*$square_size);
		}
		else {
				$width_t=$height_t=$square_size;
		}
		echo 'Width:'.$width_t;
		echo "<br>";
		echo 'Height:'.$height_t;
	}

	public function scale_image2($width, $height,$square_size){
		//set dimensions
		if($width > $height) {
				$width_t=$square_size;
				//respect the ratio
				$height_t=round($height/$width*$square_size);
		} elseif($height> $width) {
				$height_t=$square_size;
				$width_t=round($width/$height*$square_size);
		}
		else {
				$width_t=$height_t=$square_size;
		}

		echo 'Width :'.$width_t;
		echo " X ";
		echo 'Height:'.$height_t;
	}
}
