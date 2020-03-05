<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function welcome_message()
	{
		$this->load->view('welcome_message');
	}
	public function document()
	{
		$this->load->view('document');
	}
	
	public function footer()
	{
		$this->load->view('footer');
	}
	public function header()
	{
		$this->load->view('header');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function registration()
	{
		$this->load->library("form_validation");
	$this->load->view('registration');
	}
	public function insertdata(){
		
		$parent_id=$this->input->post("parent_id");
		$name=$this->input->post("customer_name");
		$fname=$this->input->post("fname");
		
		$address=$this->input->post("current_address");
		$city=$this->input->post("city");
		$state=$this->input->post("state");
		$area=$this->input->post("area");
		$pincode=$this->input->post("pin");
		$mobile=$this->input->post("mobilenumber");
		$gender=$this->input->post("gender");
		$pannumber=$this->input->post("pannumber");
		$adharnum=$this->input->post("adhaarnumber");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		
		$data=array(
				"parent_id" =>$parent_id,
				"customer_name" =>$name,
				"fname" =>$fname,
				"current_address" =>$address,
				"city" =>$city,
				"state" =>$state,
				"area" =>$area,
				"mobilenumber"=>$mobile,
				"pin" =>$pincode,
				"gender"=>$gender,
				"pannumber" =>$pannumber,
				"adhaarnumber" =>$adharnum,
				"email" =>$email,
				"password" =>$password
				
		);
		$this->load->model('viewmodel');
		$this->viewmodel->insertCustomer($data);
		redirect(base_url()."index.php/welcome/registration/success");
		}
		
	
	
	
	public function slider()
	{
		$this->load->view('slider');
	}
	
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */