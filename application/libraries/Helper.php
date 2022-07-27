<?php
class Helper {
    public function loadView($view, $data = null)
    {
        $this->CI = & get_instance();
        $loadView = $this->CI->load->view($view, $data, TRUE);
        return $loadView;
    }

}