@extends("layouts.main")

@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 10px">id</th>
                    <th>nip</th>
                    <th>nama</th>
                    <th>golongan nama</th>
                    <th>golongan nama pangkat</th>
                    <th>jabatan nama</th>
                    <th>unor id</th>
                    <th>unor nama</th>
<th>unor induk id</th>
                    <th>unor induk nama unor</th>
                    <th>kedudukan hukum id</th>
                    <th>kedudukan hukum nama</th>
                    <th>hukuman disiplin id</th>
                    <th>hukuman disiplin tmt</th>
                    <th>hukuman disiplin akhir</th>
<th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($seluruhPegawai as $pegawai)

                <tr>
                    <td>{{$i}}</td>
                    <td>{{$pegawai["id"]}}</td>
                    <td>{{$pegawai["nip"]}}</td>
                    <td>{{$pegawai["nama"]}}</td>
                    <td>{{$pegawai["golongan"]["nama"]}}</td>
                    <td>{{$pegawai["golongan"]["nama_pangkat"]}}</td>
                    <td>{{$pegawai["jabatan_nama"]}}</td>
                    <td>{{$pegawai["unor"]["id"]}}</td>
                    <td>{{$pegawai["unor"]["nama_unor"]}}</td>
                    <td>{{$pegawai["unor_induk"]["id"]}}</td>
                    <td>{{$pegawai["unor_induk"]["nama_unor"]}}</td>
                    <td>{{$pegawai["kedudukan_hukum"]["id"]}}</td>
                    <td>{{$pegawai["kedudukan_hukum"]["nama"]}}</td>
                    <td>{{$pegawai["hukuman_disiplin"]["id"]}}</td>
                    <td>{{$pegawai["hukuman_disiplin"]["tmt_hukuman_disiplin"]}}</td>
                    <td>{{$pegawai["hukuman_disiplin"]["tmt_akhir_hukuman_disiplin"]}}</td>
<td> <div class="row">
        <a href="{{route('main.crud.profilpegawai',['nip'=>$pegawai["nip"]])}}">
            <button
                class="btn btn-sm btn-primary">Lihat profil pegawai
            </button>
        </a>
    </div>
</td>

                    @php
                    $i++;
                    @endphp
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
@endsection

@section("javascript")
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                scrollX: true
            });
        } );
    </script>
@endsection
