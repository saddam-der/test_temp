<?php

class admin extends CI_Controller {
	function __construct(){
		parent::__construct();	
		$this->load->database();	
		$this->load->library('datatables');
		$this->load->library('pdf');
		$this->load->model('M_admin');
		$this->load->helper('url');
	}

	public function index()
	{	
		// CHART JS
		$query =  $this->db->query("SELECT COUNT(id_pengaduan) as count,MONTHNAME(tgl_pengaduan) as month_name FROM pengaduan WHERE YEAR(tgl_pengaduan) = '" . date('Y') . "'
      	GROUP BY YEAR(tgl_pengaduan),MONTH(tgl_pengaduan)"); 
      	$record = $query->result();
      	$data = [];
      	foreach($record as $row) {
            	$data['label'][] = $row->month_name;
				$data['data'][] = (int) $row->count; 
		}
		$data['chart_data'] = json_encode($data);
		// CHART JS
		$data['navbran'] = 'Dashboard';
		$data['title'] = 'Dashboard';

		$data['total_user'] = $this->M_admin->hitungJumlahrakyat();
      	$data['total_proses'] = $this->M_admin->jumlah_proses();
		$data['total_selesai'] = $this->M_admin->jumlah_selesai();
		$data['total_kasus'] = $this->M_admin->hitungJumlahkasus();
		$data['navac'] = 'active';
		$this->load->view('admin/dashboard',$data);
	}

	public function table(){
		$data['total_user'] = $this->M_admin->hitungJumlahrakyat();
		$data['navbran'] = 'Table';
		$data['title'] = 'Table User';
		$data['navac'] = 'active';
		$this->load->view('admin/table_rud',$data);
	}

	public function userprofile(){
		
		$data['navbran'] = 'Profile';
		$data['title'] = 'Profile';
		$data['navac'] = 'active';
		$this->load->view('admin/user_profile',$data);
	}

	function get_rakyat_json() { //get product data and encode to be JSON object
		echo $this->M_admin->get_all_rakyat();
	}

	function insert(){ //update record method
		$this->M_admin->insert_rakyat();
		 redirect('admin/table');
	}

	function update(){ //update record method
		$this->M_admin->update_rakyat();
		 redirect('admin/table');
	}
  
	function delete(){ //delete record method
		$this->M_admin->delete_rakyat();
		redirect('admin/table');
	}

	public function cetak(){
		ob_start();
		$data['user'] = $this->M_admin->get_user();
		
		$this->load->view('print', $data);

		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);

		$pdf->Output('Data Siswa.pdf', 'D');
	}	

	public function tak(){
		$this->load->library('pdf'); // change to pdf_ssl for ssl
		$html = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
		$html = $this->load->view('preview');
		$this->pdf->loadHtml($html);
			$this->pdf->render();
			$this->pdf->stream("sadsa.pdf", array("Attachment"=>0));
	}
	

	function previ(){ //delete record method
		$data['user'] = $this->M_admin->get_user();
    	$this->load->view('preview', $data);
	}

	public function pdfdetails()//CETAK PDF
	{
		$html_content = '<h3 align="center">Laporan PDF</h3>';
		$html_content .= $this->M_admin->fetch_single_details();
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("asd.pdf", array("Attachment"=>0));	
	}

	

	public function exl(){ //CETAL EXCEL
		$data = array(
			'title' => 'Laporan Excel',
			'user' => $this->M_admin->get_user()
		);
		$this->load->view('print', $data);
	}



	

	

	


}
