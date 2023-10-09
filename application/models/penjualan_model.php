<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Penjualan_model extends CI_Model 
{
    // Deklarasi nama tabel
    private $table = 'komputer';
    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }                     

    // function menyimpan data pemesanan
    public function save()
    {
        $data = array(
            "merek" => $this->input->post('merek'),
            "prosesor" => $this->input->post('prosesor'),
            "RAM" => $this->input->post('RAM'),
            "garansi" => $this->input->post('garansi'),
            "harga" => $this->input->post('harga'),
            "tanggal_pembelian" => $this->input->post('tanggal_pembelian')

        );
        
        return $this->db->insert($this->table, $data);
    }
    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id',$id);
        $query = $this->db->get();
        return $query->result();

    }

    public function update()
    {
     $data = array(
        "merek" => $this->input->post('merek'),
        "prosesor" => $this->input->post('prosesor'),
        "RAM" => $this->input->post('RAM'),
        "garansi" => $this->input->post('garansi'),
        "harga" => $this->input->post('harga'),
        "tanggal_pembelian" => $this->input->post('tanggal_pembelian')
        
     );   
     $this->db->where('id', $this->input->post('id'));
    return $this->db->update($this->table,$data);
}
public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}


/* End of file Pemesanan_model.php and path \application\models\pemesanan\Pemesanan_model.php */
