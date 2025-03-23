
<?php

require_once("Home.php"); // loading home controller

/**
* @category controller
* class Admin
*/

class Social_apps extends Home
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in')!= 1) {
            redirect('home/login', 'location');
        }

        if ($this->session->userdata('user_type')== "Member" && $this->config->item("backup_mode")==0) {
            // ปรับปรุงการ Redirect ให้เหมาะสม เช่น ไปหน้าแจ้งเตือนไม่มีสิทธิ์
            redirect('home/login', 'location');
        }

        $this->load->helper('form');
        $this->load->library('upload');

        $this->upload_path = realpath(APPPATH . '../upload');
        set_time_limit(0);

        // ตรวจสอบว่าเมธอดเหล่านี้จำเป็นหรือไม่
        // $this->important_feature();
        // $this->periodic_check();
    }


    public function index()
    {
        $this->settings();
    }


    public function settings()
    {

        $data['page_title'] = $this->lang->line('Social Apps');

        $data['body'] = 'admin/social_apps/settings';
        $data['title'] = $this->lang->line('Social Apps');

        $this->_viewcontroller($data);
    }


    public function google_settings()
    {

        if ($this->session->userdata('user_type') != 'Admin') {
            redirect('home/login_page', 'location');
        }

        $google_settings = $this->basic->get_data('login_config');

        if (!isset($google_settings[0])) $google_settings = array();
        else $google_settings = $google_settings[0];

        if($this->is_demo == '1')
        {
            $google_settings['api_key'] = 'XXXXXXXXXXX';
            $google_settings['google_client_secret'] = 'XXXXXXXXXXX';
        }
        $data['google_settings'] = $google_settings;
        $data['page_title'] = $this->lang->line('Google App Settings');
        $data['title'] = $this->lang->line('Google App Settings');
        $data['body'] = 'admin/social_apps/google_settings';

        $this->_viewcontroller($data);
    }



    public function google_settings_action()
    {
        if($this->is_demo == '1')
        {
            echo "<h2 style='text-align:center;color:red;border:1px solid red; padding: 10px'>This feature is disabled in this demo.</h2>";
            exit();
        }

        if ($this->session->userdata('user_type') != 'Admin') {
            redirect('home/login_page', 'location');
        }

        if (!isset($_POST)) exit;

        $this->form_validation->set_rules('google_client_id', $this->lang->line("Client ID"), 'trim|required');
        $this->form_validation->set_rules('google_client_secret', $this->lang->line("Client Secret"), 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->google_settings();
        } else {

            $this->csrf_token_check();

            $insert_data['app_name'] = strip_tags($this->input->post('app_name',true));
            $insert_data['api_key'] = strip_tags($this->input->post('api_key',true));
            $insert_data['google_client_id'] = strip_tags($this->input->post('google_client_id',true));
            $insert_data['google_client_secret'] = strip_tags($this->input->post('google_client_secret',true));

            $status = $this->input->post('status');
            if($status=='') $status='0';
            $insert_data['status'] = $status;

            $google_settings = $this->basic->get_data('login_config');

            if (count($google_settings) > 0 ) {

                $id = $google_settings[0]['id'];
                $this->basic->update_data('login_config', array('id' => $id), $insert_data);
            }
            else
                $this->basic->insert_data('login_config', $insert_data);

            $this->session->set_flashdata('success_message', '1');
            redirect(base_url('social_apps/google_settings'),'location');
        }
    }
}






?>

<?PHP
/*
CREATE TABLE IF NOT EXISTS `tiktok_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `account_id` varchar(255) NOT NULL UNIQUE,
  `access_token` TEXT NULL,
  `refresh_token` TEXT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tiktok_config_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `line_oa_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `channel_id` varchar(255) NOT NULL UNIQUE,
  `channel_secret` varchar(255) NOT NULL,
  `channel_access_token` TEXT NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `page_id` (`page_id`),
  CONSTRAINT `line_oa_config_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `line_oa_config_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `facebook_rx_fb_page_info` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


*//////


