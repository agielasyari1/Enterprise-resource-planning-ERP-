<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bsc extends CI_Controller
{

    public function togaf()
    {
        $data['title'] = "Metodologi Togaf";


        $this->template->load('templates/dashboard', 'bsc/togaf', $data);
    }

    public function per1()
    {
        $data['title'] = "Perspektif mahasiswa,mitra,masyarakat";


        $this->template->load('templates/dashboard', 'bsc/per1', $data);
    }

    public function per2()
    {
        $data['title'] = "Perspektif bisnis internal";


        $this->template->load('templates/dashboard', 'bsc/per2', $data);
    }

    public function per3()
    {
        $data['title'] = "Perspektif Pertumbuhan dan Pembelajaran";


        $this->template->load('templates/dashboard', 'bsc/per3', $data);
    }

    public function per4()
    {
        $data['title'] = "Perspektif Pertumbuhan dan Pembelajaran";


        $this->template->load('templates/dashboard', 'bsc/per4', $data);
    }

    public function poster()
    {
        $data['title'] = "Poster Value Chain";


        $this->template->load('templates/dashboard', 'bsc/poster', $data);
    }

    public function map()
    {
        $data['title'] = "Strategi Map";


        $this->template->load('templates/dashboard', 'bsc/map', $data);
    }

    public function cdm()
    {
        $data['title'] = "CDM/PDM";


        $this->template->load('templates/dashboard', 'bsc/cdm', $data);
    }
}
