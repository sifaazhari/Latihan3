<?php
class mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }
    function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }

    function hapus($nim)
    {
        $this->m_mahasiswa->hapus($nim);

        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }
    function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'nim'     => $this->input->post('nim'),  
                        'nama'  => $this->input->post('nama'),  
                        'jurusan'   => $this->input->post('jurusan'),  
                        'alamat' => $this->input->post('alamat')  
                        );  
        //insert data into database table.  
        $this->db->insert('mahasiswa',$data);  
  
        redirect("mahasiswa/index");  
    }  
}