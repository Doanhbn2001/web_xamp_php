<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('model');
		$ketqua = $this->model->getAllData();
		$ketqua = array("mangketqua"=>$ketqua);
		$this->load->view('nhansu',$ketqua);
	}
	public function nhansu_add(){
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
  			$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
  		if($check !== false) {
    		echo "File is an image - " . $check["mime"] . ".";
    		$uploadOk = 1;
  	}   else {
    		echo "File is not an image.";
    		$uploadOk = 0;
  }
}

// Check if file already exists
		if (file_exists($target_file)) {
  			//echo "Sorry, file already exists.";
  			$uploadOk = 0;
}

// Check file size
		if ($_FILES["anhavatar"]["size"] > 500000) {
 			echo "Sorry, your file is too large.";
  			$uploadOk = 0;
}

// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  			$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
  			//echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} 	else {
  		if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
    		//echo "The file ". htmlspecialchars( basename( $_FILES["anhavatar"]["name"])). " has been uploaded.";
  } 	else {
    		//echo "Sorry, there was an error uploading your file.";
  }
}		
	$ten = $this->input->post('ten');
	$tuoi = $this->input->post('tuoi');
	$sdt = $this->input->post('sdt');
	$sodonhang = $this->input->post('sodonhang');
	$linkfb = $this->input->post('linkfb');
	$anhavatar = base_url()."Fileupload/".basename( $_FILES["anhavatar"]["name"]);

	$this->load->model('model');
	if($this->model->insertData($ten,$tuoi,$sdt,$anhavatar,$sodonhang,$linkfb)){
		$this->load->view('success');
	};
}
	public function xoa_nhansu($idnhanduoc){
		$this->load->model('model');
		if($this->model->xoaNhansu($idnhanduoc)){
			echo "delete done";
		};
	}
	public function sua_nhansu($idnhanduoc){
		$this->load->model('model');
		$ketqua = $this->model->getDataById($idnhanduoc);
		$ketqua = array("dulieukq"=>$ketqua);
		$this->load->view('sua_nhansu', $ketqua, FALSE);
	}
	public function update_nhansu(){
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(isset($_POST["submit"])) {
  			$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
  		if($check !== false) {
    		echo "File is an image - " . $check["mime"] . ".";
    		$uploadOk = 1;
  	}   else {
    		echo "File is not an image.";
    		$uploadOk = 0;
  }
}
		if ($_FILES["anhavatar"]["size"] > 500000) {
 			echo "Sorry, your file is too large.";
  			$uploadOk = 0;
}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  			$uploadOk = 0;
}
		if ($uploadOk == 0) {
  			echo "Sorry, your file was not uploaded.";
	} 	else {
  		if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
    		//echo "The file ". htmlspecialchars( basename( $_FILES["anhavatar"]["name"])). " has been uploaded.";
  } 	else {
    		//echo "Sorry, there was an error uploading your file.";
  }
}	
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$linkfb = $this->input->post('linkfb');
		$anhavatar = base_url()."Fileupload/".basename( $_FILES["anhavatar"]["name"]);
		$sodonhang = $this->input->post('sodonhang');
		$sdt = $this->input->post('sdt');
		$this->load->model('model');
		if($this->model->updateById($id,$ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang)){
			$this->load->view('success');
		};

	}
	public function ajax_add(){
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$anhavatar = "https://kenh14cdn.com/zoom/460_289/203336854389633024/2022/4/7/photo1649323787366-16493237877202060239664.jpg";
		if($this->model->insertData($ten,$tuoi,$sdt,$anhavatar,$sodonhang,$linkfb)){
			echo "thanh cong";
	}	else{
			echo "that bai";
	}
	}




}

/* End of file 1.php */
/* Location: ./application/controllers/1.php */