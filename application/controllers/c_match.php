<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_match extends CI_Controller
{
	public $data = array();
	function __construct()
	{
		parent::__construct();
		if(empty($_SESSION['id']))
		{
			redirect(site_url('sysladm'));
		}
		$this->load->view('Manage/header');
		$this->load->view('Manage/footer');		
		$this->load->model('m_tournament');
		$this->load->model('m_schedule');
		$this->load->model('m_match');
		//load data table
		$this->data['tnumrows'] = $this->m_tournament->get_row_tournament();
		$this->data['team_count'] = $this->m_schedule->get_team_count($this->t_helper->get_tid());
		$this->data['schedule'] = $this->m_schedule->get_row_schedule();
		$this->data['tdropdown'] = $this->m_tournament->load_dropdown_tlist();
		$this->data['mdropdown'] = $this->m_tournament->load_dropdown_mlist();
		$this->data['mtour'] = $this->m_tournament->load_match_tournament();
	}

	public function index()
	{
		$this->data['tid'] = $this->t_helper->get_tid();
		$this->data['list_match'] = $this->m_match->show_match_list();
		$this->template->load('Manage/template', 'Manage/match/match', $this->data);
	}
}
?>