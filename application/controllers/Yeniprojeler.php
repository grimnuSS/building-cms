<?php
class Yeniprojeler extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model("Yeni_Projeler");
	}
	public function index() {
		$hizmetler = $this->Yeni_Projeler->getYeniProjeler();
		$veri = array(
			"hizmetler" => $hizmetler
		);
		$this->load->view("Panel/yeni_projeler/list",$veri);
	}
	public function saveIndex(){
		$this->load->view("Panel/yeni_projeler/save");
	}

	public function edit($id) {
		$hizmet = $this->Yeni_Projeler->getYeniProjeler($id);
		$veri = array(
			"hizmet" => $hizmet
		);
		$this->load->view("Panel/yeni_projeler/edit",$veri);
	}

	public function update() {
		$id = $this->input->post('id');
		$header = $this->input->post('header');
		$body = $this->input->post('body');

		// Dosya yükleme işlemi
		$config['upload_path'] = 'images/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			$image_data = $this->upload->data();
			$image = 'images/' . $image_data['file_name'];
		} else {
			$image = ''; // Eğer resim seçilmediyse, boş bir değer atayın
		}

		$data = array(
			'header' => $header,
			'body' => $body,
			'image' => $image
		);

		$this->Yeni_Projeler->updateYeniProjeler($id, $data);

		$success = "Başarıyla Güncellendi!";
		$this->load->view("Panel/yeni_projeler/list", compact("success"));

	}

	public function save() {
		$header = $this->input->post('header');
		$body = $this->input->post('body');

		// Dosya yükleme işlemi
		$config['upload_path'] = 'images/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			$image_data = $this->upload->data();
			$image = 'images/' . $image_data['file_name'];

			$data = array(
				'header' => $header,
				'body' => $body,
				'image' => $image
			);

			$this->Yeni_Projeler->saveYeniProjeler($data);

			$success = "Başarıyla Kaydedildi!";
			$this->load->view("Panel/yeni_projeler/list", compact("success"));
		} else {
			$error = $this->upload->display_errors();
			$this->load->view("Panel/yeni_projeler/list", compact("error"));
		}
	}

	public function delete($id) {
		$this->Yeni_Projeler->deleteYeniProjeler($id);
		$success = "Başarıyla Silindi!";
		$this->load->view("Panel/yeni_projeler/list", compact("success"));
	}
}
?>
