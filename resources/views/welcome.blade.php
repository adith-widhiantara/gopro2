@extends('base.materialize')

@section('title', 'GoPro')

@section('materialize')
<head>
  <link rel="stylesheet" href="css/welcome.css">
</head>

<!-- Navbar -->
<nav>
  <div class="nav-wrapper white">
    <div class="container">
      <a href="#" class="brand-logo green-text quicksand">GoPro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="black-text quicksand" href="login"><i class="material-icons left">person_outline</i>Masuk</a></li>
        <li><a class="waves-effect waves-light btn daftar" href="register">DAFTAR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Slider -->
<div class="parallax-container">
  <div class="parallax"><img src="img\slider\1.jpg"></div>
</div>
<!-- End Slider -->


<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(elems);
});
</script>
@endsection
