<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
    public function pemasukan_hari_ini(){
        $tanggal = date('y-m-d');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pemasukan_bulan_ini(){
        $tanggal = date('y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("DATE_FORMAT(tanggal,'%y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pemasukan(){
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        return $this->db->get()->row()->total;
    }
    public function pengeluaran_hari_ini(){
        $tanggal = date('y-m-d');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%y-%m-%d')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pengeluaran_bulan_ini(){
        $tanggal = date('y-m');
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("DATE_FORMAT(tanggal,'%y-%m')",$tanggal);
        return $this->db->get()->row()->total;
    }
    public function pengeluaran(){
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        return $this->db->get()->row()->total;
    }
    public function saldo_awal($tanggal){
        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        $this->db->where("tanggal <",$tanggal);
        return $this->db->get()->row()->total;
        $pemasukan = $this->db->get()->row()->total;

        $this->db->select('sum(nominal) as total')->from('transaksi');
        $this->db->where('jenis_transaksi','Pengeluaran');
        $this->db->where("tanggal <",$tanggal);
        return $this->db->get()->row()->total;
        $pengeluaran = $this->db->get()->row()->total;
        $saldo = intval($pemasukan)-intval($pengeluaran);
        return $saldo;
    }
}
