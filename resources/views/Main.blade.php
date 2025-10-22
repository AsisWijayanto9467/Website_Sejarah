<x-head>
    <!-- Loading Page -->
    <div id="loadingPage" class="loading-container">
        <h1 class="title fade-in">Mengenang Pahlawan Indonesia</h1>

        <div class="slider-container">
            <div class="pahlawan-card">
                <div class="image-container">
                    <button id="prevBtn" class="nav-btn fade-in">‹</button>

                    <div class="image-wrapper">
                        <div class="audio-indicator fade-in">
                            <div class="dot"></div>
                            <span>Audio Diputar</span>
                        </div>
                        <img id="pahlawanImg" class="pahlawan-image fade-in" src="images/soekarno.jpg" alt="Pahlawan">
                        <div id="pahlawanName" class="pahlawan-name fade-in">Ir. Soekarno</div>
                    </div>

                    <button id="nextBtn" class="nav-btn fade-in">›</button>
                </div>

                <div class="quote-container fade-in">
                    <p id="quoteText" class="quote-text"></p>
                </div>

                <div class="pahlawan-counter fade-in">
                    <div class="counter-dot active" data-index="0"></div>
                    <div class="counter-dot" data-index="1"></div>
                    <div class="counter-dot" data-index="2"></div>
                </div>
            </div>
        </div>

        <div id="continueText" class="continue-text fade-in">Lanjutkan ke Website</div>
    </div>

    <!-- Halaman Utama (akan ditampilkan setelah loading) -->
    <div id="mainContent" class="hidden">
        <nav id="navbar"
            class="fixed w-full bg-dark/90 backdrop-blur-sm z-50 transition-all duration-500 border-b border-gray-800">
            <div class="container mx-auto px-4 py-3">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-red-800 to-red-900 rounded-full flex items-center justify-center pulse-glow">
                            <i class="fas fa-medal text-yellow-400 text-lg"></i>
                        </div>
                        <div>
                            <span class="text-xl font-bold text-white">Puputan Margarana</span>
                            <p class="text-xs text-gray-400">Sejarah Perjuangan Bali</p>
                        </div>
                    </div>

                    <div class="hidden md:flex space-x-8">
                        <a href="#beranda"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Beranda</a>
                        <a href="#about"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Tentang</a>
                        <a href="#pahlawan"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Pahlawan</a>
                        <a href="#sejarah"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Sejarah</a>
                        <a href="#galeri"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Galeri</a>
                        <a href="#artikel"
                            class="text-gray-300 hover:text-white font-medium transition-colors nav-link">Artikel</a>
                    </div>

                    <button class="md:hidden text-gray-300 hover:text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="pt-16">
            <!-- Beranda/Hero Section -->
            <section id="beranda"
                class="hero-bg min-h-screen flex items-center justify-center text-white py-20 relative">
                <div class="container mx-auto px-4 text-center">
                    <div class="floating mb-6">
                        <div
                            class="w-24 h-24 mx-auto bg-gradient-to-br from-red-800 to-red-900 rounded-full flex items-center justify-center mb-6 pulse-glow">
                            <i class="fas fa-landmark text-white text-3xl"></i>
                        </div>
                    </div>

                    <h1 class="text-5xl md:text-7xl font-bold mb-6 hero-title">PU<span class="flame">P</span>UTAN <span
                            class="text-gradient">MARGARANA</span></h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto ">Peristiwa Heroik Perjuangan Rakyat Bali
                        Melawan Penjajah</p>
                    <p class="text-lg mb-10 max-w-2xl mx-auto text-gray-300 ">20 November 1946 - Sebuah kisah
                        kepahlawanan yang menginspirasi generasi</p>

                    <!-- Tambahkan class debug sementara untuk testing -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12" id="hero-buttons">
                        <a href="#sejarah"
                            class="inline-flex items-center justify-center bg-gradient-to-r from-red-800 to-red-900 hover:from-red-700 hover:to-red-800 text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg opacity-100">
                            <i class="fas fa-book-open mr-2"></i> Jelajahi Sejarah
                        </a>
                        <a href="#galeri"
                            class="inline-flex items-center justify-center bg-gradient-to-r from-yellow-700 to-yellow-800 hover:from-yellow-600 hover:to-yellow-700 text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg opacity-100">
                            <i class="fas fa-images mr-2"></i> Lihat Galeri
                        </a>
                    </div>
                </div>

                <div class="scroll-indicator"></div>
            </section>

            <!-- Stats Section -->
            <section class="py-16 bg-darker border-b border-gray-800">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div class="fade-in">
                            <div class="stat-number">96</div>
                            <p class="text-gray-400">Pejuang Gugur</p>
                        </div>
                        <div class="fade-in">
                            <div class="stat-number">20</div>
                            <p class="text-gray-400">November 1946</p>
                        </div>
                        <div class="fade-in">
                            <div class="stat-number">1</div>
                            <p class="text-gray-400">Peristiwa Bersejarah</p>
                        </div>
                        <div class="fade-in">
                            <div class="stat-number">∞</div>
                            <p class="text-gray-400">Nilai Perjuangan</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="py-20 bg-dark-gradient">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12 section-title text-white">Tentang Puputan Margarana
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="fade-in">
                            <h3 class="text-2xl font-bold mb-4 text-gold">Apa itu Puputan Margarana?</h3>
                            <p class="text-gray-300 mb-4">
                                Puputan Margarana adalah pertempuran habis-habisan yang terjadi pada 20 November 1946 di
                                Desa Marga, Kecamatan Margarana, Kabupaten Tabanan, Bali.
                            </p>
                            <p class="text-gray-300 mb-4">
                                Peristiwa ini merupakan perlawanan sengit para pejuang kemerdekaan Indonesia di bawah
                                pimpinan Letnan Kolonel I Gusti Ngurah Rai melawan pasukan Belanda yang ingin kembali
                                menjajah Indonesia setelah proklamasi kemerdekaan.
                            </p>
                            <p class="text-gray-300">
                                Kata "Puputan" berasal dari bahasa Bali yang berarti "habis-habisan" atau "bertempur
                                sampai titik darah penghabisan", mencerminkan semangat perjuangan yang tak kenal
                                menyerah.
                            </p>

                            <div class="mt-8 grid grid-cols-2 gap-4">
                                <div class="bg-darker p-4 rounded-lg border border-gray-800">
                                    <div class="text-gold font-bold text-lg">96</div>
                                    <div class="text-gray-400 text-sm">Pejuang Gugur</div>
                                </div>
                                <div class="bg-darker p-4 rounded-lg border border-gray-800">
                                    <div class="text-gold font-bold text-lg">1</div>
                                    <div class="text-gray-400 text-sm">Hari Pertempuran</div>
                                </div>
                            </div>
                        </div>
                        <div class="fade-in">
                            <div class="bg-darker rounded-xl overflow-hidden shadow-2xl img-frame">
                                <img src="{{ asset("images/Monumen.JPG") }}" alt="Monumen Puputan Margarana"
                                    class="w-full h-96 object-cover transform hover:scale-105 transition duration-500">
                                    
                                <div class="p-6 text-center">
                                    <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    <p class="text-gray-400 mt-1 text-sm">Dibangun untuk mengenang peristiwa heroik Puputan Margarana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="pahlawan" class="py-20 bg-darker">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12 section-title text-white">Para Pahlawan</h2>

                    <!-- I Gusti Ngurah Rai - Ditengah -->
                    <div class="flex justify-center mb-16 fade-in">
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover max-w-md">
                            <div class="h-80 bg-gradient-to-br from-red-800 to-red-900 flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-black/30"></div>
                                <div class="relative z-10 text-center p-6 w-full">
                                    <!-- Gambar I Gusti Ngurah Rai -->
                                    <div class="w-32 h-32 mx-auto mb-4 rounded-full bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center border-4 border-yellow-500/50 overflow-hidden">
                                        <img 
                                            src="{{ asset("images/Pahlawan.jpeg") }}" 
                                            alt="I Gusti Ngurah Rai"
                                            class="w-full h-full object-cover"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                        >
                                        <div class="w-full h-full hidden items-center justify-center bg-gradient-to-br from-yellow-600 to-yellow-800">
                                            <i class="fas fa-user text-white text-3xl"></i>
                                        </div>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white">Letnan Kolonel</h3>
                                    <h3 class="text-xl font-bold text-gold mb-2">I Gusti Ngurah Rai</h3>
                                    <div class="flex items-center justify-center text-sm text-gray-300 mb-4">
                                        <i class="fas fa-calendar-day mr-2 text-gold"></i>
                                        <span>1917 - 1946</span>
                                    </div>
                                    <p class="text-white/80 text-sm">Pemimpin Pasukan Ciung Wanara<br>Pahlawan Nasional</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-300 text-center">
                                    Pemimpin pasukan Ciung Wanara dalam pertempuran Puputan Margarana. 
                                    Gugur bersama seluruh anak buahnya dalam pertempuran sengit melawan Belanda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Penjelasan Pahlawan Lainnya -->
                    <div class="bg-dark/50 rounded-xl p-8 border border-gray-800 max-w-4xl mx-auto fade-in">
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center border-2 border-gray-500">
                                <i class="fas fa-question text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4">Pejuang Tanpa Nama</h3>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6 items-center">
                            <div class="text-center md:text-left">
                                <p class="text-gray-300 text-lg leading-relaxed">
                                    Selain <span class="text-gold font-semibold">I Gusti Ngurah Rai</span>, 
                                    sebanyak <span class="text-red-400 font-bold">96 pejuang lainnya</span> gugur 
                                    dalam pertempuran Puputan Margarana. Namun, sebagian besar dari mereka 
                                    <span class="text-yellow-400">tidak memiliki rekaman identitas yang jelas</span> 
                                    dalam catatan sejarah.
                                </p>
                            </div>
                            
                            <div class="bg-black/30 rounded-lg p-6 border border-gray-700">
                                <h4 class="text-white font-bold mb-3 text-center">Kondisi yang Menyebabkan Minimnya Data:</h4>
                                <ul class="text-gray-300 space-y-2 text-sm">
                                    <li class="flex items-start">
                                        <i class="fas fa-exclamation-triangle text-red-400 mt-1 mr-3"></i>
                                        <span>Kondisi perang yang kacau dan mendadak</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-scroll text-yellow-400 mt-1 mr-3"></i>
                                        <span>Minimnya dokumentasi selama masa perang</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-user-secret text-blue-400 mt-1 mr-3"></i>
                                        <span>Banyak pejuang menggunakan nama samaran</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-history text-gray-400 mt-1 mr-3"></i>
                                        <span>Tidak adanya sistem pencatatan yang terstruktur</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-gray-400 italic">
                                "Mereka adalah pahlawan-pahlawan tanpa nama yang berjuang dengan gigih untuk mempertahankan 
                                kemerdekaan Indonesia, meskipun identitas mereka terkubur oleh waktu dan kondisi perang."
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- History Section -->
            <section id="sejarah" class="py-20 bg-dark-gradient relative">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="container mx-auto px-4 relative z-10">
                    <h2 class="text-3xl font-bold text-center mb-12 section-title text-white">Sejarah Puputan Margarana
                    </h2>

                    <div class="max-w-4xl mx-auto">
                        <!-- Timeline -->
                        <div class="relative">
                            <!-- Item 1 -->
                            <div class="timeline-item fade-in">
                                <h3 class="text-xl font-bold mb-2 text-gold">Latar Belakang</h3>
                                <p class="text-gray-300">
                                    Setelah proklamasi kemerdekaan Indonesia 17 Agustus 1945, Belanda berusaha kembali
                                    menjajah Indonesia melalui NICA. Di Bali, perlawanan dipimpin oleh I Gusti Ngurah
                                    Rai dengan membentuk pasukan Ciung Wanara.
                                </p>
                            </div>

                            <!-- Item 2 -->
                            <div class="timeline-item fade-in">
                                <h3 class="text-xl font-bold mb-2 text-gold">Awal Konflik</h3>
                                <p class="text-gray-300">
                                    Pada 18 November 1946, pasukan Belanda mengepung markas pasukan Ngurah Rai di Desa
                                    Marga. Menyadari posisinya terkepung, Ngurah Rai memutuskan untuk melakukan puputan
                                    (perang habis-habisan).
                                </p>
                            </div>

                            <!-- Item 3 -->
                            <div class="timeline-item fade-in">
                                <h3 class="text-xl font-bold mb-2 text-gold">Pertempuran Sengit</h3>
                                <p class="text-gray-300">
                                    Pada 20 November 1946, pertempuran sengit terjadi. Pasukan Ngurah Rai yang berjumlah
                                    sekitar 96 orang bertempur melawan pasukan Belanda yang jauh lebih besar dan
                                    dilengkapi persenjataan modern.
                                </p>
                            </div>

                            <!-- Item 4 -->
                            <div class="timeline-item fade-in">
                                <h3 class="text-xl font-bold mb-2 text-gold">Gugurnya Para Pejuang</h3>
                                <p class="text-gray-300">
                                    Seluruh pasukan Ngurah Rai gugur dalam pertempuran tersebut, termasuk Ngurah Rai
                                    sendiri. Peristiwa ini kemudian dikenal sebagai Puputan Margarana, yang berarti
                                    perang habis-habisan di Marga.
                                </p>
                            </div>

                            <!-- Item 5 -->
                            <div class="timeline-item fade-in">
                                <h3 class="text-xl font-bold mb-2 text-gold">Dampak dan Makna</h3>
                                <p class="text-gray-300">
                                    Meskipun kalah secara militer, Puputan Margarana menjadi simbol perlawanan rakyat
                                    Bali dan memberikan dampak psikologis yang besar terhadap Belanda. Peristiwa ini
                                    menginspirasi perjuangan rakyat Indonesia di daerah lainnya.
                                </p>
                            </div>
                        </div>

                        <div class="mt-12 bg-darker p-8 rounded-xl border border-gray-800 shadow-xl fade-in">
                            <h3 class="text-xl font-bold mb-4 text-gold">Makna Puputan Margarana</h3>
                            <p class="text-gray-300 mb-4">
                                Puputan Margarana tidak hanya sekadar pertempuran fisik, tetapi juga mengandung
                                nilai-nilai luhur yang menjadi inspirasi bagi generasi penerus bangsa.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex items-start">
                                    <div class="bg-red-900/30 p-3 rounded-lg mr-4">
                                        <i class="fas fa-heart text-red-500"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">Semangat Patriotisme</h4>
                                        <p class="text-gray-400 text-sm">Rela berkorban demi tanah air</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-red-900/30 p-3 rounded-lg mr-4">
                                        <i class="fas fa-shield-alt text-red-500"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">Integritas</h4>
                                        <p class="text-gray-400 text-sm">Tetap setia pada prinsip perjuangan</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-red-900/30 p-3 rounded-lg mr-4">
                                        <i class="fas fa-users text-red-500"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">Kebersamaan</h4>
                                        <p class="text-gray-400 text-sm">Bersatu padu dalam perjuangan</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-red-900/30 p-3 rounded-lg mr-4">
                                        <i class="fas fa-fist-raised text-red-500"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">Keteguhan Hati</h4>
                                        <p class="text-gray-400 text-sm">Pantang menyerah sampai akhir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Galeri Section -->
            <section id="galeri" class="py-20 bg-darker">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12 section-title text-white">Galeri</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Gambar 1 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset('images/Tugu.jpeg') }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Monumen Tugu Margarana didirikan untuk mengenang peristiwa
                                    Puputan Margarana dan para pahlawan yang gugur.</p>
                                <button onclick="openModal('modal1')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>

                        <!-- Gambar 2 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset('images/Ngurahrai.jpg') }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Potret Letnan Kolonel I Gusti Ngurah Rai, pemimpin pasukan
                                    Ciung Wanara dalam Puputan Margarana.</p>
                                <button onclick="openModal('modal2')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>

                        <!-- Gambar 3 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset('images/lokasi.jpg') }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Lokasi pertempuran Puputan Margarana di Desa Marga, Tabanan,
                                    Bali yang sekarang menjadi situs sejarah.</p>
                                <button onclick="openModal('modal3')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>

                        <!-- Gambar 4 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset("images/Makam_pahlawan.jpg") }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Tempat pemakaman Lebih Dari 1300 lebih Pahlawan Yang Gugur Pada Perang kemerdekaan Di Bali</p>
                                <button onclick="openModal('modal4')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>

                        <!-- Gambar 5 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset("images/upacara_peringatan.jpg") }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Upacara peringatan Puputan Margarana yang diadakan setiap
                                    tahun untuk menghormati jasa para pahlawan.</p>
                                <button onclick="openModal('modal5')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>

                        <!-- Gambar 6 -->
                        <div class="bg-dark-gradient rounded-xl overflow-hidden shadow-xl card-hover fade-in img-frame">
                            <div class="h-64 relative overflow-hidden">
                                <!-- Gambar Background -->
                                <img 
                                    src="{{ asset("images/Museum.jpg") }}" 
                                    alt="Monumen Tugu Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <!-- Overlay Gradient untuk meningkatkan keterbacaan teks -->
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                
                                <!-- Konten Teks di atas gambar -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center p-4">
                                        <i class="fas fa-monument text-5xl text-white mb-4"></i>
                                        <h3 class="text-xl font-bold text-white">Monumen Tugu Margarana</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-300 mb-4">Museum yang menyimpan berbagai artefak dan dokumentasi terkait
                                    peristiwa Puputan Margarana.</p>
                                <button onclick="openModal('modal6')" class="w-full bg-red-700 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-all duration-300 font-medium">
                                    Lihat Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Artikel Section -->
            <section id="artikel" class="py-20 bg-dark-gradient">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-4 section-title text-white">Artikel Terkait</h2>
                    <p class="text-gray-300 text-center mb-12 max-w-2xl mx-auto">Jelajahi koleksi artikel lengkap tentang sejarah, strategi, dan warisan budaya Puputan Margarana</p>

                    <!-- Search and Filter Section -->
                    <div class="mb-8 fade-in">
                        <div class="flex flex-col lg:flex-row gap-6 items-start lg:items-center justify-between">
                            <!-- Search Bar dengan efek glassmorphism -->
                            <div class="relative w-full lg:w-80">
                                <div class="relative group">
                                    <input 
                                        type="text" 
                                        id="searchArtikel" 
                                        placeholder="Cari artikel..." 
                                        class="w-full bg-gray-900/50 backdrop-blur-sm border-2 border-gray-700 rounded-xl py-4 px-12 text-white placeholder-gray-400 focus:outline-none focus:border-red-500 focus:bg-gray-900/70 transition-all duration-300 shadow-lg group-hover:border-gray-600"
                                    >
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-search text-gray-400 group-hover:text-red-400 transition-colors duration-300"></i>
                                    </div>
                                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                        <button id="clearSearch" class="text-gray-400 hover:text-red-400 transition-colors duration-300 opacity-0 pointer-events-none">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Filter dengan design lebih menarik -->
                            <div class="w-full lg:w-auto">
                                <div class="bg-gray-900/50 backdrop-blur-sm border-2 border-gray-700 rounded-xl p-2 shadow-lg">
                                    <div class="flex flex-wrap gap-2 justify-center">
                                        <button class="category-filter group relative overflow-hidden bg-gradient-to-r from-red-600 to-red-700 text-white px-5 py-3 rounded-lg transition-all duration-300 active shadow-lg hover:shadow-red-500/20" data-category="all">
                                            <span class="relative z-10 flex items-center">
                                                <i class="fas fa-layer-group mr-2"></i>
                                                Semua
                                            </span>
                                            <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </button>
                                        
                                        <button class="category-filter group relative overflow-hidden bg-gray-800/80 border border-gray-600 text-gray-300 px-5 py-3 rounded-lg transition-all duration-300 hover:border-red-500 hover:text-white hover:bg-gray-700/80" data-category="strategi">
                                            <span class="relative z-10 flex items-center">
                                                <i class="fas fa-chess-board mr-2"></i>
                                                Strategi
                                            </span>
                                        </button>
                                        
                                        <button class="category-filter group relative overflow-hidden bg-gray-800/80 border border-gray-600 text-gray-300 px-5 py-3 rounded-lg transition-all duration-300 hover:border-red-500 hover:text-white hover:bg-gray-700/80" data-category="sejarah">
                                            <span class="relative z-10 flex items-center">
                                                <i class="fas fa-history mr-2"></i>
                                                Sejarah
                                            </span>
                                        </button>
                                        
                                        <button class="category-filter group relative overflow-hidden bg-gray-800/80 border border-gray-600 text-gray-300 px-5 py-3 rounded-lg transition-all duration-300 hover:border-red-500 hover:text-white hover:bg-gray-700/80" data-category="budaya">
                                            <span class="relative z-10 flex items-center">
                                                <i class="fas fa-masks-theater mr-2"></i>
                                                Budaya
                                            </span>
                                        </button>
                                        
                                        <button class="category-filter group relative overflow-hidden bg-gray-800/80 border border-gray-600 text-gray-300 px-5 py-3 rounded-lg transition-all duration-300 hover:border-red-500 hover:text-white hover:bg-gray-700/80" data-category="pahlawan">
                                            <span class="relative z-10 flex items-center">
                                                <i class="fas fa-user-shield mr-2"></i>
                                                Pahlawan
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Sort Options dengan design premium -->
                            <div class="w-full lg:w-56">
                                <div class="relative group">
                                    <select id="sortArtikel" class="w-full bg-gray-900/50 backdrop-blur-sm border-2 border-gray-700 text-white rounded-xl py-4 px-4 pr-12 focus:outline-none focus:border-red-500 focus:bg-gray-900/70 transition-all duration-300 shadow-lg appearance-none cursor-pointer group-hover:border-gray-600">
                                        <option value="newest">📅 Terbaru</option>
                                        <option value="oldest">🕰️ Terlama</option>
                                        <option value="popular">🔥 Populer</option>
                                    </select>
                                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-red-400 transition-colors duration-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Filters Display -->
                        <div id="activeFilters" class="mt-4 flex flex-wrap gap-2 opacity-0 transition-opacity duration-300">
                            <!-- Filter tags akan muncul di sini -->
                        </div>
                    </div>

                    <!-- Artikel Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="artikelGrid">
                        <!-- Artikel 1 -->
                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="strategi" data-date="2024-01-15" data-views="1245">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/strategi.jpg") }}" 
                                    alt="Strategi Gerilya" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-red-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-red-700 text-white px-3 py-1 rounded-full text-sm font-medium">Strategi</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">8 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Strategi Gerilya Pasukan Ciung Wanara</h3>
                                <p class="text-gray-300 mb-4">Analisis taktik gerilya yang digunakan oleh pasukan Ngurah Rai dalam menghadapi pasukan Belanda yang lebih besar dan modern.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>15 Jan 2024</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>1.2k</span>
                                </div>
                                <a href="{{ route('artikel1') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Artikel 2 -->
                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="sejarah" data-date="2024-01-10" data-views="987">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/peta.png") }}" 
                                    alt="Pengaruh Sejarah" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-blue-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-blue-700 text-white px-3 py-1 rounded-full text-sm font-medium">Sejarah</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">6 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Pengaruh Puputan Margarana terhadap Perjuangan Nasional</h3>
                                <p class="text-gray-300 mb-4">Bagaimana peristiwa Puputan Margarana mempengaruhi perjuangan kemerdekaan Indonesia di daerah lain.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>10 Jan 2024</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>987</span>
                                </div>
                                <a href="{{ route('artikel2') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Artikel 3 -->
                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="budaya" data-date="2024-01-05" data-views="756">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/budaya.jpg") }}" 
                                    alt="Warisan Budaya" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-purple-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-purple-700 text-white px-3 py-1 rounded-full text-sm font-medium">Budaya</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">10 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Puputan dalam Tradisi dan Budaya Bali</h3>
                                <p class="text-gray-300 mb-4">Menelusuri konsep puputan dalam budaya Bali dan bagaimana hal ini mempengaruhi mentalitas perjuangan rakyat Bali.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>5 Jan 2024</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>756</span>
                                </div>
                                <a href="{{ route('artikel3') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Artikel 4-6 (Contoh tambahan) -->
                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="pahlawan" data-date="2023-12-20" data-views="1123">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/biografi.webp") }}" 
                                    alt="Profil Pahlawan" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-amber-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-amber-700 text-white px-3 py-1 rounded-full text-sm font-medium">Pahlawan</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">7 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Biografi Lengkap I Gusti Ngurah Rai</h3>
                                <p class="text-gray-300 mb-4">Mengenal lebih dekat kehidupan dan perjuangan pahlawan nasional asal Bali yang gugur dalam Puputan Margarana.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>20 Des 2023</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>1.1k</span>
                                </div>
                                <a href="{{ route('artikel4') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="pahlawan" data-date="2023-12-20" data-views="1123">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/kedatangan.jpg") }}" 
                                    alt="Pertempuran Margarana" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-blue-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-blue-700 text-white px-3 py-1 rounded-full text-sm font-medium">Sejarah</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">7 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Alasan Terjadinya Pertempuran Margarana</h3>
                                <p class="text-gray-300 mb-4">Mengungkap akar penyebab dan latar belakang meletusnya Puputan Margarana yang dipimpin oleh I Gusti Ngurah Rai.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>20 Des 2023</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>1.1k</span>
                                </div>
                                <a href="{{ route('artikel5') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <div class="bg-darker rounded-xl overflow-hidden shadow-xl card-hover artikel-item" data-category="pahlawan" data-date="2023-12-20" data-views="1123">
                            <div class="h-48 relative overflow-hidden">
                                <img 
                                    src="{{ asset("images/pertemuan.jpg") }}" 
                                    alt="Perspektif Pertempuran" 
                                    class="w-full h-full object-cover"
                                >
                                <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-blue-900/40"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="bg-blue-700 text-white px-3 py-1 rounded-full text-sm font-medium">Sejarah</span>
                                </div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <i class="fas fa-clock mr-1"></i>
                                    <span class="text-sm">7 min read</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gold">Perspektif Belanda vs Indonesia dalam Pertempuran Margarana</h3>
                                <p class="text-gray-300 mb-4">Analisis perbedaan pandangan antara pihak Belanda dan Indonesia mengenai konflik serta dampak pertempuran ini.</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-gray-400 text-sm"><i class="fas fa-calendar mr-1"></i>20 Des 2023</span>
                                    <span class="text-gray-400 text-sm"><i class="fas fa-eye mr-1"></i>1.1k</span>
                                </div>
                                <a href="{{ route('artikel6') }}" class="inline-flex items-center text-gold font-medium hover:underline group">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
                    </div>

                    <!-- Load More Button -->
                    <div class="mt-12 text-center fade-in">
                        <button id="loadMore" class="inline-flex items-center bg-gradient-to-r from-red-800 to-red-900 hover:from-red-700 hover:to-red-800 text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fas fa-plus mr-2"></i> Muat Lebih Banyak
                        </button>
                    </div>

                    <!-- No Results Message (Hidden by default) -->
                    <div id="noResults" class="hidden text-center py-12">
                        <i class="fas fa-search text-5xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-300 mb-2">Artikel tidak ditemukan</h3>
                        <p class="text-gray-400">Coba gunakan kata kunci lain atau filter yang berbeda</p>
                    </div>
                </div>
            </section>


            <!-- Quote Section -->
            <section class="py-20 bg-darker border-t border-gray-800">
                <div class="container mx-auto px-4 text-center">
                    <div class="max-w-3xl mx-auto relative">
                        <div class="quote-mark">"</div>
                        <p class="text-2xl md:text-3xl italic text-gray-300 mb-6 fade-in">
                            "Mati lebih baik daripada menyerah pada penjajah" dan "Kami sanggup dan berjanji bertempur
                            terus hingga cita-cita tercapai,"
                        </p>
                        <p class="text-xl text-gold font-bold fade-in">- I Gusti Ngurah Rai -</p>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-darker border-t border-gray-800 py-12">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <div class="flex items-center space-x-3 mb-4">
                                <div
                                    class="w-10 h-10 bg-gradient-to-br from-red-800 to-red-900 rounded-full flex items-center justify-center">
                                    <i class="fas fa-monument text-white"></i>
                                </div>
                                <span class="text-xl font-bold text-white">Puputan Margarana</span>
                            </div>
                            <p class="text-gray-400 text-sm">
                                Website ini didedikasikan untuk mengenang dan mempelajari sejarah perjuangan Puputan
                                Margarana serta nilai-nilai kepahlawanan yang terkandung di dalamnya.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold mb-4 text-white">Tautan Cepat</h3>
                            <ul class="space-y-2">
                                <li><a href="#beranda"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Beranda</a>
                                </li>
                                <li><a href="#about"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Tentang</a>
                                </li>
                                <li><a href="#pahlawan"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Pahlawan</a>
                                </li>
                                <li><a href="#sejarah"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Sejarah</a>
                                </li>
                                <li><a href="#galeri"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Galeri</a>
                                </li>
                                <li><a href="#artikel"
                                        class="text-gray-400 hover:text-white transition-colors text-sm">Artikel</a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold mb-4 text-white">Kontak</h3>
                            <div class="space-y-2 text-sm text-gray-400">
                                <p class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-3 text-gold"></i>
                                    Monumen Tugu Margarana
                                </p>
                                <p class="flex items-center">
                                    <i class="fas fa-location-dot mr-3 text-gold"></i>
                                    Desa Marga, Kec. Margarana, Kab. Tabanan, Bali
                                </p>
                                <p class="flex items-center">
                                    <i class="fas fa-envelope mr-3 text-gold"></i>
                                    info@puputanmargarana.id
                                </p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold mb-4 text-white">Ikuti Kami</h3>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-red-800 rounded-full flex items-center justify-center transition-colors">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-red-800 rounded-full flex items-center justify-center transition-colors">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-red-800 rounded-full flex items-center justify-center transition-colors">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-red-800 rounded-full flex items-center justify-center transition-colors">
                                    <i class="fab fa-youtube text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm">
                        <p>&copy; 2023 Puputan Margarana. Semua Hak Dilindungi. | Dibuat dengan <i
                                class="fas fa-heart text-red-500 mx-1"></i> untuk Indonesia</p>
                    </div>
                </div>
            </footer>
        </div>


    </div>

    <!-- Modal Popup -->
    <div id="modalOverlay" class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center p-4">
        <div class="bg-amber-900 rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden border border-gray-600">
        </div>
    </div>

    <script>
        // Inisialisasi GSAP dengan ScrollTrigger
        gsap.registerPlugin(ScrollTrigger, TextPlugin);

        // Animasi untuk elemen dengan class fade-in
        gsap.utils.toArray('.fade-in').forEach(element => {
            gsap.fromTo(element, {
                opacity: 0,
                y: 30
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                    end: "bottom 15%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Animasi navbar saat scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-dark', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-dark', 'shadow-lg');
            }
        });

        // Smooth scroll untuk navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animasi hero section
        const heroTimeline = gsap.timeline();
        heroTimeline
            .from('.hero-bg .floating', {
                opacity: 0,
                scale: 0.8,
                duration: 1.2,
                ease: "back.out(1.7)"
            })
            .from('.hero-bg h1', {
                opacity: 0,
                y: -50,
                duration: 1,
                ease: "power2.out"
            }, "-=0.5")
            .from('.hero-bg p', {
                opacity: 0,
                y: 30,
                duration: 1,
                stagger: 0.2
            }, "-=0.5")
            .from('.hero-bg a', {
                opacity: 0,
                y: 30,
                duration: 1,
                stagger: 0.2
            }, "-=0.3");

        // Animasi teks berkedip pada hero
        gsap.to('.flame', {
            opacity: 0.7,
            duration: 0.5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        // Animasi statistik
        gsap.utils.toArray('.stat-number').forEach(stat => {
            const targetNumber = stat.textContent;
            stat.textContent = "0";

            ScrollTrigger.create({
                trigger: stat,
                start: "top 80%",
                onEnter: () => {
                    gsap.to(stat, {
                        innerText: targetNumber,
                        duration: 2,
                        snap: {
                            innerText: 1
                        },
                        ease: "power2.out"
                    });
                }
            });
        });

        // Parallax effect untuk section sejarah
        gsap.to("#sejarah .absolute", {
            yPercent: 30,
            ease: "none",
            scrollTrigger: {
                trigger: "#sejarah",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    </script>
    <script>
        // Data pahlawan
        const pahlawanData = [{
                id: 1,
                name: "Ir. Soekarno",
                image: "images/soekarno.jpg",
                quote: "Beri aku 1.000 orang tua, niscaya akan kucabut Semeru dari akarnya. Beri aku 10 pemuda, niscaya akan kuguncangkan dunia.",
                audio: "audio/soekarno.mp3"
            },
            {
                id: 2,
                name: "Mohammad Hatta",
                image: "images/hatta.jpg",
                quote: "Aku rela dipenjara asalkan bersama buku, karena dengan buku aku bebas.",
                audio: "audio/hatta.mp3"
            },
            {
                id: 3,
                name: "Pahlawan Nasional",
                image: "images/pahlawan.jpeg",
                quote: "Bangsa yang besar adalah bangsa yang menghormati jasa pahlawannya.",
                audio: "audio/gugurbunga.mp3"
            }
        ];

        // Elemen DOM
        const loadingPage = document.getElementById('loadingPage');
        const mainContent = document.getElementById('mainContent');
        const pahlawanImg = document.getElementById('pahlawanImg');
        const pahlawanName = document.getElementById('pahlawanName');
        const quoteText = document.getElementById('quoteText');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const continueText = document.getElementById('continueText');
        const counterDots = document.querySelectorAll('.counter-dot');

        // Variabel state
        let currentIndex = 0;
        let audio = new Audio();
        let isPlaying = false;
        let quoteChars = [];
        let typeInterval;

        // Format waktu (detik ke menit:detik)
        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
        }

        // Inisialisasi
        function init() {
            // Animate all elements
            animateElements();

            loadPahlawan(currentIndex);

            // Event listeners
            prevBtn.addEventListener('click', showPreviousPahlawan);
            nextBtn.addEventListener('click', showNextPahlawan);
            continueText.addEventListener('click', showMainContent);

            // Audio events
            audio.addEventListener('loadedmetadata', () => {
                console.log("Audio metadata loaded");
            });

            audio.addEventListener('timeupdate', updateProgress);
            audio.addEventListener('ended', audioEnded);
            audio.addEventListener('canplaythrough', () => {
                console.log("Audio siap diputar");
                // Putar audio secara otomatis
                playAudio();
            });

            audio.addEventListener('error', (e) => {
                console.error("Error audio:", e);
                console.log("Audio source:", audio.src);
                // Coba lagi dengan path alternatif
                setTimeout(() => {
                    const pahlawan = pahlawanData[currentIndex];
                    audio.src = pahlawan.audio;
                    audio.load();
                }, 500);
            });

            // Klik pada counter dots
            counterDots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    if (index !== currentIndex) {
                        currentIndex = index;
                        loadPahlawan(currentIndex);
                    }
                });
            });
        }

        // Animate all elements
        function animateElements() {
            const fadeElements = document.querySelectorAll('.fade-in');

            gsap.to(fadeElements, {
                duration: 1,
                opacity: 1,
                y: 0,
                stagger: 0.2,
                ease: "power2.out"
            });
        }

        // Memuat data pahlawan
        function loadPahlawan(index) {
            const pahlawan = pahlawanData[index];

            // Hentikan audio jika sedang diputar
            if (isPlaying) {
                pauseAudio();
            }

            // Hentikan animasi teks sebelumnya
            if (typeInterval) {
                clearInterval(typeInterval);
            }

            // Reset quote
            quoteText.textContent = '';

            // Animasi perubahan gambar
            gsap.to(pahlawanImg, {
                duration: 0.5,
                opacity: 0,
                scale: 0.8,
                onComplete: () => {
                    pahlawanImg.src = pahlawan.image;
                    pahlawanImg.alt = pahlawan.name;
                    pahlawanName.textContent = pahlawan.name;

                    gsap.to(pahlawanImg, {
                        duration: 0.5,
                        opacity: 1,
                        scale: 1
                    });
                }
            });

            setTimeout(() => {
                audio.src = pahlawan.audio;
                audio.load();
            }, 100);

            updateCounterDots(index);

            animateQuote(pahlawan.quote);
        }

        // Update counter dots
        function updateCounterDots(index) {
            counterDots.forEach(dot => {
                dot.classList.remove('active');
            });
            counterDots[index].classList.add('active');
        }

        // Animasi teks kutipan
        function animateQuote(text) {
            quoteChars = text.split('');
            quoteText.textContent = '';

            let i = 0;
            typeInterval = setInterval(() => {
                if (i < quoteChars.length) {
                    quoteText.textContent += quoteChars[i];
                    i++;
                } else {
                    clearInterval(typeInterval);
                }
            }, 40);
        }

        // Tampilkan pahlawan sebelumnya
        function showPreviousPahlawan() {
            currentIndex = (currentIndex - 1 + pahlawanData.length) % pahlawanData.length;
            loadPahlawan(currentIndex);
        }

        // Tampilkan pahlawan berikutnya
        function showNextPahlawan() {
            currentIndex = (currentIndex + 1) % pahlawanData.length;
            loadPahlawan(currentIndex);
        }

        // Putar audio
        function playAudio() {
            audio.play().then(() => {
                isPlaying = true;
                console.log("Audio berhasil diputar");
            }).catch(error => {
                console.error("Error memutar audio:", error);
                // Coba lagi setelah beberapa saat
                setTimeout(() => {
                    audio.play().catch(e => {
                        console.error("Masih error:", e);
                    });
                }, 500);
            });
        }

        // Jeda audio
        function pauseAudio() {
            audio.pause();
            isPlaying = false;
        }

        function updateProgress() {
        }

        // Audio selesai
        function audioEnded() {
            isPlaying = false;
        }

        // Tampilkan konten utama
        function showMainContent() {
            // Hentikan audio jika sedang diputar
            if (isPlaying) {
                pauseAudio();
            }

            // Animasi keluar loading page
            gsap.to(loadingPage, {
                duration: 0.8,
                opacity: 0,
                y: -50,
                onComplete: () => {
                    loadingPage.style.display = 'none';
                    mainContent.classList.remove('hidden');

                    // Animasi masuk konten utama
                    gsap.fromTo(mainContent, {
                        opacity: 0,
                        y: 50
                    }, {
                        duration: 0.8,
                        opacity: 1,
                        y: 0
                    });
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchArtikel');
            const clearSearchBtn = document.getElementById('clearSearch');
            const categoryFilters = document.querySelectorAll('.category-filter');
            const sortSelect = document.getElementById('sortArtikel');
            const artikelItems = document.querySelectorAll('.artikel-item');
            const loadMoreBtn = document.getElementById('loadMore');
            const noResults = document.getElementById('noResults');
            const activeFiltersContainer = document.getElementById('activeFilters');
            
            let visibleItems = 3;
            const totalItems = artikelItems.length;
            let isAnimating = false; // Flag untuk mencegah animasi bertumpuk

            // Fungsi untuk menampilkan artikel dengan animasi smooth
            function showArticle(item, delay = 0) {
                return new Promise(resolve => {
                    setTimeout(() => {
                        item.classList.remove('hidden');
                        // Force reflow untuk trigger animation
                        void item.offsetWidth;
                        item.classList.add('visible');
                        
                        // Selesaikan promise setelah animasi selesai
                        setTimeout(resolve, 500);
                    }, delay);
                });
            }

            // Fungsi untuk menyembunyikan artikel dengan animasi smooth
            function hideArticle(item) {
                return new Promise(resolve => {
                    item.classList.remove('visible');
                    // Tunggu animasi selesai sebelum menyembunyikan elemen
                    setTimeout(() => {
                        item.classList.add('hidden');
                        resolve();
                    }, 500);
                });
            }

            // Sembunyikan semua artikel di awal KECUALI yang akan ditampilkan
            async function initializeArticles() {
                // Tampilkan loading state
                artikelItems.forEach(item => {
                    item.classList.add('hidden');
                    item.classList.remove('visible');
                });
                
                // Tampilkan artikel yang seharusnya terlihat
                for (let i = 0; i < Math.min(visibleItems, artikelItems.length); i++) {
                    await showArticle(artikelItems[i], i * 100);
                }
                
                // Sembunyikan load more button jika tidak cukup artikel
                if (artikelItems.length <= visibleItems) {
                    loadMoreBtn.style.display = 'none';
                }
            }

            // Update clear button visibility
            searchInput.addEventListener('input', function() {
                if (this.value.length > 0) {
                    clearSearchBtn.classList.remove('opacity-0', 'pointer-events-none');
                    clearSearchBtn.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    clearSearchBtn.classList.add('opacity-0', 'pointer-events-none');
                    clearSearchBtn.classList.remove('opacity-100', 'pointer-events-auto');
                }
                updateActiveFilters();
                filterArticles();
            });

            // Clear search functionality
            clearSearchBtn.addEventListener('click', function() {
                searchInput.value = '';
                searchInput.focus();
                clearSearchBtn.classList.add('opacity-0', 'pointer-events-none');
                clearSearchBtn.classList.remove('opacity-100', 'pointer-events-auto');
                updateActiveFilters();
                filterArticles();
            });

            // Category filter active state dengan animasi
            categoryFilters.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active state from all buttons
                    categoryFilters.forEach(btn => {
                        btn.classList.remove('active', 'bg-gradient-to-r', 'from-red-600', 'to-red-700', 'text-white', 'shadow-lg', 'hover:shadow-red-500/20');
                        btn.classList.add('bg-gray-800/80', 'border', 'border-gray-600', 'text-gray-300');
                    });

                    // Add active state to clicked button
                    this.classList.add('active', 'bg-gradient-to-r', 'from-red-600', 'to-red-700', 'text-white', 'shadow-lg', 'hover:shadow-red-500/20');
                    this.classList.remove('bg-gray-800/80', 'border', 'border-gray-600', 'text-gray-300');

                    updateActiveFilters();
                    filterArticles();
                });
            });

            // Sort functionality
            sortSelect.addEventListener('change', function() {
                filterArticles();
            });

            // Load more functionality
            loadMoreBtn.addEventListener('click', async function() {
                if (isAnimating) return;
                
                isAnimating = true;
                const currentFilteredItems = getFilteredItems();
                const startIndex = visibleItems;
                visibleItems += 3;
                
                // Tampilkan artikel tambahan dengan animasi
                for (let i = startIndex; i < Math.min(visibleItems, currentFilteredItems.length); i++) {
                    await showArticle(currentFilteredItems[i], (i - startIndex) * 100);
                }
                
                updateLoadMoreButton(currentFilteredItems);
                isAnimating = false;
            });

            // Update active filters display
            function updateActiveFilters() {
                const activeCategory = document.querySelector('.category-filter.active').dataset.category;
                const searchTerm = searchInput.value;
                
                activeFiltersContainer.innerHTML = '';

                if (searchTerm.length > 0) {
                    const searchTag = document.createElement('div');
                    searchTag.className = 'bg-red-600 text-white px-3 py-2 rounded-lg flex items-center text-sm filter-tag';
                    searchTag.innerHTML = `
                        Pencarian: "${searchTerm}"
                        <button class="ml-2 hover:text-red-200 clear-search-tag">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    activeFiltersContainer.appendChild(searchTag);
                }

                if (activeCategory !== 'all') {
                    const categoryTag = document.createElement('div');
                    categoryTag.className = 'bg-blue-600 text-white px-3 py-2 rounded-lg flex items-center text-sm filter-tag';
                    categoryTag.innerHTML = `
                        Kategori: ${activeCategory}
                        <button class="ml-2 hover:text-blue-200 clear-category-tag">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    activeFiltersContainer.appendChild(categoryTag);
                }

                // Add event listeners to clear buttons in tags
                document.querySelectorAll('.clear-search-tag').forEach(btn => {
                    btn.addEventListener('click', function() {
                        searchInput.value = '';
                        searchInput.focus();
                        clearSearchBtn.classList.add('opacity-0', 'pointer-events-none');
                        clearSearchBtn.classList.remove('opacity-100', 'pointer-events-auto');
                        updateActiveFilters();
                        filterArticles();
                    });
                });

                document.querySelectorAll('.clear-category-tag').forEach(btn => {
                    btn.addEventListener('click', function() {
                        document.querySelector('.category-filter[data-category="all"]').click();
                    });
                });

                // Show/hide active filters container
                if (activeFiltersContainer.children.length > 0) {
                    activeFiltersContainer.classList.remove('opacity-0');
                    activeFiltersContainer.classList.add('opacity-100');
                } else {
                    activeFiltersContainer.classList.remove('opacity-100');
                    activeFiltersContainer.classList.add('opacity-0');
                }
            }

            // Fungsi untuk mendapatkan item yang difilter
            function getFilteredItems() {
                const searchTerm = searchInput.value.toLowerCase();
                const activeCategory = document.querySelector('.category-filter.active').dataset.category;
                const sortBy = sortSelect.value;

                let filteredItems = Array.from(artikelItems).filter(item => {
                    const title = item.querySelector('h3').textContent.toLowerCase();
                    const description = item.querySelector('p').textContent.toLowerCase();
                    const category = item.dataset.category;
                    
                    const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);
                    const matchesCategory = activeCategory === 'all' || category === activeCategory;
                    
                    return matchesSearch && matchesCategory;
                });

                // Sort items
                filteredItems.sort((a, b) => {
                    switch(sortBy) {
                        case 'newest':
                            return new Date(b.dataset.date) - new Date(a.dataset.date);
                        case 'oldest':
                            return new Date(a.dataset.date) - new Date(b.dataset.date);
                        case 'popular':
                            return parseInt(b.dataset.views) - parseInt(a.dataset.views);
                        default:
                            return 0;
                    }
                });

                return filteredItems;
            }

            // Update load more button
            function updateLoadMoreButton(filteredItems) {
                if (filteredItems.length === 0) {
                    loadMoreBtn.style.display = 'none';
                    return;
                }

                if (filteredItems.length > visibleItems) {
                    loadMoreBtn.style.display = 'inline-flex';
                    const remainingItems = filteredItems.length - visibleItems;
                    loadMoreBtn.innerHTML = `<i class="fas fa-plus mr-2"></i> Muat ${Math.min(3, remainingItems)} Lagi`;
                } else {
                    loadMoreBtn.style.display = 'none';
                    loadMoreBtn.innerHTML = `<i class="fas fa-check mr-2"></i> Semua Artikel Ditampilkan`;
                }
            }

            // Main filtering function dengan animasi yang lebih smooth
            async function filterArticles() {
                if (isAnimating) return;
                isAnimating = true;

                const filteredItems = getFilteredItems();

                // Sembunyikan semua artikel terlebih dahulu
                const hidePromises = Array.from(artikelItems).map(item => hideArticle(item));
                await Promise.all(hidePromises);

                // Tampilkan hasil filter dengan animasi
                for (let i = 0; i < Math.min(visibleItems, filteredItems.length); i++) {
                    await showArticle(filteredItems[i], i * 100);
                }

                // Show/hide no results message
                if (filteredItems.length === 0) {
                    noResults.classList.remove('hidden');
                    loadMoreBtn.style.display = 'none';
                } else {
                    noResults.classList.add('hidden');
                }

                updateLoadMoreButton(filteredItems);
                isAnimating = false;
            }

            // Initialize
            setTimeout(() => {
                initializeArticles();
                updateActiveFilters();
            }, 100);

            // Reset visible items when search/filter changes
            searchInput.addEventListener('input', function() {
                visibleItems = 3;
            });

            categoryFilters.forEach(button => {
                button.addEventListener('click', function() {
                    visibleItems = 3;
                });
            });

            sortSelect.addEventListener('change', function() {
                visibleItems = 3;
            });
        });

        // Jalankan inisialisasi saat halaman dimuat
        window.addEventListener('DOMContentLoaded', init);


        const modalData = {
            modal1: {
                title: "Monumen Tugu Margarana",
                icon: "fa-monument",
                image: "images/Tugu.jpeg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Monumen Tugu Margarana merupakan situs bersejarah yang dibangun untuk mengenang peristiwa heroik Puputan Margarana yang terjadi pada 20 November 1946.</p>
                        
                        <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                            <h4 class="text-gold font-bold mb-2">Fakta Sejarah:</h4>
                            <ul class="text-gray-300 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-calendar-day text-red-400 mt-1 mr-3"></i>
                                    <span>Dibangun pada tahun 1954</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-red-400 mt-1 mr-3"></i>
                                    <span>Terletak di Desa Marga, Kecamatan Marga, Tabanan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-ruler-combined text-red-400 mt-1 mr-3"></i>
                                    <span>Tinggi monumen 17 meter, melambangkan tanggal kemerdekaan</span>
                                </li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-300">Monumen ini menjadi simbol perjuangan rakyat Bali dalam mempertahankan kemerdekaan Indonesia dari penjajahan Belanda.</p>
                    </div>
                `
            },
            modal2: {
                title: "Letkol I Gusti Ngurah Rai",
                icon: "fa-user-shield",
                image: "images/Pahlawan.jpeg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Letnan Kolonel I Gusti Ngurah Rai adalah pahlawan nasional Indonesia dari Bali yang memimpin pertempuran Puputan Margarana.</p>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                                <h4 class="text-gold font-bold mb-2">Biodata:</h4>
                                <ul class="text-gray-300 space-y-2 text-sm">
                                    <li class="flex justify-between">
                                        <span>Lahir:</span>
                                        <span class="text-white">30 Januari 1917</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span>Gugur:</span>
                                        <span class="text-white">20 November 1946</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span>Pangkat:</span>
                                        <span class="text-white">Letnan Kolonel</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                                <h4 class="text-gold font-bold mb-2">Prestasi:</h4>
                                <ul class="text-gray-300 space-y-2 text-sm">
                                    <li class="flex items-start">
                                        <i class="fas fa-star text-yellow-400 mt-1 mr-2"></i>
                                        <span>Pahlawan Nasional Indonesia</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-medal text-yellow-400 mt-1 mr-2"></i>
                                        <span>Pemimpin Pasukan Ciung Wanara</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <p class="text-gray-300">Dengan semangat "Puputan" (berjuang sampai habis), beliau memimpin pertempuran melawan Belanda hingga gugur bersama seluruh pasukannya.</p>
                    </div>
                `
            },
            modal3: {
                title: "Lokasi Pertempuran",
                icon: "fa-map-marked-alt",
                image: "images/Rincianlokasi.jpg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Lokasi pertempuran Puputan Margarana berada di Desa Marga, Kecamatan Marga, Kabupaten Tabanan, Bali.</p>
                        
                        <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                            <h4 class="text-gold font-bold mb-2">Detail Lokasi:</h4>
                            <ul class="text-gray-300 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-map-pin text-red-400 mt-1 mr-3"></i>
                                    <span>Desa Marga, Kecamatan Marga, Kabupaten Tabanan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-clock text-red-400 mt-1 mr-3"></i>
                                    <span>Jarak: ± 25 km dari Kota Denpasar</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-mountain text-red-400 mt-1 mr-3"></i>
                                    <span>Wilayah perbukitan dengan ketinggian 400-600 mdpl</span>
                                </li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-300">Lokasi ini dipilih karena strategis untuk pertahanan dengan kontur berbukit-bukit yang mempersulit pergerakan musuh.</p>
                    </div>
                `
            },
            modal4: {
                title: "Makam Para Pahlawan Di Bali",
                icon: "fa-cemetery",
                image: "images/Makam_pahlawan.jpg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Terdapat lebih dari 1300 pahlawan yang gugur dalam perang kemerdekaan di Bali, tersebar di berbagai makam pahlawan across Bali.</p>
                        
                        <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                            <h4 class="text-gold font-bold mb-2">Lokasi Makam Pahlawan:</h4>
                            <ul class="text-gray-300 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-red-400 mt-1 mr-3"></i>
                                    <span>TPU Puputan Margarana - 96 pejuang</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-red-400 mt-1 mr-3"></i>
                                    <span>Monumen Bajra Sandhi Renon - 1.371 nama pahlawan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-red-400 mt-1 mr-3"></i>
                                    <span>Makam Pahlawan Kusamba, Klungkung</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-red-400 mt-1 mr-3"></i>
                                    <span>Makam Pahlawan Tanah Aron, Karangasem</span>
                                </li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-300">Setiap tahun, upacara peringatan digelar untuk menghormati jasa para pahlawan yang telah gugur membela kemerdekaan Indonesia.</p>
                    </div>
                `
            },
            modal5: {
                title: "Upacara Peringatan",
                icon: "fa-monument",
                image: "images/upacara_peringatan.jpg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Upacara peringatan Puputan Margarana dilaksanakan setiap tahun pada tanggal 20 November untuk mengenang jasa para pahlawan.</p>
                        
                        <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                            <h4 class="text-gold font-bold mb-2">Rangkaian Acara:</h4>
                            <ul class="text-gray-300 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-flag text-red-400 mt-1 mr-3"></i>
                                    <span>Pengibaran bendera setengah tiang</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-wreath text-red-400 mt-1 mr-3"></i>
                                    <span>Penaburan bunga di makam pahlawan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-user-tie text-red-400 mt-1 mr-3"></i>
                                    <span>Pidato dari pejabat pemerintah dan veteran</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-pray text-red-400 mt-1 mr-3"></i>
                                    <span>Doa bersama untuk arwah para pahlawan</span>
                                </li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-300">Upacara ini dihadiri oleh keluarga pahlawan, veteran, pejabat pemerintah, pelajar, dan masyarakat umum sebagai bentuk penghormatan.</p>
                    </div>
                `
            },
            modal6: {
                title: "Museum Perjuangan",
                icon: "fa-landmark",
                image: "images/Museum.jpg",
                content: `
                    <div class="space-y-4">
                        <p class="text-gray-300">Museum Perjuangan Rakyat Bali menyimpan berbagai koleksi bersejarah terkait perjuangan rakyat Bali melawan penjajah.</p>
                        
                        <div class="bg-gray-700/80 p-4 rounded-lg border border-gray-700">
                            <h4 class="text-gold font-bold mb-2">Koleksi Museum:</h4>
                            <ul class="text-gray-300 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-gun text-red-400 mt-1 mr-3"></i>
                                    <span>Senjata tradisional dan modern yang digunakan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-photo-video text-red-400 mt-1 mr-3"></i>
                                    <span>Dokumentasi foto dan surat-surat bersejarah</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-tshirt text-red-400 mt-1 mr-3"></i>
                                    <span>Pakaian dan perlengkapan para pejuang</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-book text-red-400 mt-1 mr-3"></i>
                                    <span>Arsip dan naskah perjuangan</span>
                                </li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-300">Museum ini menjadi sumber edukasi penting bagi generasi muda untuk memahami sejarah perjuangan kemerdekaan di Bali.</p>
                    </div>
                `
            }
        };

        // Fungsi untuk membuka modal
        function openModal(modalId) {
            const data = modalData[modalId];
            const modalOverlay = document.getElementById('modalOverlay');
            
            modalOverlay.innerHTML = `
                <div class="bg-darker rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto border border-gray-800">
                    <div class="relative">
                        <!-- Header -->
                        <div class="bg-gradient-to-r from-red-900 to-red-800 p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                        <i class="fas ${data.icon} text-white text-xl"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white">${data.title}</h3>
                                </div>
                                <button onclick="closeModal()" class="text-white hover:text-gray-300 text-2xl">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div class="rounded-lg overflow-hidden">
                                    <img src="${data.image}" alt="${data.title}" class="w-full h-64 object-cover">
                                </div>
                                <div>
                                    ${data.content}
                                </div>
                            </div>
                            
                            <div class="flex justify-end pt-4 border-t border-gray-700">
                                <button onclick="closeModal()" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-6 rounded-lg transition-all duration-300 font-medium">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            modalOverlay.classList.remove('hidden');
            modalOverlay.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            const modalOverlay = document.getElementById('modalOverlay');
            modalOverlay.classList.add('hidden');
            modalOverlay.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Tutup modal ketika klik di luar konten
        document.getElementById('modalOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</x-head>
