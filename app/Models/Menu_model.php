<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_model extends Model
{
    // Menu berita
    public function berita()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.id_kategori,berita.icon, berita.ringkasan, berita.gambar, kategori.nama_kategori, kategori.slug_kategori');
        $builder->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $builder->where(['status_berita' => 'Publish', 'jenis_berita' => 'Berita']);
        $builder->groupBy('berita.id_kategori');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // Menu profil
    public function profil()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.judul_berita, berita.icon, berita.ringkasan, berita.gambar, berita.slug_berita, berita.id_berita');
        $builder->where(['status_berita' => 'Publish', 'jenis_berita' => 'Profil']);
        $query = $builder->get();

        return $query->getResultArray();
    }
    
    public function galery()
    {
        $builder = $this->db->table('galeri');
        $builder->select('*');
        $builder->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri = galeri.id_kategori_galeri', 'LEFT');
        $builder->where(['jenis_galeri' => 'Galeri']);
        $builder->orderBy("id_galeri" , "desc");
        $builder->limit(5);
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function bestsaller()
    {
        $builder = $this->db->table('galeri');
        $builder->select('*');
        $builder->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri = galeri.id_kategori_galeri', 'LEFT');
        $builder->where(['slug_kategori_galeri' => 'best-sellers']);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function newproduk()
    {
        $builder = $this->db->table('galeri');
        $builder->select('*');
        $builder->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri = galeri.id_kategori_galeri', 'LEFT');
        $builder->orderby('galeri.tanggal' , 'desc');
        $builder->where("jenis_galeri !=","Homepage");
        $builder->limit(9);
        $query = $builder->get();

        return $query->getResultArray();
    }
    

    public function slide()
    {
        $builder = $this->db->table('galeri');
        $builder->select('*');
        $builder->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri = galeri.id_kategori_galeri', 'LEFT');
        $builder->orderby('galeri.tanggal' , 'desc');
        $builder->where("jenis_galeri","Homepage");
        $builder->limit(9);
        $query = $builder->get();

        return $query->getResultArray();
    }
    // Menu layanan
    public function layanan()
    {
        $builder = $this->db->table('berita');
        $builder->select('berita.judul_berita, berita.icon, berita.ringkasan, berita.gambar, berita.slug_berita, berita.id_berita');
        $builder->where(['status_berita' => 'Publish', 'jenis_berita' => 'Layanan']);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function video()
    {
        $builder = $this->db->table('video');
        $builder->limit(1);
        $query = $builder->get();

        return $query->getRowArray();
    }
}
