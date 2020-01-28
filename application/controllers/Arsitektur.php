<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsitektur extends CI_Controller
{

    public function visi()
    {
        $data['title'] = "Visi Misi";


        $this->template->load('templates/dashboard', 'arsitek/visi', $data);
    }

    public function activity()
    {
        $data['title'] = "Activity Diagram";


        $this->template->load('templates/dashboard', 'arsitek/activity', $data);
    }

    public function usecase()
    {
        $data['title'] = "Usecase Diagram";


        $this->template->load('templates/dashboard', 'arsitek/usecase', $data);
    }

    public function swot()
    {
        $data['title'] = "Analisis SWOT";


        $this->template->load('templates/dashboard', 'arsitek/swot', $data);
    }


    public function aplikasi()
    {
        $data['title'] = "Arsitektur Aplikasi";


        $this->template->load('templates/dashboard', 'arsitek/aplikasi', $data);
    }

    public function teknologi()
    {
        $data['title'] = "Arsitektur Teknologi";


        $this->template->load('templates/dashboard', 'arsitek/teknologi', $data);
    }

    public function topologi()
    {
        $data['title'] = "Arsitektur Topologi";


        $this->template->load('templates/dashboard', 'arsitek/topologi', $data);
    }
}
