<?php 

class M_Data_Booking extends CI_Model{
	function tampil_data(){
		return $this->db->get('booking');
	}
    function getOnProses(){
        $this->db->where('status',0);
        $query = $this->db->get('booking');
        return $query->result();
    }
    function done(){
        $this->db->where('status',1);
        $query = $this->db->get('booking');
        return $query->result();
    }
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 function get_paket(){
        return $this->db->get('paket');
    }
    function get_destinasi(){
        return $this->db->get('paket');
    }
    function insertBooking($fname,$lname,$email,$noKTP,$noHP,$paket,$tgl,$jml,$alamat){
        $data = array(
            'id_booking'    =>'',
            'nama_depan'    =>$fname,
            'nama_belakang' =>$lname,
            'email'         =>$email,
            'no_ktp'        =>$noKTP,
            'no_hp'         =>$noHP,
            'paket'         =>$paket,
            'tgl_berangkat' =>$tgl,
            'jml_peserta'   =>$jml,
            'alamat'        =>$alamat,
            'status'        =>0
        );
        $this->db->insert('booking',$data);
    }
}