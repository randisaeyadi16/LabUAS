<?php

namespace App\Controllers;

Use App\Models\ModelDataWarga;

class kaswarga extends BaseController
{
	public function index()
	{
		$warga = new ModelDataWarga();
		$data = [
					'tampildata' => $warga->tampildata()->getResult()
		];


		echo view ('datawarga/datawarga', $data);
	}
	public function tambahwarga()
	{
		helper('form');
		echo view ('datawarga/tambahdatawarga');
	}
	public function simpandatawarga()
	{
		$data = [
			'nik' => $this->request->getPost('nik'),
			'nama' => $this->request->getPost('nama'),
			'kelamin' => $this->request->getPost('jk'),
			'alamat' => $this->request->getPost('alamat'),
			'no_rumah' => $this->request->getPost('norumah')
		];
		
		$warga = new ModelDataWarga();

		$simpan = $warga->simpan($data);

		if ($simpan) {
			return redirect()->to('/kaswarga');
		}
	}
	function hapus(){
		$uri = service('uri');
		$nik = $uri->getSegment('3');

		$warga = new ModelDataWarga();

		$warga->hapusdatawarga($nik);

		return redirect()->to('/kaswarga');
	}
	function editdatawarga(){
		helper('form');
		$uri = service('uri');
		$nik = $uri->getSegment('3');

		$warga = new ModelDataWarga();

		$ambildata = $warga->ambildata($nik);

		if(count($ambildata->getResult()) > 0) {
			$row = $ambildata->getRow();
			$data = [
				'nik' => $nik,
				'nama' => $row->nama,
				'jk' => $row->kelamin,
				'alamat' => $row->alamat,
				'norumah' => $row->no_rumah,
			];

			echo view('datawarga/editdatawarga');
		}
	}
	function ubahdata(){
		$nik = $this->request->getPost('nik');
		$data = [
			'nama' => $this->request->getPost('nama'),
			'kelamin' => $this->request->getPost('jk'),
			'alamat' => $this->request->getPost('alamat'),
			'no_rumah' => $this->request->getPost('norumah')
		];
		
		$warga = new ModelDataWarga();

		$update = $warga->editdata($data, $nik);

		if ($update) {
			return redirect()->to('/kaswarga');
		}
	}
}