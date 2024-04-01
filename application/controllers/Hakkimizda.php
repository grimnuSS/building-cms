<?php
class Hakkimizda extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model("Panel");
	}
	public function index() {
		$hizmetler = $this->Panel->getHakkimizda();
		$veri = array(
			"hizmetler" => $hizmetler
		);
		$this->load->view("Panel/hakkimizda",$veri);
	}
	public function edit() {
		$header = $this->input->post('header');
		$body = $this->input->post('body');

		// Eğer düzenleme işlemi için gerekli kontrolleri eklemek isterseniz, buraya ekleyebilirsiniz.

		$this->Panel->updateHakkimizda($header, $body);

		$success = "Başarıyla Düzenlendi!";
		$this->load->view("Panel/hakkimizda", compact("success"));
	}
}
?>
