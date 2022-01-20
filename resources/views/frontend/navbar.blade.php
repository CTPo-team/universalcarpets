
<!-- Section Navbar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-transparent">
<img src="{{asset('img/logo.png')}}" class="img-fluid p-2" width="150px" alt="Responsive image">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item active p-2">
        <a class="nav-link homelink" href="<?= url('/'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link" href="<?= url('aboutus'); ?>">About Us</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link" href="<?= url('product'); ?>">Products</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link" href="<?= url('contactus'); ?>">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Section Navbar -->