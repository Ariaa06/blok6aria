<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Sakit extends Model
{

    protected $primaryKey = 'id_dokter';
    protected $allowedFields = ['nama_dokter', 'bidang', 'harga', 'status'];

  public function tampil($tabel ,$id){
     return $this->db->table($tabel)
     ->orderby($id,'desc')
     ->get()
     ->getResult();

  }

  public function tampil1($tabel){
     return $this->db->table($tabel)
     ->get()
     ->getResult();

  }

  public function join($tabel, $tabel2, $on, $id){
     return $this->db->table($tabel)
     ->join($tabel2, $on,'left')
     ->orderby($id,'desc')
     ->get()
     ->getResult();

  }

  public function joinWhere($tabel, $tabel2, $on, $where){
     return $this->db->table($tabel, $where)
     ->join($tabel2, $on,'left')
     ->get()
     ->getRow();

  }

  public function getWhere($tabel,$where){
    return $this->db->table($tabel)
    ->getWhere($where)
    ->getRow();
 }

 public function tambah($tabel, $isi){
  return $this->db->table($tabel)
  ->insert($isi);
}

public function edit($tabel, $isi, $where){
  return $this->db->table($tabel)
  ->update($isi, $where);
}

public function hapus($table,$where){
   return $this->db->table($table)
   ->delete($where);
}


public function joinnelson($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->join($tabel3, $on2,'left')
  ->join($tabel4, $on3,'left')
  ->orderby($id,'desc')
  ->get()
  ->getResult();

}

public function joinn($tabel, $tabel2, $on, $id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->orderby($id,'desc')
  ->get()
  ->getResult();

}

public function joinnelsona($tabel, $tabel2, $tabel3, $on, $on2, $id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->join($tabel3, $on2,'left')
  ->orderby($id,'desc')
  ->get()
  ->getResult();

}


public function joinaria($tabel, $tabel2, $tabel3,$on, $on2, $id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->join($tabel3, $on2,'left')
  ->orderby($id,'desc')
  ->get()
  ->getResult();

}

public function getwherejoin($tabel, $tabel2,$on,$id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->getWhere($where)
  ->getRow();

}

public function booking($id_dokter)
{
    // Periksa apakah dokter dengan ID tersebut ada
    $dokter = $this->find($id_dokter);

    if ($dokter) {
        // Cek apakah pengguna sudah memiliki booking dokter sebelumnya
        $previousBooking = $this->where('status', 'Booked')->where('id_user', session()->get('id'))->first();
        if ($previousBooking) {
            return false; // Mengembalikan false jika pengguna sudah memiliki booking dokter sebelumnya
        }

        // Update status dokter menjadi "Booked" dan simpan ID pengguna yang melakukan booking
        $data = [
            'status' => 'Booked',
            'id_user' => session()->get('id')
        ];

        $this->update($id_dokter, $data);

        // Notifikasi bahwa konsultasi akan dimulai dalam satu jam
        $appointmentTime = strtotime('+1 hour');
        $formattedAppointmentTime = date('H:i', $appointmentTime);

        // Tambahkan notifikasi ke session flash untuk ditampilkan pada halaman selanjutnya
        session()->setFlashdata('success', 'Your appointment will start at '.$formattedAppointmentTime);

        return true; // Mengembalikan true jika booking berhasil
    } else {
        return false; // Mengembalikan false jika dokter tidak ditemukan
    }
}


    public function book()
    {
        // Misalnya, untuk menampilkan data menu
        return $this->db->table('menu')->get()->getResult();
    }

    


protected $table= 'dokter'; // Biarkan kosong, nanti akan diisi secara dinamis
    
    
 }
