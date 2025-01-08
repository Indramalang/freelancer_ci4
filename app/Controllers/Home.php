<?php

namespace App\Controllers;

use App\Models\DataProfilModel;
use App\Models\KontakPesanModel;
use CodeIgniter\HTTP\Response;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new DataProfilModel();

        // Ambil data berdasarkan nama
        $data_nama = $model->where('nama', 'data_nama')->first(); // Data untuk nama
        $data_keterangan = $model->where('nama', 'keterangan_nama')->first(); // Data untuk keterangan

        $data_sosmed = [
            'facebook_link' => 'https://web.facebook.com/profile.php?id=100077498329371',
            'linkedin_link' => 'https://www.linkedin.com/in/kurniawan-indra-jaya/'
        ];

        // Gabungkan data untuk dikirim ke view
        $dataProfil = [
            'dataProfil' => $data_nama['data'] ?? 'Tidak ada data', 
            'dataKeterangan' => $data_keterangan['data'] ?? 'Tidak ada keterangan',
            'dataSosmed' => $data_sosmed
        ];

        // Kirim data ke view
        return view('home', $dataProfil);
    }
    
    public function saveMessage()
    {
        $kontakModel = new KontakPesanModel();

        // Validasi input
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'phoness' => 'required',
            'message' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // Simpan data ke tabel
        $kontakModel->save([
            'nama' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'nomor_telp' => $this->request->getPost('phoness'),
            'pesan' => $this->request->getPost('message'),
            'delete_data' => 0,
        ]);

        return redirect()->to(base_url());
    }
    public function download($filename)
    {
        $filePath = WRITEPATH . '../public/aset/data/' . $filename;

        if (file_exists($filePath)) {
            return $this->response->download($filePath, null)->setFileName($filename);
        }

        throw new \CodeIgniter\Exceptions\PageNotFoundException("File {$filename} not found.");
    }
    public function resume()
    {
        $filePath = WRITEPATH . '../public/aset/data/Kurniawan Indra Jaya_Resume CV.pdf';

        if (file_exists($filePath)) {
            return $this->response->download($filePath, null);
        }

        throw new \CodeIgniter\Exceptions\PageNotFoundException('File not found.');
    }
    public function unduhan($filename)
    {
        $filePath = WRITEPATH .'../public/aset/data/' . $filename;

        if (file_exists($filePath)) {
            return $this->response>download($filePath,null)->setFileName($filename);
        }
   
    throw new \CodeIgniter\Exceptions\PageNotFoundException("File {$filename} not found.");
    }

}
