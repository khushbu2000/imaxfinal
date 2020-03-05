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
	public function index(){
$this->load->view('dashboard');
}
	public function topmenu(){
$this->load->view('topmenu');
}
public function widthdrawlhistory()
{
$this->load->view('widthdrawlhistory');	
}
public function editprofile()
{
		//$data['pageTitle'] = 'Editprofile';
			//$data['smallTitle'] = ' Editprofile';
			//$data['mainPage'] = 'dashboard';
			//$data['subPage'] = 'Editprofile';
			//$data['title'] = 'Editprofile';
			//$data['header'] = 'header';
			//$data['footer'] = 'footer';
			//$data['mainContent'] = 'customer/editprofile';
			$this->load->view('editprofile');
		
                 }
                 }
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */