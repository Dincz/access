 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Templates extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('templates_model');
        }
        public function index()
        {
            
            $data = [
                'templates' => $this->templates_model->fetchAll()
            ];
            // print_r($data);
            $this->load->view('frontend/theme/index', $data);
        }
        public function theme($theme)
        {
            $data = [
                'template' => $this->templates_model->getData($theme),
                'recent' =>  $this->templates_model->recentData()
            ];
            $this->load->view('frontend/theme/detail', $data);
        }
        public function view($theme)
        {
            $data = [
                'template' => $this->templates_model->getData($theme)
            ];
            $this->load->view('frontend/theme/view', $data);
        }
    }
 /* End of file Controllername.php */
