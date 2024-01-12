<nav>
  <div class="nav-item nav-content">
    <div class="logo">
      <a href="#">SimakWastu.</a>
    </div>
    <ul class="nav-links">
      <li class="nav-item">
        <a href="#visi&misi">Visi & Misi</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login/index.php">Sebagai Mahasiswa</a></li>
            <li><a class="dropdown-item" href="login/index1.php">Sebagai Dosen</a></li>
          </ul>
        </li>
      <li class="nav-item"><a href="#">Layanan Lain</a></li>
      <li class="nav-item"><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<script>
  let nav = document.querySelector("nav");
  window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  }
</script>

</body>

</html>