<?php
class M_logout extends CI_Model
{
    public function aksi_logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        
        redirect('dashboard');
    }
}
