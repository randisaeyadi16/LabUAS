<?php

namespace App\Controllers;

Use App\Models\ModelKasWarga;

class daftarkaswarga extends BaseController
{
	public function index()
	{
		$warga = new ModelKasWarga();
		$data = [
					'tampildata' => $warga->tampildata()->getResult()
		];


		echo view ('datawarga/datakaswarga', $data);
	}

	public function tambahkaswarga()
	{
		helper('form');
		echo view ('datawarga/tambahkaswarga');
	}

	public function simpankaswarga()
	{
		$data = [
			'nik' => $this->request->getPost('nik'),
			'nama' => $this->request->getPost('nama'),
			'kas' => $this->request->getPost('kas'),
			'tglmasuk' => $this->request->getPost('tglmasuk'),
			'keter' => $this->request->getPost('keter')
		];
		
		$warga = new ModelKasWarga();

		$simpan = $warga->simpan($data);

		if ($simpan) {
			return redirect()->to('/daftarkaswarga');
		}
	}
}