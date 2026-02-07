<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Febrian - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900">
    <nav class="p-6 flex justify-between items-center bg-white shadow-sm">
        <h1 class="text-xl font-bold">DimasFebrian.app</h1>
        <div class="space-x-4">
            <a href="#" class="hover:text-blue-500">Home</a>
            <a href="#" class="hover:text-blue-500">Projects</a>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Contact</a>
        </div>
    </nav>

    <header class="py-20 px-6 text-center">
        <h2 class="text-5xl font-extrabold mb-4">Informatics Engineering Student</h2>
        <p class="text-lg text-slate-600 mb-8">Building modern web applications with Laravel 12 & AI collaboration.</p>
        <div class="flex justify-center gap-4">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold">Lihat Tugas</button>
            <button class="border border-slate-300 px-6 py-3 rounded-full font-semibold">Github Saya</button>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.from("h2", { duration: 1, y: -50, opacity: 0, ease: "bounce" });
        gsap.from("p", { duration: 1, opacity: 0, delay: 0.5 });
    </script>

</body>
</html>