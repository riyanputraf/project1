
@extends('template')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Buku</h4>
              </div>
              <div class="card-body">
                <form action="{{route('update', $buku->id)}}" method= "post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku" value="{{$buku->judul}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%;" name="pengarang_id" id="pengarang_id">
                            <option disabled value>Pilih Pengarang</option>
                            @foreach ($pengarang as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="genre" id="genre" class="form-control" placeholder="Genre Buku" value="{{$buku->genre}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection