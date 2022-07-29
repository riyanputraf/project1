@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{route('create')}}" class="btn btn-succes">Tambah data</a>
                </div>
                <h4 class="card-title">Tabel Buku</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>#</th>
                      <th>Judul</th>
                      <th>Pengarang</th>
                      <th>Genre</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      @foreach ($dtBuku as $item)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> {{$item->judul}}</td>
                        <td> {{$item->pengarang->nama}}</td>
                        <td> {{$item->genre}}</td>
                        <td><a href="{{route('edit', $item->id)}}" class="btn btn-succes">Edit data</a> | <a href="{{url('delete', $item->id)}}" class="btn btn-succes">Delete data</a>  </td>
                      </tr>
                      @endforeach
          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection