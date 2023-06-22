@extends('admin.base')
@section('title', 'Detail V-Tour')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <a href="{{ url('admin/vtour') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

      <div class="card">
        <div class="card-header">
          Detail Video
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered dt-responsive nowrap mt-1">
                <thead>
                  <tr>
                    <th scope="col">Judul</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $video->judul }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered dt-responsive nowrap mt-1">
                <thead>
                  <tr>
                    <th scope="col">Deskripsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{!! nl2br($video->deskripsi) !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered dt-responsive nowrap mt-1">
              <thead>
                  <tr>
                    <th scope="col">Video</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><iframe src="https://www.youtube.com/embed/{{ $video->link }}" style="height: 450px; width:550px;"> </iframe></td>
                  </tr>
                </tbody>
                <!-- <iframe src="https://www.youtube.com/embed/{{ $video->link }}" style="height: 450px; width:550px;"> </iframe> -->
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection