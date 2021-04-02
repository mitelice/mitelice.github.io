<?php
class C_commerce extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function bankForm() {
        // เรียกหน้า Form
        $this->load->view('bankForm');
    }
}
?>