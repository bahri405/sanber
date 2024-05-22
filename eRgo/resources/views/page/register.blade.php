@extends('layout.master')

@section('judul')
  Halaman biodata
@endsection


@section('content')
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
      @csrf
      <label for="name">First Name :</label><br /><br />
      <input type="text" name="name"/><br /><br />
      <label for="lastName">Last Name :</label><br /><br />
      <input type="text" name="lastName" /><br /><br />
      <label for="">Gender :</label><br /><br />
      <input type="radio" />Male <br />
      <input type="radio" />Female <br />
      <input type="radio" />Order <br /><br />
      <label for="">Nationality :</label><br /><br />
      <select name="negara" id="">
        <br />
        <option value="indonesia">indonesia</option>
        <option value="inggris">inggris</option></select
      ><br /><br />
      <label for="">Language Spoken :</label><br /><br />
      <input type="checkbox" name="language" />Bahasa indonesia <br />
      <input type="checkbox" name="language" />English <br />
      <input type="checkbox" name="language" />Other <br />
      <label for="">Bio :</label><br /><br />
      <textarea name="bio" rows="10" cols="30"></textarea> <br />
      <button type="submit">Sign Up</button>
      <a href="/">kembali</a>
    </form>
@endsection
    

