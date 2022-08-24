@extends("layouts.main")

@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Unit Organisasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 10px">id</th>
                    <th>nama unor</th>
                    <th>nama jabatan</th>
                    <th>pemimpin pns id</th>
                    <th>pemimpin nip</th>
                    <th>pemimpin nama</th>
                    <th>diatasan id</th>
                    <th>diatasan nama unor</th>
<th>induk id</th>
                    <th>induk nama unor</th>

                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($unitOrganisasi as $unit)

                <tr>
                    <td>{{$i}}</td>
                    <td>{{$unit["id"]}}</td>
                    <td>{{$unit["nama_unor"]}}</td>
                    <td>{{$unit["nama_jabatan"]}}</td>
                    <td>{{$unit["pemimpin"]["pns_id"]}}</td>
                    <td>{{$unit["pemimpin"]["nip"]}}</td>
                    <td>{{$unit["pemimpin"]["nama"]}}</td>
                    <td>{{$unit["diatasan"]["id"]}}</td>
                    <td>{{$unit["diatasan"]["nama_unor"]}}</td>
                    <td>{{$unit["induk_unor"]["id"]}}</td>
                    <td>{{$unit["induk_unor"]["nama_unor"]}}</td>

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
