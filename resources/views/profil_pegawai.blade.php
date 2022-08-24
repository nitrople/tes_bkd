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
                    <th>jenis kelamin</th>
                    <th>golongan nama</th>
                    <th>golongan nama pangkat</th>
                    <th>golongan tmt golongan</th>
                    <th>jenis jabatan id</th>
                    <th>jenis jabatan nama</th>
                    <th>jabatan id</th>
                    <th>jabatan nama</th>
                    <th>tmt jabatan</th>
                    <th>masa kerja tahun</th>
                    <th>masa kerja bulan</th>
                    <th>unor id</th>
                    <th>unor nama unor</th>
                    <th>unor induk id</th>
                    <th>unor induk nama unor</th>
                    <th>hukuman disiplin id</th>
                    <th>hukuman disiplin tmt hukuman disiplin</th>
                    <th>hukuman disiplin tmt akhir hukuman disiplin</th>
                    <th>Penyetaraan</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp

                <tr>
                    <td>{{$i}}</td>
                    <td></td>
                    <td>{{$pegawaiDetail["nip"]}}</td>
                    <td>{{$pegawaiDetail["nama"]}}</td>
                    <td>{{$pegawaiDetail["jenis_kelamin"]}}</td>
                    <td>{{$pegawaiDetail["golongan"]["nama"]}}</td>
                    <td>{{$pegawaiDetail["golongan"]["nama_pangkat"]}}</td>
                    <td>{{$pegawaiDetail["golongan"]["tmt_golongan"]}}</td>
                    <td>{{$pegawaiDetail["jenis_jabatan"]["id"]}}</td>
                    <td>{{$pegawaiDetail["jenis_jabatan"]["nama"]}}</td>

                    <td>{{$pegawaiDetail["jabatan_id"]}}</td>
                    <td>{{$pegawaiDetail["jabatan_nama"]}}</td>
                    <td>{{$pegawaiDetail["tmt_jabatan"]}}</td>

                    <td>{{$pegawaiDetail["masa_kerja"]["tahun"]}}</td>
                    <td>{{$pegawaiDetail["masa_kerja"]["tahun"]}}</td>
                    <td>{{$pegawaiDetail["unor"]["id"]}}</td>
                    <td>{{$pegawaiDetail["unor"]["nama_unor"]}}</td>
                    <td>{{$pegawaiDetail["unor_induk"]["id"]}}</td>
                    <td>{{$pegawaiDetail["unor_induk"]["nama_unor"]}}</td>
                    <td>{{$pegawaiDetail["hukuman_disiplin"]["id"]}}</td>
                    <td>{{$pegawaiDetail["hukuman_disiplin"]["tmt_hukuman_disiplin"]}}</td>
                    <td>{{$pegawaiDetail["hukuman_disiplin"]["tmt_akhir_hukuman_disiplin"]}}</td>
                    <td>{{$pegawaiDetail["is_penyetaraan"]}}</td>


                    @php
                    $i++;
                    @endphp
                </tr>
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
