<?php 
class Dlemas extends CI_Controller 
{ 
    public function index() 
    { 
        $this->load->view('view-form-dlemas'); 
    } 

    public function cetak() 
    { 
        $this->form_validation->set_rules ('nama', 'nama Dlemas', 
        'required|min_length[3]', [
             'required' => 'Nama harus diisi', 
             'min_lenght' => 'nama terlalu pendek' ]);
              
             $this->form_validation->set_rules('kelas', 'kelas Dlemas', 
        'required|min_length[2]', [ 
            'required' => 'Kelas harus diisi',
            'min_lenght' => 'Kelas terlalu pendek' ]); 
        
        if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-dlemas'); 
        } else { 
            $data = [ 
                'nama' => $this->input->post('nama'), 
                'nis' => $this->input->post('nis'), 
                'kelas' => $this->input->post('kelas'),
                'jenisKelamin' => $this->input->post('jenisKelamin'), 
                'tempatLahir' => $this->input->post('tempatLahir'), 
                'tanggalLahir' => $this->input->post('tanggalLahir'),
                'alamat' => $this->input->post('alamat'), 
                'agama' => $this->input->post('agama')
                ]; 
                
                $this->load->view('view-data-dlemas', $data); 
            } 
        } 
    }