<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;

use App\Models\M_Sakit;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
    }

    //dashboard(udh)
    public function dashboard()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            echo view('header');
            echo view('menu', $data);
            echo view('dashboard');
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }


    //masyarakat(udh)

    public function masyarakat()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model ->join('masyarakat', 'level','masyarakat.id_level=level.id_level','id_user');
            echo view('header');
            echo view('menu',$data);
            echo view('masyarakat',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function hapus_masyarakat($id){
        $model = new M_Sakit();
        $where=array('id_user'=>$id);
        $model->hapus('masyarakat',$where);
        return redirect()->to('home/masyarakat');
    }

    public function tambah_masyarakat()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            echo view ('header');
            echo view ('menu',$data);
            echo view('tambah_masyarakat');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_t_masyarakat()
    {
        $model = new M_Sakit();
        $a = $this->request->getPost('nama_lengkap');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('telp');
        $e = $this->request->getPost('level');
        
        $isi = array(
            'nama_lengkap' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $d,
            'id_level' => $e

        );
        $model ->tambah('masyarakat', $isi);
        
        return redirect()->to('home/masyarakat');
    }

    public function edit_masyarakat($id){
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_user'=>$id);

            $data['satu']=$model->getWhere('masyarakat',$where);

            echo view ('header');
            echo view ('menu',$data);
            echo view ('edit_masyarakat',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_edit_masyarakat()
    {
        $model = new M_Sakit();
        $a = $this->request->getPost('nama_lengkap');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('telp');
        $e = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_user'=>$id);

        $isi = array(
            'nama_lengkap' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $d,
            'id_level' => $e
            

        );
        $model ->edit('masyarakat', $isi, $where);
        
        return redirect()->to('home/masyarakat');
    }


    // petugas(udh)

    public function petugas()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model ->join('petugas', 'level','petugas.id_level=level.id_level','id_petugas');

            echo view('header');
            echo view('menu',$data);
            echo view('petugas',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function hapus_petugas($id){
        $model = new M_Sakit();
        $where=array('id_petugas'=>$id);
        $model->hapus('petugas',$where);
        return redirect()->to('home/petugas');
    }

    public function tambah_petugas()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_petugas'=>session()->get('id'));
            $data['user']=$model->getWhere('petugas',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view('tambah_petugas');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_t_petugas()
    {
        $model = new M_Sakit();
        $a = $this->request->getPost('nama_petugas');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('level');
        
        $isi = array(
            'nama_petugas' => $a,
            'username' => $b,
            'password' => $c,
            'id_level' => $d,

        );
        $model ->tambah('petugas', $isi);
        
        return redirect()->to('home/petugas');
    }

    public function edit_petugas($id){
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_petugas'=>$id);

            $data['satu']=$model->getWhere('petugas',$where);

            echo view ('header');
            echo view ('menu',$data);
            echo view ('edit_petugas',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_edit_petugas()
    {
        $model = new M_Sakit();
        $a = $this->request->getPost('nama_petugas');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_petugas'=>$id);

        $isi = array(
            'nama_petugas' => $a,
            'username' => $b,
            'password' => $c,
            

        );
        $model ->edit('petugas', $isi, $where);
        
        return redirect()->to('home/petugas');
    }



    //level(udh)

    public function level()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model -> tampil('level', 'id_level');
            echo view('header');
            echo view('menu',$data);
            echo view('level',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }




    //bagian session(udh)
    public function login()
    {
        echo view('header');
        echo view('login');
    }

    public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('password');

        $model = new M_Sakit();
        $where=array(
            'username'=> $u,
            'password'=> $p
        );

        $model = new M_Sakit();
        $cek = $model->getWhere('petugas',$where);
        $cek2 = $model->getWhere('masyarakat',$where);
        
        if ($cek>0){
           session()->set('id',$cek->id_petugas);
           session()->set('username',$cek->username);
           session()->set('level',$cek->id_level);
           return redirect()->to('home/dashboard');
       }elseif($cek2>0){
        session()->set('id',$cek2->id_user);
        session()->set('username',$cek2->username);
        session()->set('level',$cek2->id_level);
        return redirect()->to('home/dashboard');
    }else{
        return redirect()->to('home/login');
    }
}



    //reset pw

public function fpw()
{
    if (session()->get('level')>0){
        $model = new M_Sakit();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model -> tampil('petugas', 'id_petugas');
        $where=array('id_petugas'=>session()->get('id')); 
        echo view('header');
        echo view('menu', $data);
        echo view('fpw', $data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }
}

public function aksi_reset($id)
{
    $model = new M_Sakit();

    $where= array('id_petugas'=>$id);

    $isi = array(

        'password' => md5('1')      

    );
    $model->edit('petugas', $isi,$where);

    return redirect()->to('home/fpw');



}


    //logout(udh)
public function logout()
{
    session()->destroy();
    return redirect()->to('home/login');
}

    //dokter (udh)

public function dokter()
{
    if (session()->get('level') > 0) {
        $model = new M_Sakit();
        $data['mn'] = $model->tampil1('menu');
        $data['manda'] = $model->tampil('dokter', 'id_dokter');
        echo view('header');
        echo view('menu', $data);
        echo view('dokter', $data);
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
}

public function tambah_dokter()
{
    if (session()->get('level')>0){
        $model = new M_Sakit();
        $data['mn']=$model->tampil1('menu');
        echo view ('header');
        echo view ('menu',$data);
        echo view('tambah_dokter');
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_t_dokter()
{
    $model = new M_Sakit();
    $a = $this->request->getPost('nama_dokter');
    $b = $this->request->getPost('bidang');
    $c = $this->request->getPost('harga');

    $isi = array(
        'nama_dokter' => $a,
        'bidang' => $b,
        'harga' => $c


    );
    $model ->tambah('dokter', $isi);

    return redirect()->to('home/dokter');
}

public function hapus_dokter($id){
    $model = new M_Sakit();
    $where=array('id_dokter'=>$id);
    $model->hapus('dokter',$where);
    return redirect()->to('home/dokter');
}

public function edit_dokter($id){
    if (session()->get('level')>0){
        $model = new M_Sakit();
        $data['mn']=$model->tampil1('menu');
        $where=array('id_dokter'=>$id);

        $data['satu']=$model->getWhere('dokter',$where);

        echo view ('header');
        echo view ('menu',$data);
        echo view ('edit_dokter',$data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_edit_dokter()
{
    $model = new M_Sakit();
    $a = $this->request->getPost('nama_dokter');
    $b = $this->request->getPost('bidang');
    $c = $this->request->getPost('harga');
    $id = $this->request->getPost('id');

    $where=array('id_dokter'=>$id);

    $isi = array(
        'nama_dokter' => $a,
        'bidang' => $b,
        'harga' => $c

    );
    $model ->edit('dokter', $isi,$where);

    return redirect()->to('home/dokter');
}

//booking
public function booking($id_dokter)
{
    
    if (session()->get('level') > 0) {
        
        $model = new M_Sakit();
        $dokter = $model->find($id_dokter);

        if ($dokter) {
            $data = [
                'status' => 'Booked',
            ];

            $model->update($id_dokter, $data);

            return redirect()->to('home/dokter');
        } else {
            return redirect()->back()->with('error', 'Doctor not found.');
        }
    } else {
        return redirect()->to('home/login');
    }
}

public function book()
    {
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            echo view ('header');
            echo view ('menu',$data);
            echo view('book');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }


    //laporan(yaallah susahnya)


public function laporan()
{
    if (session()->get('level')>0){
        $model = new M_Sakit();
        $data['mn']=$model->tampil1('menu');
        $where=array('id_petugas'=>session()->get('id'));
        $data['user']=$model->getWhere('petugas',$where);
        echo view ('header');
        echo view ('menu',$data);
        echo view('laporan', $data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }
}

//signup account(udh)
public function signup()
{
    if (session()->get('level')>0){
        $model = new M_Sakit();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model ->join('masyarakat', 'level','masyarakat.id_level=level.id_level','id_user');
        echo view('header');
        echo view('signup',$data);
    }else{
        return redirect()->to('home/login');
    }
}

public function aksi_signup()
{
    $model = new M_Sakit();
    $a = $this->request->getPost('nama_lengkap');
    $b = $this->request->getPost('username');
    $c = $this->request->getPost('password');
    $d = $this->request->getPost('telp');
    $e = $this->request->getPost('level');

    $isi = array(
        'nama_lengkap' => $a,
        'username' => $b,
        'password' => $c,
        'telp' => $d,
        'id_level' => 3

    );
    $model ->tambah('masyarakat', $isi);

    return redirect()->to('home/login');
}

public function edit_profile($id){
        if (session()->get('level')>0){
            $model = new M_Sakit();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_user'=>$id);
            $data ['manda'] = $model ->join('masyarakat', 'level','masyarakat.id_level=level.id_level','id_user');
            $data['satu']=$model->getWhere('masyarakat',$where);

            
            echo view ('header');
            echo view ('menu',$data);
            echo view ('edit_profile',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

public function aksi_edit_profile()
    {
        $model = new M_Sakit();
        $a = $this->request->getPost('nama_lengkap');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('telp');
        $e = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_user'=>$id);

        $isi = array(
            'nama_lengkap' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $d,
            'id_level' => 3
            

        );
        $model ->edit('masyarakat', $isi, $where);
        
        return redirect()->to('home/masyarakat');
    }


public function pdf()
{
    $model = new M_Sakit();

    $data['manda']=$model->tampil1('konsultasi');

    return view('pdf', $data);

}




}
