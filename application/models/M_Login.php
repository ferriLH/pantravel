<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 28/09/2018
 * Time: 21.15
 */

class M_Login extends CI_Model
{
    function cek ($user,$pass){
        $tbl = "user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("(username = '$user' OR email = '$user')",NULL,FALSE);
        $this->db->where("password",$pass);
        $this->db->where("status",TRUE);
        return $this->db->get();
    }
    public function get_image_limit()
    {
        $this->db->select('*');
        $this->db->from('galeri g');
        //$this->db->join('paket p', 'p.id_paket = g.id_paket','inner');
        $this->db->limit(7);
        $this->db->order_by('id_galeri','desc');
        return $this->db->get()->result();
    }
    public function get_all_image()
    {
        $this->db->select('*');
        $this->db->from('galeri g');
        //$this->db->join('paket p', 'p.id_paket = g.id_paket','inner');
        $this->db->order_by('id_galeri','desc');
        return $this->db->get()->result();
    }
    public function get_all_paket()
    {
        $this->db->select('*');
        $this->db->from('paket p');
        $this->db->join('fasilitas f', 'f.id_paket = p.id_paket','inner');
        $this->db->group_by('p.id_paket');
        $this->db->order_by('p.destinasi','asc');
        return $this->db->get()->result();
    }
    public function get_all_fasilitas()
    {
        $this->db->select('*');
        $this->db->from('fasilitas f');
        //$this->db->join('paket p', 'f.id_paket = p.id_paket','inner');
//        $this->db->group_by('paket');
        $this->db->order_by('f.id_paket','asc');
        return $this->db->get()->result();
    }
    public function get_fasilitas_id($id)
    {
        $this->db->select('*');
        $this->db->from('fasilitas f');
        $this->db->join('paket p', 'f.id_paket = p.id_paket','inner');
        $this->db->order_by('f.fasilitas','asc');
        $this->db->where('p.id_paket',$id);
        return $this->db->get()->result();
    }
    function search($keyword)
    {
        $this->db->like('nama_gambar',$keyword);
        $this->db->order_by('id_galeri','desc');
        $query  =   $this->db->get('galeri');
        return $query->result();
    }
}