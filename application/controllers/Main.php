<?php
    class Main extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("Panel");
			$this->load->model("Biten_Projeler");
			$this->load->model("Devam_Eden_Projeler");
			$this->load->model("Pvc_Marangoz");
			$this->load->model("Yeni_Projeler");
			$this->load->model("Hizmetler_Model");
            $this->load->library("session");
        }

		public function index() {
			$hizmetler = $this->Hizmetler_Model->getHizmetler();
			$projeler = $this->Biten_Projeler->getBitenProjeler();
			$pvc = $this->Pvc_Marangoz->getPVC();
			$marangoz = $this->Pvc_Marangoz->getMarangoz();
			$hakkimizda = $this->Panel->getHakkimizda();

			$signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

			$veri = array(
				"pvc" => $pvc,
				"projeler" => $projeler,
				"hizmetler" => $hizmetler,
				"marangoz" => $marangoz,
				"hakkimizda" => $hakkimizda,
				"signed_in" => $signed_in
			);

			$this->load->view("main",$veri);
		}

        public function hakkimizda() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
            $data = $this->Panel->getHakkimizda();
            
            $view_datas = array();

            if ($data) {
                foreach ($data->result() as $veri) {
                    $view_datas["header"] = $veri->header;
                    $view_datas["body"] = $veri->body;

                }
            }

            $view_datas["signed_in"] = $signed_in;


            $this->load->view("hakkımızda",$view_datas);
        }
        public function yeni_projeler() {
            $data = $this->Yeni_Projeler->getYeniProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("yeni_projeler",$veri);
        }

        public function devam_eden_projeler() {
            $data = $this->Devam_Eden_Projeler->getDevamEdenProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("devam_eden_projeler",$veri);
        }
        public function biten_projeler() {
            $data = $this->Biten_Projeler->getBitenProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("biten_projeler",$veri);
        }
        public function pvc_marangoz() {
			$pvc = $this->Pvc_Marangoz->getPVC();
			$marangoz = $this->Pvc_Marangoz->getMarangoz();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

			$veri = array(
				"pvc" => $pvc,
				"marangoz" => $marangoz,
				"signed_in" => $signed_in
			);

            $this->load->view("pvc_marangoz",$veri);
        }
        public function iletisim() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
            $this->load->view("iletişim",array("signed_in" => $signed_in));
        }
    }
?>
