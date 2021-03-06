@extends('layouts.app')

@section('content')
<div class="container">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Daftar Tamu</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keperluan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($guests as $guest)
            <tr class="odd gradeX">
                <td>{{$guest->created_at->format('j-n-Y')}}</td>
                <td>{{$guest->created_at->format('H:i')}}</td>
                <td>{{$guest->name}}</td>
                <td>{{$guest->address}}</td>
                <td>{{$guest->purpose}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
