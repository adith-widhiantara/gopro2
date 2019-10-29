@extends('base.materialize')

@section('title', 'Daftar')

@section('materialize')
<head>
  <link rel="stylesheet" href="css/register.css">
</head>

<!-- Navbar -->
<nav>
  <div class="nav-wrapper white">
    <div class="container">
      <a href="#" class="brand-logo green-text quicksand">GoPro</a>
      <ul id="nav-mobile" class="hide-on-med-and-down center">
        <li><a class="grey-text darken-3" href="">Proyek Pendanaan</a></li>
        <li><a class="grey-text darken-3" href="">Tentang Kami</a></li>
        <li><a class="grey-text darken-3" href="">Pertanyaan</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Isian -->
<div class="container isian">
  <div class="row">
    <div class="col s3">
        <div class="card horizontal">
          <div class="card-image datang">
            <img src="img\user.png">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>{{ Auth::user()->namalengkap }}</p>
            </div>
          </div>
        </div>
        <div class="tigatombol">
          <a class="waves-effect waves-light btn white grey-text darken-3"><i class="material-icons left grey-text darken-3">home</i>Halaman Depan</a>
          <a class="waves-effect waves-light btn white grey-text darken-3"><i class="material-icons left grey-text darken-3">assignment</i>Riwayat Permodalan</a>
          <a class="waves-effect waves-light btn white green-text"><i class="material-icons left green-text">person_outline</i>Profilku</a>
        </div>
    </div>
    <div class="col s9">
      <h3>Profilku</h3>
      <div class="row">
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="img\user.png">
            </div>
            <div class="card-content profil">
              <p>Besar file maksimum 10 Megabytes.<br>Ekstensi file yang diperbolehkan .JPG .JPEG .PNG</p>
            </div>
            <div class="card-action">
              <form action="#">
                <div class="file-field input-field">
                  <div class="btn green">
                    <span>Upload</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="s9">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
              <div class="input-field col s8">
                <input id="namalengkap" type="text" class="validate" name="namalengkap">
                <label for="namalengkap">Nama Lengkap</label>
              </div>
              <div class="input-field col s8">
                <input type="text" class="datepicker" name="tanggallahir">
                <label for="tanggallahir">Tanggal Lahir</label>
              </div>
              <div class="input-field col s8">
                <p class="grey-text darken-3">Jenis Kelamin</p>
                <p>
                  <label>
                    <input class="with-gap" name="jeniskelamin" type="radio" value="Pria"  />
                    <span>Pria</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input class="with-gap" name="jeniskelamin" type="radio" value="Wanita" />
                    <span>Wanita</span>
                  </label>
                </p>
              </div>
              <div class="input-field col s8">
                <select name="status">
                  <option value="" disabled selected>Pilih Status Pernikahan</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
                </select>
                <label>Status</label>
              </div>
              <div class="input-field col s8">
                <input id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
              </div>
              <div class="input-field col s8 offset-s3">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s8 offset-s3">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
              </div>
              <div class="input-field col s8 offset-s3">
                <input id="kontak" type="number" class="validate" name="kontak">
                <label for="kontak">Kontak</label>
              </div>
              <div class="input-field col s8 offset-s3">
                <input id="PIN" type="text" class="validate" name="PIN">
                <label for="PIN">PIN</label>
              </div>
              <button class="btn waves-effect waves-light right yellow darken-1" type="submit" name="action">Daftar</button>
              <a style="border: #ffeb3b; margin-right: 10px;" class="waves-effect waves-light btn right white yellow-text darken-1">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Isian -->

<script>
var date = new Date();
var year = date.getFullYear();
var month = date.getMonth();
var day = date.getDate();
var date = new Date(year, month, day);

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems,{
    autoClose: true,
    format: 'dd mmm, yyyy',
    yearRange: 50,
    maxDate: date,
    defaultDate: date
  });
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>
@endsection
