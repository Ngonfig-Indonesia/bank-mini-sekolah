<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    @can('isAdmin')
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="https://www.smkn1kotabima.sch.id/images/gambar/logo_smkn_1_shadow.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Bank Mini <strong>Syariah</strong>
    </a>
    @elsecan('isTeller')
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="https://www.smkn1kotabima.sch.id/images/gambar/logo_smkn_1_shadow.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Bank Mini <strong>Syariah</strong>
    </a>
    @elsecan('isAuthor')
    <a class="navbar-brand" href="{{ route('home') }}">
      Portal Web <strong>Jurusan</strong>
    </a>
    @endcan
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @can('isAdmin')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nasabah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('tabungan.index') }}">Tabungan Masuk</a></li>
              <li><a class="dropdown-item" href="{{ route('transfer.index') }}">Transfer Saldo</a></li>
              <li><a class="dropdown-item" href="{{ route('tarik.index') }}">Tarik Saldo</a></li>
            </ul>
          </li>
          @elsecan('isTeller')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nasabah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('tabungan.index') }}">Tabungan Masuk</a></li>
              <li><a class="dropdown-item" href="{{ route('transfer.index') }}">Transfer Saldo</a></li>
              <li><a class="dropdown-item" href="{{ route('tarik.index') }}">Tarik Saldo</a></li>
            </ul>
          </li>
          @else

          @endcan
          @can('isAdmin')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pengecekan Saldo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('saldo.index') }}">Saldo Nasabah</a></li>
              <li><a class="dropdown-item" href="{{ route('totaltabungan.index') }}">Total Tabungan Simpan</a></li>
            </ul>
          </li>
          @elsecan('isTeller')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pengecekan Saldo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('saldo.index') }}">Saldo Nasabah</a></li>
              <li><a class="dropdown-item" href="{{ route('totaltabungan.index') }}">Total Tabungan Simpan</a></li>
            </ul>
          </li>
          @else
          @endcan
          {{-- <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rekapan Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Rekap Tabungan</a></li>
              <li><a class="dropdown-item" href="#">Rekap Penarikan Tabungan</a></li>
            </ul>
          </li> --}}
          @can('isAdmin')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data Nasabah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('nasabah.index') }}">Nasabah</a></li>
              <li><a class="dropdown-item" href="{{ route('jurusan.index') }}">Jurusan</a></li>
              <li><a class="dropdown-item" href="{{ route('nasabahaktif.index') }}">Nasabah Aktif/Non Aktif</a></li>
            </ul>
          </li>
          @endcan
          @can('isAdmin')
          <li class="nav-item dropdown">
            <a class="nav-link active" href="{{ route('user.index') }}">
              Data User
            </a>
          </li>
          @endcan
          @can('isAuthor')
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data Jurusan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('profil.show') }}">Profil</a></li>
              <li><a class="dropdown-item" href="{{ route('galeri.show') }}">Galeri</a></li>
              <li><a class="dropdown-item" href="{{ route('slide.show') }}">Slide Show</a></li>
              <li><a class="dropdown-item" href="{{ route('informasi.index') }}">Informasi</a></li>
              <li><a class="dropdown-item" href="{{ route('siswa.guru.index') }}">Siswa/Guru</a></li>
              <li><a class="dropdown-item" href="{{ route('alumni') }}">Alumni</a></li>
            </ul>
          </li>
          @endcan
        </ul>
          
        <div class="d-flex">
          <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i>
              Hi <strong>{{ Auth::user()->name; }}</strong>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              {{-- <li><button class="dropdown-item" type="button">Profile</button></li> --}}
              <li><a href="{{ route('logout') }}" class="dropdown-item" onclick="return confirm('Yakin Anda ingin Keluar?')">Logout</a></li>
              <!-- <li><button class="dropdown-item" type="button">Something else here</button></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
</nav>