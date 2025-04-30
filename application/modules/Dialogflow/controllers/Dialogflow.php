class Dialogflow extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dialogflow_model');
        $this->load->library('Dialogflow_lib');
    }

    public function index() {
        // หน้าแรกของการตั้งค่า Dialogflow
        $this->load->view('admin/connect_ai/dialogflow_config');
    }

    public function save_config() {
        // บันทึกการตั้งค่า Dialogflow
        $config = array(
            'project_id' => $this->input->post('project_id'),
            'session_id' => $this->input->post('session_id'),
            'language_code' => $this->input->post('language_code')
        );
        $this->Dialogflow_model->save_config($config);
        redirect('dialogflow');
    }

    public function create_agent() {
        // สร้าง Agent ใหม่
        $agent_name = $this->input->post('agent_name');
        $this->Dialogflow_lib->create_agent($agent_name);
        redirect('dialogflow');
    }

    public function create_intent() {
        // สร้าง Intent ใหม่
        $intent_name = $this->input->post('intent_name');
        $this->Dialogflow_lib->create_intent($intent_name);
        redirect('dialogflow');
    }
}
