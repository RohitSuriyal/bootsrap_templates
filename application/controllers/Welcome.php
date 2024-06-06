<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	//this is the controller where i have user row and than applied sm and make the image object fit
	public function responsive_divs()
	{
		$this->load->view("output");
	}
	public function pdfnotes()
	{
		$this->load->view("pdf_notes");
	}
	public function popup()
	{
		$this->load->view("popup");
	}
	public function first_image()
	{
		$this->load->view("background");
	}

	public function pdfdata(){
		$title=$this->input->post("nptitle[]");
		$url=$this->input->post("npurl[]");
		$order=$this->input->post("npsort_order[]");
		$status=$this->input->post("chapter_note_status[]");
		for($i=0;$i<count($title);$i++){
			$this->load->model("pdf");
            $data=array(
				"title"=>$title[$i],
				"url"=>$url[$i],
				"sort_order"=>$order[$i],
				"status"=>$status[$i],

			);
			$result=$this->pdf->insert_pdf($data);
         
			
		   
		}
		echo json_encode("this is very good");
		
		
	}
	public function getdata(){

		$this->load->model("pdf");
		$result=$this->pdf->getdata();
		if($result){
			echo json_encode($result);
		}
		else{
			return "this is the error";
		}



	}
}
