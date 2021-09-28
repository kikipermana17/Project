<?php
class Dosen extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadosen = mysqli_query($this->koneksi, "select * from info_place");
        // var_dump($datadosen);
        return $datadosen;
    }

    // Menambah Data
    public function create($no, $nama, $alamat, $opentime, $ringkasan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into info_place values(null, '$no', '$nama', '$alamat', '$opentime', '$ringkasan')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from info_place where id='$id'"
        );
        return $datadosen;
    }


    
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from info_place where id='$id'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($id, $no, $nama, $alamat, $opentime, $ringkasan)
    {
        mysqli_query(
            $this->koneksi,
            "update info_place set no='$no', nama='$nama', 'alamat=$alamat', 'opentime=$opentime', 'ringkasan=$ringkasan', where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from info_place where id='$id'");
    }
}