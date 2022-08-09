<?php
class Helper {
    public function loadView($view, $data = null)
    {
        $this->CI = & get_instance();
        $loadView = $this->CI->load->view($view, $data, TRUE);
        return $loadView;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}