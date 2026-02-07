<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Febrian | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        .glass-morph {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-[#1e293b] overflow-x-hidden">

    <nav class="fixed w-full z-50 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center glass-morph px-6 py-3 rounded-2xl shadow-sm">
            <span class="text-xl font-black tracking-tighter text-blue-600">DF.DEV</span>
            <div class="hidden md:flex space-x-8 font-medium text-sm">
                <a href="#home" class="hover:text-blue-600 transition">Home</a>
                <a href="#projects" class="hover:text-blue-600 transition">Projects</a>
                <a href="#" class="px-5 py-2 bg-slate-900 text-white rounded-xl hover:bg-blue-600 transition">Contact</a>
            </div>
        </div>
    </nav>

    <section id="home" class="min-h-screen flex items-center justify-center pt-20 px-6">
        <div class="max-w-4xl text-center">
            <div class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-blue-600 uppercase bg-blue-50 rounded-full hero-badge">
                Informatics Engineering Student - SMT 4
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight hero-title">
                Membangun Solusi dengan <span class="text-blue-600">Laravel 12</span> & AI.
            </h1>
            <p class="text-lg md:text-xl text-slate-500 mb-10 max-w-2xl mx-auto hero-desc">
                Halo, saya Dimas Febrian. Fokus pada pengembangan web modern dan sistem informasi manajemen yang efisien.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center hero-btns">
                <a href="#projects" class="px-8 py-4 bg-blue-600 text-white rounded-2xl font-bold shadow-lg shadow-blue-200 hover:scale-105 transition">Lihat Portofolio</a>
                <a href="https://github.com/dimasfebriannn" class="px-8 py-4 bg-white border border-slate-200 rounded-2xl font-bold hover:bg-slate-50 transition">Github Profile</a>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-4 tracking-tight">Portofolio Terpilih</h2>
                <div class="h-1.5 w-16 bg-blue-600 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <div class="group project-card">
                    <div class="relative overflow-hidden rounded-3xl bg-white p-3 shadow-sm border border-slate-100 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="aspect-video bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 flex items-center justify-center overflow-hidden">
                            <span class="text-3xl font-black text-white/40 tracking-tighter uppercase italic">MDPL Web</span>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-3">
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-md uppercase">Laravel 12</span>
                                <span class="text-[10px] text-slate-400 font-medium italic">Web App</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-600 transition">Majelis MDPL Platform</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">Pusat informasi dan manajemen komunitas open trip gunung yang dikembangkan secara kolaboratif.</p>
                        </div>
                    </div>
                </div>

                <div class="group project-card">
                    <div class="relative overflow-hidden rounded-3xl bg-white p-3 shadow-sm border border-slate-100 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="aspect-video bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl mb-6 flex items-center justify-center overflow-hidden">
                            <span class="text-3xl font-black text-white/40 tracking-tighter uppercase italic">M-Rental</span>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-3">
                                <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-md uppercase">Laravel System</span>
                                <span class="text-[10px] text-slate-400 font-medium italic">Rental Management</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-emerald-600 transition">Majelis Rental System</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">Sistem manajemen stok dan penyewaan alat outdoor untuk mendukung operasional komunitas MDPL.</p>
                        </div>
                    </div>
                </div>

                <div class="group project-card">
                    <div class="relative overflow-hidden rounded-3xl bg-white p-3 shadow-sm border border-slate-100 transition-all hover:shadow-2xl hover:-translate-y-2">
                        <div class="aspect-video bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl mb-6 flex items-center justify-center overflow-hidden">
                            <span class="text-3xl font-black text-white/40 tracking-tighter uppercase italic">Kasirku</span>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-3">
                                <span class="px-3 py-1 bg-orange-50 text-orange-600 text-[10px] font-bold rounded-md uppercase">Java / Electron</span>
                                <span class="text-[10px] text-slate-400 font-medium italic">Desktop App</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-orange-600 transition">Andi Fotocopy POS</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">Aplikasi manajemen transaksi harian untuk bisnis fotokopi dengan fitur kasir yang efisien.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-400 text-xs">
        &copy; 2026 Dimas Febrian. Built with Passion & Caffeine.
    </footer>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Hero Animation
        const tl = gsap.timeline();
        tl.from(".hero-badge", { opacity: 0, y: 20, duration: 0.8, ease: "power4.out" })
          .from(".hero-title", { opacity: 0, y: 30, duration: 0.8, ease: "power4.out" }, "-=0.4")
          .from(".hero-desc", { opacity: 0, y: 20, duration: 0.8, ease: "power4.out" }, "-=0.4")
          .from(".hero-btns", { opacity: 0, scale: 0.9, duration: 0.8, ease: "power4.out" }, "-=0.4");

        // Scroll Animation for Projects
        gsap.from(".project-card", {
            scrollTrigger: {
                trigger: "#projects",
                start: "top 80%",
            },
            opacity: 0,
            y: 50,
            stagger: 0.2,
            duration: 1,
            ease: "power3.out"
        });
    </script>
</body>
</html>