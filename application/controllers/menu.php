<?php
class menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-menu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Menu', 'required|min_length[3]', [
        'required' => 'Kode Menu Harus diisi','min_lenght' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|min_length[3]', [
        'required' => 'Nama Menu Harus diisi','min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [
        'required' => 'Harga Menu Harus diisi','numeric' => 'Diisi dengan tipe data angka'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-input-menu');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->input->post('gambar')
            ];

            $this->load->view('view-output-menu', $data);

        }
    }
}