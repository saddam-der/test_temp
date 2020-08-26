<?php
class m_login extends CI_Model
{
    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('login', ['username' => $username])->row_array();
        // Nyari User
        if ($user) {
            // Ini kalo passwordnya bener
            if (password_verify($password, $user['password']))
            // ini gua gk tau apaan namanya
            {
                $data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                // nentuin dia nanti masuknya kemana berdasarkan level
                if ($user['level'] == "admin") {
                    redirect('admin/index');
                } elseif ($user['level'] == "petugas") {
                    redirect('petugas/index');
                } else {
                    redirect('masyarakat/index');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi yang anda masukkan salah!</div>');
                redirect('auth');
            }
        } else {
            // ini kalo email belum terdaftar
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        
    }

}