<?php
class M_regis extends CI_Model
{
    public function rakyat_regis()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|min_length[15]|max_length[16]', [
            'required' => 'Mohon masukkan NIK!',
        ]);
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Mohon masukkan nama lengkap anda!'
        ]);
        $this->form_validation->set_rules('username', 'username', 'required|trim', [
            'required' => 'Mohon masukkan username anda!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => 'Mohon masukkan kata sandi!',
            'min_length' => 'Kata Sandi terlalu pendek'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Mohon masukkan email anda!'
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/m_register');
            
        } else {
            $data = array(
                'nik' => $this->input->post('nik'),
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                
            );

            $this->db->insert('masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda berhasil di tambahkan</div>');
            redirect('auth');
        }
    }

}