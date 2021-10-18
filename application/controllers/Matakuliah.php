<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'require|min_lenght[3]', [
            'require' => 'Kode Matakuliah Harus Diisi',
            'min_lenght[3]' => 'Kode tertalu pendek'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'require|min_lenght[3]', [
            'require' => 'Nama Matakuliah Harus Diisi',
            'min_lenght[3]' => 'Nama tertalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {

            $data = [
                'kode' => $this->input->POST('kode'),
                'nama' => $this->input->POST('nama'),
                'sks' => $this->input->POST('sks')
            ];
        }



        $this->load->view('view-data-matakuliah');
    }
}
