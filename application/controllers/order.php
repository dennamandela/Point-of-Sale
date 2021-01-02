<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct (){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_order');
		$this->load->model('m_product');
	}

	public function index() 
	{
		if(isset($_POST['submit'])){
			$this->m_order->simpan_belanja();
			redirect('order');
		}
		else
		{
			$data['transaksi'] = $this->m_order->data_transaksi()->result();
			$data['barang'] = $this->m_product->data_product()->result();
			$this->load->view('transaksi/v_orders',$data);
		}
	}

	function selesai_transaksi()
    {
        $tanggal=date('Y-m-d');
        $user=  $this->session->userdata('username');
        $id_op=  $this->db->get_where('login',array('username'=>$user))->row_array();
        $data=array('id_pengguna'=>$id_op['id_pengguna'],'tanggal_transaksi'=>$tanggal);
        $this->m_order->selesai_transaksi($data);
        redirect('order');
    }

	public function laporan_transaksi()
	{
		if(isset($_POST['submit']))
		{
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');
			$data['record'] = $this->m_order->laporan_periode($tanggal1,$tanggal2);
			$this->load->view('transaksi/laporan',$data);
		}
		else
		{
			$data['record'] = $this->m_order->laporan_default();
			$this->load->view('transaksi/laporan',$data);
		}
	}

	public function hapusitem(){
		$id = $this->uri->segment(3);
		$this->m_order->delete($id);
		redirect('order');
	}

	public function laporan_pdf(){
		$this->load->library('cfpdf');
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B','L');
		$pdf->SetFontSize(14);
		$pdf->Text(10, 10, 'Laporan Hasil Transaksi');
		$pdf->SetFont('Arial','B','L');
		$pdf->SetFontSize(10);
		$pdf->Cell(10, 10,'','',1);
		$pdf->Cell(10, 7, 'No', 1,0);
		$pdf->Cell(27, 7, 'Tanggal', 1,0);
		$pdf->cell(30, 7, 'Nama Lengkap', 1,0);
		$pdf->Cell(38, 7, 'Total Transaksi', 1,1);
		// tampilkan dari database
		$pdf->SetFont('Arial','','L');
		$data = $this->m_order->laporan_pdf();
		$no = 1;
		$total = 0;
		foreach ($data->result() as $row){
			$pdf->Cell(10, 7, $no, 1,0);
			$pdf->Cell(27, 7, $row->tanggal_transaksi, 1,0);
			$pdf->Cell(30, 7, $row->username, 1,0);
			$pdf->Cell(38, 7, $row->total, 1,1);
			$no++;
			$total=$total+$row->total;
		}
		//selesai
		$pdf->Cell(67,7,'Total',1,0,'R');
		$pdf->Cell(38,7,$total,1,0);
		$pdf->Output();
	}
}