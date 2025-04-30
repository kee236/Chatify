<?php

class Dialogflow_lib {
    private $dialogflow;

    public function __construct() {
        // ตั้งค่าการเชื่อมต่อ Dialogflow
        $this->dialogflow = new \Google\Cloud\Dialogflow\V2\SessionsClient();
    }

    public function create_agent($agent_name) {
        // สร้าง Agent ใหม่
        $agent = new \Google\Cloud\Dialogflow\V2\Agent();
        $agent->setDisplayName($agent_name);
        $this->dialogflow->createAgent($agent);
    }

    public function create_intent($intent_name) {
        // สร้าง Intent ใหม่
        $intent = new \Google\Cloud\Dialogflow\V2\Intent();
        $intent->setDisplayName($intent_name);
        $this->dialogflow->createIntent($intent);
    }
}
