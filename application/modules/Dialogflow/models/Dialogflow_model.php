<?PHP 

class Dialogflow_model extends CI_Model {
    public function save_config($config) {
        // บันทึกการตั้งค่า Dialogflow ในฐานข้อมูล
        $this->db->insert('dialogflow_config', $config);
    }

    public function get_config() {
        // ดึงการตั้งค่า Dialogflow จากฐานข้อมูล
        $query = $this->db->get('dialogflow_config');
        return $query->row();
    }
}
