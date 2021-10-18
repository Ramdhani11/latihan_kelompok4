<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus Diisi',
            'min_length' => 'Input min 3 karakter'
        ]);
        $this->form_validation->set_rules('nama', 'nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus Diisi',
            'min_length' => 'Input min 3 karakter'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('view-form-matakuliah');
        } else {

            $kode = $this->input->post('kode', true);
            $nama = $this->input->post('nama', true);
            $sks = $this->input->post('sks', true);

            $data = [
                'kode' => $kode,
                'nama' => $nama,
                'sks' => $sks
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
