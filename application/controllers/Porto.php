<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Porto extends CI_Controller
{

    public function sistem()
    {
        $data['title'] = "Sistem Perguruan Tinggi";


        $this->template->load('templates/dashboard', 'porto/sistem', $data);
    }

    public function infra()
    {
        $data['title'] = "Infrastruktur";


        $this->template->load('templates/dashboard', 'porto/infra', $data);
    }

    public function finansial()
    {
        $data['title'] = "Finansial";


        $this->template->load('templates/dashboard', 'porto/finansial', $data);
    }

    public function sdm()
    {
        $data['title'] = "SDM";


        $this->template->load('templates/dashboard', 'porto/sdm', $data);
    }

    public function si()
    {
        $data['title'] = "Sistem Informasi";


        $this->template->load('templates/dashboard', 'porto/si', $data);
    }

    public function pro()
    {
        $data['title'] = "Procurment Logistic";


        $this->template->load('templates/dashboard', 'porto/pro', $data);
    }
}
