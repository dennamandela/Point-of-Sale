<?php
	class M_order extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function data_transaksi(){
			$this->db->select('*');
			$this->db->from('transaksi_detail');
			$this->db->join('barang','transaksi_detail.barang_id=barang.barang_id');
			return $this->db->get();
		}

		function simpan_belanja(){
			$nama_barang = $this->input->post('nama_barang');
			$qty = $this->input->post('qty');
			$idbarang = $this->db->get_where('barang',array('nama_barang'=>$nama_barang))->row_array();
			$data = array('barang_id'=>$idbarang['barang_id'],
						  'qty'=>$qty,
						  'harga'=>$idbarang['harga'],
						  'status'=>'0');
			$this->db->insert('transaksi_detail',$data);
		}

		function delete($id){
			$this->db->where('detail_id',$id);
			$this->db->delete('transaksi_detail');
		}

		function selesai_transaksi($data)
    {
        $this->db->insert('transaksi',$data);
        $last_id=  $this->db->query("select transaksi_id from transaksi order by transaksi_id desc")->row_array();
        $this->db->query("update transaksi_detail set transaksi_id='".$last_id['transaksi_id']."' where status='0'");
        $this->db->query("update transaksi_detail set status='1' where status='0'");
    }

		function laporan_default()
		{
			$query="SELECT t.tanggal_transaksi,l.username,sum(td.harga*td.qty) as total
					FROM transaksi as t,transaksi_detail as td,login as l
					WHERE td.transaksi_id=t.transaksi_id and l.id_pengguna=t.id_pengguna
					group by t.transaksi_id";
			return $this->db->query($query);
		}

		function laporan_periode($tanggal1,$tanggal2)
		{
			$query="SELECT t.tanggal_transaksi,l.username,sum(td.harga*td.qty) as total
					FROM transaksi as t,transaksi_detail as td,login as l
					WHERE td.transaksi_id=t.transaksi_id and l.id_pengguna=t.id_pengguna
					and t.tanggal_transaksi between '$tanggal1' and '$tanggal2'
					group by t.transaksi_id";
			return $this->db->query($query);
		}
	}
?>