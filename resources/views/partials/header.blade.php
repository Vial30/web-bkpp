<header class="d-flex justify-content-between align-items-center py-3 px-4">
    <img src="{{ asset('img/bkpp-icon.png') }}" alt="BKPP Kota Semarang" width="200">

    <!-- Dropdown Button -->
    <div class="profile-dropdown-wrapper">
        <button class="btn btn-light" id="dropdownButton">
            {{ Auth::user()->name }} <!-- Menampilkan nama pengguna yang sedang login -->
        </button>

        <!-- Dropdown Menu -->
        <div class="dropdown" id="dropdownMenu">
            <!-- Info Profil -->
            <div class="profile-info">
                <img src="{{ asset('img/profil.png') }}" alt="User">
                <span>{{ Auth::user()->name }}</span> <!-- Menampilkan nama pengguna di sini juga -->
            </div>

            <!-- Menu Item -->
            <ul>
                <li><a href="{{ url('/account') }}">Akun</a></li>
                <li><a href="{{ url('/loans') }}">Peminjaman Buku</a></li>
                <li><a href="{{ url('/guide') }}">Panduan</a></li>

                <!-- Logout Form -->
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: block;">
                        @csrf
                        <button type="submit" class="dropdown-item logout-btn">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>

<script>
    // Mendapatkan elemen tombol dan menu dropdown
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Event listener untuk menampilkan atau menyembunyikan dropdown
    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('active');
    });

    // Menutup dropdown jika area luar diklik
    document.addEventListener('click', function(e) {
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('active');
        }
    });
</script>
