<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pdf extends CI_Controller
{
    public function upadte_pdf()
    {
        $title = $this->input->post("formdata")["title"];
        $url = $this->input->post("formdata")["url"];
        $sort = $this->input->post("formdata")["sort"];
        $status = $this->input->post("formdata")["status"];

        for ($i = 0; $i < count($title); $i++) {
            if ($title[$i] != "" || $url[$i] != "" || $sort[$i] != "" || $status[$i] != "") {
                $data = array(
                    "title" => $title[$i],
                    "chapter_id"=>45,
                    "url"=>$url[$i],


                );
            }
        }
    }
}
