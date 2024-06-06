<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pdf extends CI_Model {

 public function insert_pdf($data){
    $this->db->insert("cnb_chapter_notes",$data);
   


 }
 public function getdata(){
    $query = $this->db->get("cnb_chapter_notes");
    $output = $query->result_array(); // Fetches the result as an array of associative arrays
   if($output){
    return $output;
   }
   else{
    return "this is the error";
   }
 }





}