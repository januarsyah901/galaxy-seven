<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use function App\Http\Controllers\generateRandomNumber;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */




    public function model(array $row)
    {
        // dd($row['nama']);




         $length = 3;
        $kode =  str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);

        // $cek_kode = $this->$user->kode($kode);
        $cek_kode = User::where('kode', $kode)->exists();
        if ($cek_kode) {
            $kode =  str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
        }
        if ($row[0] != null) {
            return new User([
                'nama' => $row[0],
                'username' => $row[1],
                'telp' => $row[2],
                'sekolah' => $row[3],
                'jk' => $row[4],
                'type' => $row[5],
                'image' => $row[6],
                'email' => $row[7],
                'nomor_peserta' => $row[8],
                'password_peserta' => $row[9],
                'is_admin' => $row[10],
                'status_pembayaran' => $row[11],
                'is_lolos' => $row[12],
                'kode' => $kode,
                'password' => Hash::make($row[14]),
                'nisn' => $row[15],
            ]);
        }
    }
}
