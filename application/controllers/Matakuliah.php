<?php 
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $data = [
            'kode' => $this->input->POST('kode');
            'nama' => $this->input->POST('nama');
            'sks' => $this->input->POST('sks');
        ]
    }
}
?>