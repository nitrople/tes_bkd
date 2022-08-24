<?php

namespace App\Http\Controllers;

use App\Models\TesModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
class MainController extends Controller
{
        public function login()
    {
//        $respon = Http::get('https://api.guildwars2.com/v2/account?access_token=68342872-9B5E-5C4B-9997-93E2ADCA8873929214B4-36DD-485C-9866-BAAA98EF5414');

//        $responPost = Http::asForm()->post("https://reqres.in/api/users",
//        [
//            "name" => "Demon",
//        "job" => "Governor"
//        ]);
//        $responPost = $responPost->json();

        return view("login");

    }

    public function cekLogin(Request $data){

    }

    public function regis(){
        $user = new User();
        $user->name = 'admin';
        $user->password = Hash::make('admin');
        $user->email = 'admin@something.com';
        $user->save();

        return true;
    }

    public function index()
    {

        $responPost = Http::asForm()->post("http://epresensi.bengkuluprov.go.id:94/v1/login",
        [
            "username" => "testbkd",
        "password" => "test123##"
        ]);
        $token = $responPost->json()["token"];

        $unitOrganisasi = Http::asForm()->get("http://epresensi.bengkuluprov.go.id:94/v1/unor",
            [
                "token" => $token
            ]);
        $unitOrganisasi = $unitOrganisasi->json();
//        return $unitOrganisasi->json();
        return view("main", compact("unitOrganisasi"));

    }

    public function pilihOrganisasi()
    {

        $responPost = Http::asForm()->post("http://epresensi.bengkuluprov.go.id:94/v1/login",
            [
                "username" => "testbkd",
                "password" => "test123##"
            ]);
        $token = $responPost->json()["token"];

        $unitOrganisasi = Http::asForm()->get("http://epresensi.bengkuluprov.go.id:94/v1/unor",
            [
                "token" => $token
            ]);
        $unitOrganisasi = $unitOrganisasi->json();
//        return $unitOrganisasi->json();
        return view("pilihOrganisasi", compact("unitOrganisasi"));

    }

    public function pegawai($id)
    {

        $responPost = Http::asForm()->post("http://epresensi.bengkuluprov.go.id:94/v1/login",
            [
                "username" => "testbkd",
                "password" => "test123##"
            ]);
        $token = $responPost->json()["token"];

        $seluruhPegawai = Http::asForm()->get("http://epresensi.bengkuluprov.go.id:94/v1/unor/$id/pns",
            [
                "token" => $token
            ]);
        $seluruhPegawai = $seluruhPegawai->json();
//        return $unitOrganisasi->json();
        return view("pegawai", compact("seluruhPegawai"));

    }

    public function profilPegawai($nip)
    {

        $responPost = Http::asForm()->post("http://epresensi.bengkuluprov.go.id:94/v1/login",
            [
                "username" => "testbkd",
                "password" => "test123##"
            ]);
        $token = $responPost->json()["token"];

        $pegawaiDetail = Http::asForm()->get("http://epresensi.bengkuluprov.go.id:94/v1/pns/$nip",
            [
                "token" => $token
            ]);
        $pegawaiDetail = $pegawaiDetail->json();
//        return $unitOrganisasi->json();
        return view("profil_pegawai", compact("pegawaiDetail"));

    }

    public function crud(){
        $dataset = TesModel::all();
        return view ("crud", compact("dataset"));
    }

    public function ubah($id){
        $data = TesModel::find(intval($id));
        return view ("ubah", compact("id", "data"));
    }

//    public function perbarui(Request $data){
//        $dataTes = TesModel::find(intval($data->x));
//        if($dataTes != null){
//            $dataTes->name = trim($data->name);
//            $dataTes->job = trim($data->job);
//            $dataTes->save();
//        }
//        return redirect()->route("main.crud");
//    }
//
//    public function simpan(Request $data){
//        TesModel::create([
//            "name"=>trim($data->name),
//            "job"=>trim($data->job)
//        ]);
//        return redirect()->route("main.crud");
//
//    }
//
//    public function hapus(Request $data){
//        TesModel::destroy($data->x);
//        return redirect()->route("main.crud");
//
//    }
}
