<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek_login();

        // $this->load->model('Admin_model', 'admin');
    }

    public function rencana()
    {
        $data['title'] = "Perencanaan Arsitektur Enterprise";


        $this->template->load('templates/dashboard', 'sistem/rencana', $data);
    }

    public function akademik()
    {
        $data['title'] = "Sistem Informasi Akademik";


        $this->template->load('templates/dashboard', 'sistem/akademik', $data);
    }

    public function hrdc()
    {
        $data['title'] = "Sistem Informasi HRDC";


        $this->template->load('templates/dashboard', 'sistem/hrdc', $data);
    }

    public function IT()
    {
        $data['title'] = "Sistem Informasi I/T Infrastruktur";


        $this->template->load('templates/dashboard', 'sistem/it', $data);
    }

    public function uang()
    {
        $data['title'] = "Sistem Informasi Keuangan";


        $this->template->load('templates/dashboard', 'sistem/uang', $data);
    }

    public function koperasi()
    {
        $data['title'] = "Sistem Informasi Koperasi";


        $this->template->load('templates/dashboard', 'sistem/koperasi', $data);
    }

    public function kurikulum()
    {
        $data['title'] = "Sistem Informasi Kurilukum";


        $this->template->load('templates/dashboard', 'sistem/kurikulum', $data);
    }

    public function lab()
    {
        $data['title'] = "Sistem Informasi Laboratorium";


        $this->template->load('templates/dashboard', 'sistem/lab', $data);
    }

    public function logistik()
    {
        $data['title'] = "Sistem Informasi Logistik";


        $this->template->load('templates/dashboard', 'sistem/logistik', $data);
    }

    public function gaji()
    {
        $data['title'] = "Sistem Informasi Penggajian";


        $this->template->load('templates/dashboard', 'sistem/gaji', $data);
    }

    public function perpus()
    {
        $data['title'] = "Sistem Informasi Perpustakaan";


        $this->template->load('templates/dashboard', 'sistem/perpus', $data);
    }

    public function poliklinik()
    {
        $data['title'] = "Sistem Informasi poliklinik";


        $this->template->load('templates/dashboard', 'sistem/poliklinik', $data);
    }
}
