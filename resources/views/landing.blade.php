<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Febrian | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            background-color: #f1f5f9;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(168, 85, 247, 0.05) 0px, transparent 50%);
        }
        .glass-nav {
            background: rgba(241, 245, 249, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .card-subtle {
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        .reveal { opacity: 0; transform: translateY(20px); }
    </style>
</head>
<body class="text-slate-800 antialiased selection:bg-indigo-100 selection:text-indigo-700">

    <nav class="fixed w-full z-50 px-6 py-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center glass-nav px-5 py-2.5 rounded-2xl shadow-sm">
            <span class="text-lg font-bold tracking-tight text-indigo-600 flex items-center gap-2">
                <i data-lucide="code-2" class="w-5 h-5"></i> dimas.dev
            </span>
            <div class="hidden md:flex space-x-6 text-[13px] font-medium uppercase tracking-wider items-center">
                <a href="#home" class="hover:text-indigo-600 transition-colors">Home</a>
                <a href="#about" class="hover:text-indigo-600 transition-colors">About</a>
                <a href="#projects" class="hover:text-indigo-600 transition-colors">Projects</a>
                <a href="mailto:email@kamu.com" class="text-indigo-600 font-bold border-l pl-6 border-slate-300 flex items-center gap-2">
                    <i data-lucide="send" class="w-4 h-4"></i> Hire Me
                </a>
            </div>
        </div>
    </nav>

    <section id="home" class="min-h-[90vh] flex flex-col items-center justify-center px-6 text-center">
        <div class="reveal inline-flex items-center gap-2 px-3 py-1 mb-6 text-[11px] font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50/50 border border-indigo-100 rounded-full">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
            </span>
            Available for Projects
        </div>
        
        <h1 class="reveal text-4xl md:text-5xl font-bold tracking-tight mb-6 leading-[1.1] max-w-3xl">
            Informatics Student <span class="text-slate-400 font-normal italic">&</span> <br>
            <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Full-stack Developer</span>
        </h1>
        
        <p class="reveal text-sm md:text-base text-slate-500 mb-10 max-w-xl leading-relaxed">
            Fokus pada pengembangan ekosistem digital untuk komunitas. Menggabungkan estetika UI dengan fungsionalitas Laravel 12.
        </p>

        <div class="reveal flex flex-wrap gap-3 justify-center">
            <a href="#projects" class="px-6 py-3 bg-indigo-600 text-white rounded-xl text-sm font-semibold shadow-md shadow-indigo-200 hover:bg-indigo-700 hover:shadow-lg transition-all active:scale-95 flex items-center gap-2">
                <i data-lucide="layers" class="w-4 h-4"></i> Lihat Karya
            </a>
            <a href="https://github.com/dimasfebriannn" class="px-6 py-3 bg-white text-slate-700 border border-slate-200 rounded-xl text-sm font-semibold hover:bg-slate-50 transition-all flex items-center gap-2">
                <i data-lucide="github" class="w-4 h-4"></i> Github
            </a>
        </div>
    </section>

    <section id="about" class="py-20 px-6">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="reveal md:col-span-7 card-subtle p-8 rounded-3xl flex flex-col justify-center">
                    <h2 class="text-[11px] font-black uppercase tracking-[0.2em] text-indigo-500 mb-4 flex items-center gap-2">
                        <i data-lucide="user" class="w-3 h-3"></i> About Me
                    </h2>
                    <h3 class="text-2xl font-bold mb-4 tracking-tight">Dimas Febrian</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed mb-4">
                        Saya adalah mahasiswa semester 4 Teknik Informatika yang memiliki antusiasme tinggi dalam pengembangan web. Berbasis di Indonesia, saya senang mengeksplorasi teknologi baru untuk menciptakan aplikasi yang tidak hanya fungsional tetapi juga memberikan pengalaman pengguna yang menyenangkan.
                    </p>
                    <p class="text-[13px] text-slate-500 leading-relaxed">
                        Saat ini, saya aktif mengembangkan proyek komunitas seperti <strong>Majelis MDPL</strong> dan mendalami Laravel 12 untuk solusi *full-stack* yang modern.
                    </p>
                </div>
                
                <div class="reveal md:col-span-5 grid grid-cols-1 gap-6">
                    <div class="card-subtle p-6 rounded-3xl flex items-center gap-4">
                        <div class="w-10 h-10 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600">
                            <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Education</p>
                            <p class="text-[13px] font-bold">Teknik Informatika - SMT 4</p>
                        </div>
                    </div>
                    <div class="card-subtle p-6 rounded-3xl flex items-center gap-4">
                        <div class="w-10 h-10 bg-emerald-50 rounded-2xl flex items-center justify-center text-emerald-600">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Location</p>
                            <p class="text-[13px] font-bold">Indonesia</p>
                        </div>
                    </div>
                    <div class="card-subtle p-6 rounded-3xl flex items-center gap-4 hover:border-indigo-200 transition-colors group cursor-default">
                        <div class="w-10 h-10 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-600 group-hover:scale-110 transition-transform">
                            <i data-lucide="heart" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Interests</p>
                            <p class="text-[13px] font-bold">UI Design & Web System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 flex items-end justify-between">
                <div class="reveal">
                    <h2 class="text-2xl font-bold tracking-tight flex items-center gap-3">
                        <i data-lucide="briefcase" class="text-indigo-600 w-6 h-6"></i> Portofolio Terpilih
                    </h2>
                    <p class="text-xs text-slate-400 mt-1 uppercase tracking-widest">Case Studies</p>
                </div>
                <div class="reveal h-px flex-1 bg-slate-200 mx-8 hidden md:block"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal group card-subtle rounded-2xl p-4 transition-all hover:bg-white hover:shadow-xl hover:shadow-indigo-500/5 hover:-translate-y-1">
                    <div class="aspect-[4/3] bg-indigo-100 rounded-xl mb-5 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/10 to-transparent"></div>
                        <i data-lucide="mountain" class="w-12 h-12 text-indigo-400 opacity-50 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="px-1">
                        <div class="flex items-center gap-2 mb-2 text-[10px] font-bold text-indigo-500 uppercase tracking-widest">
                            <i data-lucide="terminal" class="w-3 h-3"></i> <span>Laravel</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-indigo-600 transition-colors">Majelis MDPL</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed mb-4">Manajemen open trip gunung dengan fitur pendaftaran kolaboratif.</p>
                    </div>
                </div>

                <div class="reveal group card-subtle rounded-2xl p-4 transition-all hover:bg-white hover:shadow-xl hover:shadow-emerald-500/5 hover:-translate-y-1">
                    <div class="aspect-[4/3] bg-emerald-50 rounded-xl mb-5 flex items-center justify-center relative overflow-hidden">
                        <i data-lucide="package" class="w-12 h-12 text-emerald-400 opacity-50 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="px-1">
                        <div class="flex items-center gap-2 mb-2 text-[10px] font-bold text-emerald-600 uppercase tracking-widest">
                            <i data-lucide="database" class="w-3 h-3"></i> <span>Inventory</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-emerald-600 transition-colors">Majelis Rental</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed mb-4">Optimasi stok alat outdoor dengan sistem pelacakan otomatis.</p>
                    </div>
                </div>

                <div class="reveal group card-subtle rounded-2xl p-4 transition-all hover:bg-white hover:shadow-xl hover:shadow-orange-500/5 hover:-translate-y-1">
                    <div class="aspect-[4/3] bg-orange-50 rounded-xl mb-5 flex items-center justify-center relative overflow-hidden">
                        <i data-lucide="monitor" class="w-12 h-12 text-orange-400 opacity-50 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="px-1">
                        <div class="flex items-center gap-2 mb-2 text-[10px] font-bold text-orange-600 uppercase tracking-widest">
                            <i data-lucide="cpu" class="w-3 h-3"></i> <span>Java POS</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 group-hover:text-orange-600 transition-colors">Andi Fotocopy</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed mb-4">Solusi kasir desktop untuk efisiensi transaksi bisnis UMKM.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-400 text-[11px] font-medium tracking-widest uppercase italic border-t border-slate-200/50 mx-6">
        Dimas Febrian &copy; 2026 / Informatics SMT 4
    </footer>

    <script>
        // Inisialisasi Ikon
        lucide.createIcons();

        gsap.registerPlugin(ScrollTrigger);

        // Batch animation untuk semua element dengan class .reveal
        gsap.utils.toArray(".reveal").forEach((el, i) => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 90%",
                },
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "expo.out",
                delay: i * 0.05
            });
        });
    </script>
</body>
</html>