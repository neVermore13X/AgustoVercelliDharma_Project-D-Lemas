<?php

class Inputan extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-input');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lhr' => $this->input->post('tgl_lhr'),
            'tmpt_lhr' => $this->input->post('tmpt_lhr'),
            'alamat' => $this->input->post('alamat'),
            'jns_klmn' => $this->input->post('jns_klmn'),
            'agama' => $this->input->post('agama'),
        ];
        $this->load->view('form-output', $data);
    }
}
