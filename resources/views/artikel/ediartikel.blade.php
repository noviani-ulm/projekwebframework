@extends('layouts.app')

@section('content')
    <h1>Edit Artikel Baru</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action ="/artikel" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Judul</label>
    <input type = "text" class="form-control" name="title" value="{{old('title') ? old('title') : $artikel->title}}">
  </div>
  <div class="form-group">
    <label  for="subject">Isi</label>
    <textarea class="form-control" name="subject" rows="3" value="{{old('subject') ? old('subject') : $artikel->title}}"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

@endsection