public function tiktok_settings()
{
    $data['page_title_tiktok'] = $this->lang->line('TikTok App Settings'); // ตั้งชื่อตัวแปรให้สอดคล้องกัน
    $data['title'] = $this->lang->line('TikTok App Settings');
    $data['body'] = 'admin/social_apps/tiktok_app_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}


public function tiktok_settings_data()
{
    $this->ajax_check();
    $search_value = $_POST['search']['value'];
    $display_columns = array("#","CHECKBOX",'id', 'app_name', 'account_id', 'access_token', 'status', 'action'); // ปรับคอลัมน์ให้ตรงกับตาราง tiktok_config
    $search_columns = array('app_name', 'account_id'); // ปรับคอลัมน์ที่ใช้ค้นหา

    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $limit = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $sort_index = isset($_POST['order'][0]['column']) ? strval($_POST['order'][0]['column']) : 2;
    $sort = isset($display_columns[$sort_index]) ? $display_columns[$sort_index] : 'id';
    $order = isset($_POST['order'][0]['dir']) ? strval($_POST['order'][0]['dir']) : 'desc';
    $order_by=$sort." ".$order;

    $where_custom = '';
    $where_custom="user_id = ".$this->user_id;

    if ($search_value != '')
    {
        foreach ($search_columns as $key => $value)
        $temp= $value." LIKE "."'%$search_value%'";
        $imp = implode(" OR ", $temp);
        $where_custom .=" AND (".$imp.") ";
    }

    $table="tiktok_config"; // เปลี่ยนชื่อตาราง
    $this->db->where($where_custom);
    $info=$this->basic->get_data($table,$where='',$select='',$join='',$limit,$start,$order_by,$group_by='');
    $this->db->where($where_custom);
    $total_rows_array=$this->basic->count_row($table,$where='',$count=$table.".id",$join='',$group_by='');
    $total_result=$total_rows_array[0]['total_rows'];

    $i=0;
    $base_url=base_url();
    foreach ($info as $key => $value)
    {
        if($this->is_demo == '1')
        $info[$i]['access_token'] = "XXXXXXXXXXX"; // ปกปิด Access Token ใน Demo Mode

        if($value['status'] == 1)
            $info[$i]['status'] = "<span class='badge badge-status text-success'><i class='fa fa-check-circle green'></i> ".$this->lang->line('Active')."</span>";
        else
            $info[$i]['status'] = "<span class='badge badge-status text-danger'><i class='fa fa-check-circle red'></i> ".$this->lang->line('Inactive')."</span>";

        $info[$i]['action'] = "";

        if($this->is_demo != '1')
        $info[$i]['action'] .= "<div style='min-width:130px'><a href='".base_url('social_apps/edit_tiktok_settings/').$value['id']."' class='btn btn-outline-warning btn-circle' data-toggle='tooltip' data-placement='top' title='".$this->lang->line('Edit APP Settings')."'><i class='fas fa-edit'></i></a> ";

        if($this->is_demo != '1')
        $info[$i]['action'] .= "<a href='#' csrf_token='".$this->session->userdata('csrf_token_session')."' class='btn btn-outline-danger btn-circle delete_app_tiktok' table_id='".$value['id']."' data-toggle='tooltip' data-placement='top' title='".$this->lang->line('Delete this APP')."'><i class='fas fa-trash-alt'></i></a></div>"; // เปลี่ยน Class สำหรับปุ่ม Delete

        $info[$i]["action"] .="<script>$('[data-toggle=\"tooltip\"]').tooltip();</script>";
        $i++;
    }

    $data['draw'] = (int)$_POST['draw'] + 1;
    $data['recordsTotal'] = $total_result;
    $data['recordsFiltered'] = $total_result;
    $data['data'] = convertDataTableResult($info, $display_columns ,$start,$primary_key="id");

    echo json_encode($data);
}


public function add_tiktok_settings()
{
    $data['tiktok_settings'] = array();
    $data['page_title_tiktok'] = $this->lang->line('TikTok App Settings');
    $data['title'] = $this->lang->line('TikTok App Settings');
    $data['body'] = 'admin/social_apps/tiktok_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}




public function edit_tiktok_settings($table_id=0)
{
    if($this->is_demo == '1')
    {
        echo "<h2 style='text-align:center;color:red;border:1px solid red; padding: 10px'>This feature is disabled in this demo.</h2>";
        exit();
    }
    if($table_id==0) exit;
    $tiktok_settings = $this->basic->get_data('tiktok_config',array("where"=>array("id"=>$table_id)));
    if (!isset($tiktok_settings[0])) $tiktok_settings = array();
    else $tiktok_settings = $tiktok_settings[0];
    $data['tiktok_settings'] = $tiktok_settings;
    $data['page_title_tiktok'] = $this->lang->line('TikTok App Settings');
    $data['title'] = $this->lang->line('TikTok App Settings');
    $data['body'] = 'admin/social_apps/tiktok_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}



public function tiktok_settings_update_action()
{
    if($this->is_demo == '1')
    {
        echo "<h2 style='text-align:center;color:red;border:1px solid red; padding: 10px'>This feature is disabled in this demo.</h2>";
        exit();
    }

    if (!isset($_POST)) exit;

    $table_id = $this->input->post('table_id',true);

    if ($this->form_validation->run() == FALSE)
    {
        if($table_id == 0) $this->add_tiktok_settings();
        else $this->edit_tiktok_settings($table_id);
    }
    else
    {
        $this->csrf_token_check();
        $insert_data['app_name'] = strip_tags($this->input->post('app_name',true));
        $insert_data['account_id'] = strip_tags($this->input->post('account_id',true));
        $insert_data['access_token'] = strip_tags($this->input->post('access_token'));
        $insert_data['refresh_token'] = strip_tags($this->input->post('refresh_token'));
        $insert_data['user_id'] = $this->user_id;

        $status = $this->input->post('status');
        if($status=='') $status='0';
        $insert_data['status'] = $status;

        if ($table_id != 0) {
            $this->basic->update_data('tiktok_config', array('id' => $table_id,"user_id"=>$this->user_id), $insert_data);
        }
        else
            $this->basic->insert_data('tiktok_config', $insert_data);

        $this->session->set_flashdata('success_message', '1');
        redirect(base_url('social_apps/tiktok_settings'),'location');

    }
}


public function tiktok_login_button($id)
{
    // Implement logic for TikTok login if needed
}



//*** End TikTok setting **///


////*** Start Line Oa **////

public function line_settings()
{
    $data['page_title_line'] = $this->lang->line('LINE OA Settings'); // ตั้งชื่อตัวแปรให้สอดคล้องกัน
    $data['title'] = $this->lang->line('LINE OA Settings');
    $data['body'] = 'admin/social_apps/line_app_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}


public function line_settings_data()
{
    $this->ajax_check();
    $search_value = $_POST['search']['value'];
    $display_columns = array("#","CHECKBOX",'id', 'app_name', 'channel_id', 'channel_secret', 'status', 'action'); // ปรับคอลัมน์ให้ตรงกับตาราง line_oa_config
    $search_columns = array('app_name', 'channel_id'); // ปรับคอลัมน์ที่ใช้ค้นหา

    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $start = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $limit = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $sort_index = isset($_POST['order'][0]['column']) ? strval($_POST['order'][0]['column']) : 2;
    $sort = isset($display_columns[$sort_index]) ? $display_columns[$sort_index] : 'id';
    $order = isset($_POST['order'][0]['dir']) ? strval($_POST['order'][0]['dir']) : 'desc';
    $order_by=$sort." ".$order;

    $where_custom = '';
    $where_custom="user_id = ".$this->user_id;

    if ($search_value != '')
    {
        foreach ($search_columns as $key => $value)
        $temp= $value." LIKE "."'%$search_value%'";
        $imp = implode(" OR ", $temp);
        $where_custom .=" AND (".$imp.") ";
    }

    $table="line_oa_config"; // เปลี่ยนชื่อตาราง
    $this->db->where($where_custom);
    $info=$this->basic->get_data($table,$where='',$select='',$join='',$limit,$start,$order_by,$group_by='');
    $this->db->where($where_custom);
    $total_rows_array=$this->basic->count_row($table,$where='',$count=$table.".id",$join='',$group_by='');
    $total_result=$total_rows_array[0]['total_rows'];

    $i=0;
    $base_url=base_url();
    foreach ($info as $key => $value)
    {
        if($this->is_demo == '1')
        $info[$i]['channel_access_token'] = "XXXXXXXXXXX"; // ปกปิด Channel Access Token ใน Demo Mode

        if($value['status'] == 1)
            $info[$i]['status'] = "<span class='badge badge-status text-success'><i class='fa fa-check-circle green'></i> ".$this->lang->line('Active')."</span>";
        else
            $info[$i]['status'] = "<span class='badge badge-status text-danger'><i class='fa fa-check-circle red'></i> ".$this->lang->line('Inactive')."</span>";

        $info[$i]['action'] = "";

        if($this->is_demo != '1')
        $info[$i]['action'] .= "<div style='min-width:130px'><a href='".base_url('social_apps/edit_line_settings/').$value['id']."' class='btn btn-outline-warning btn-circle' data-toggle='tooltip' data-placement='top' title='".$this->lang->line('Edit APP Settings')."'><i class='fas fa-edit'></i></a> ";

        if($this->is_demo != '1')
        $info[$i]['action'] .= "<a href='#' csrf_token='".$this->session->userdata('csrf_token_session')."' class='btn btn-outline-danger btn-circle delete_app_line' table_id='".$value['id']."' data-toggle='tooltip' data-placement='top' title='".$this->lang->line('Delete this APP')."'><i class='fas fa-trash-alt'></i></a></div>"; // เปลี่ยน Class สำหรับปุ่ม Delete

        $info[$i]["action"] .="<script>$('[data-toggle=\"tooltip\"]').tooltip();</script>";
        $i++;
    }

    $data['draw'] = (int)$_POST['draw'] + 1;
    $data['recordsTotal'] = $total_result;
    $data['recordsFiltered'] = $total_result;
    $data['data'] = convertDataTableResult($info, $display_columns ,$start,$primary_key="id");

    echo json_encode($data);
}


public function add_line_settings()
{
    $data['line_settings'] = array();
    $data['page_title_line'] = $this->lang->line('LINE OA Settings');
    $data['title'] = $this->lang->line('LINE OA Settings');
    $data['body'] = 'admin/social_apps/line_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}




public function edit_line_settings($table_id=0)
{
    if($this->is_demo == '1')
    {
        echo "<h2 style='text-align:center;color:red;border:1px solid red; padding: 10px'>This feature is disabled in this demo.</h2>";
        exit();
    }
    if($table_id==0) exit;
    $line_settings = $this->basic->get_data('line_oa_config',array("where"=>array("id"=>$table_id)));
    if (!isset($line_settings[0])) $line_settings = array();
    else $line_settings = $line_settings[0];
    $data['line_settings'] = $line_settings;
    $data['page_title_line'] = $this->lang->line('LINE OA Settings');
    $data['title'] = $this->lang->line('LINE OA Settings');
    $data['body'] = 'admin/social_apps/line_settings'; // ใช้ View ที่คุณสร้าง
    $this->_viewcontroller($data);
}


public function line_settings_update_action()
{
    if($this->is_demo == '1')
    {
        echo "<h2 style='text-align:center;color:red;border:1px solid red; padding: 10px'>This feature is disabled in this demo.</h2>";
        exit();
    }

    if (!isset($_POST)) exit;

    $table_id = $this->input->post('table_id',true);

    if ($this->form_validation->run() == FALSE)
    {
        if($table_id == 0) $this->add_line_settings();
        else $this->edit_line_settings($table_id);
    }
    else
    {
        $this->csrf_token_check();
        $insert_data['app_name'] = strip_tags($this->input->post('app_name',true));
        $insert_data['channel_id'] = strip_tags($this->input->post('channel_id',true));
        $insert_data['channel_secret'] = strip_tags($this->input->post('channel_secret',true));
        $insert_data['channel_access_token'] = strip_tags($this->input->post('channel_access_token'));
        $insert_data['user_id'] = $this->user_id;
        $insert_data['page_id'] = 0; // คุณอาจต้องปรับ Logic ตรงนี้เพื่อระบุ page_id ที่ถูกต้อง

        $status = $this->input->post('status');
        if($status=='') $status='0';
        $insert_data['status'] = $status;

        if ($table_id != 0) {
            $this->basic->update_data('line_oa_config', array('id' => $table_id,"user_id"=>$this->user_id), $insert_data);
        }
        else
            $this->basic->insert_data('line_oa_config', $insert_data);

        $this->session->set_flashdata('success_message', '1');
        redirect(base_url('social_apps/line_settings'),'location');

    }
}




public function line_login_button($id)
{
    // Implement logic for LINE OA login if needed
}





///*** End Line Oa ***/////
?>