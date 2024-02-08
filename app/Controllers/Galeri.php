<?php

namespace App\Controllers;

use App\Models\Galeri_model;
use App\Models\Konfigurasi_model;

use CodeIgniter\Exceptions\PageNotFoundException;
class Galeri extends BaseController
{
    // Galeri
    public function kategori($i)
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_galeri      = new Galeri_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $galeri        = $m_galeri->kategori($i);

        $data = ['title'  => 'Galeri Gambar',
            'description' => 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'galeri'      => $galeri,
            'konfigurasi' => $konfigurasi,
            'content'     => 'galeri/index',
        ];
        echo view('layout/wrapper', $data);
    }
    public function index()
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_galeri      = new Galeri_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $galeri        = $m_galeri->listing();

        $data = ['title'  => 'Galeri Gambar',
            'description' => 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => 'Galeri Gambar ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'galeri'      => $galeri,
            'konfigurasi' => $konfigurasi,
            'content'     => 'galeri/index',
        ];
        echo view('layout/wrapper', $data);
    }
    public function read($slug_berita)
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_berita      = new Galeri_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $berita        = $m_berita->detail($slug_berita);
        $detail        = $m_berita->gallerydetail($slug_berita);
        // echo $berita["id_kategori_galeri"];
        // die();
        $kategori = $m_berita->kategori($berita["slug_kategori_galeri"]);

        // Update hits

        $data = ['title'  => $berita['judul_galeri'],
            'description' => $berita['judul_galeri'],
            'keywords'    => $berita['judul_galeri'],
            'galeri'      => $berita,
            'detail'      => $detail,
            'kategori'      => $kategori,
            'content'     => 'galeri/read',
        ];
        echo view('layout/wrapper', $data);
    }
    public function success(){
        $data = [
        'content'     => 'galeri/success',
        ];
    echo view('layout/wrapper', $data);
    }
    public function beli($slug_berita)
    {
        
        helper('form');
        
        $m_konfigurasi = new Konfigurasi_model();
        $m_berita      = new Galeri_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $berita        = $m_berita->detail($slug_berita);
        $detail        = $m_berita->gallerydetail($slug_berita);
        // echo $berita["id_kategori_galeri"];
        // die();
        $kategori = $m_berita->kategori($berita["slug_kategori_galeri"]);

        // Update hits
         // Start validasi
         if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_lengkap' => 'required',
            ]
        )) {
            $request = \Config\Services::request();

                $p= $request->getPost();
                unset($p["csrf_test_name"]); 
               $db = db_connect();
               $db->table('kurban')->insert($p);
               
               if(!$My_newly_inserted_ID = $db->insertID()){
                 die("There was an error inserting a record.");
               }
            
            return $this->success();
        }

        $data = ['title'  => $berita['judul_galeri'],
            'description' => $berita['judul_galeri'],
            'keywords'    => $berita['judul_galeri'],
            'galeri'      => $berita,
            'detail'      => $detail,
            'kategori'      => $kategori,
            'content'     => 'galeri/form',
        ];
        echo view('layout/wrapper', $data);
    }
}
