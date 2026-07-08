<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600&display=swap');

        body {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
    <style>
        /* Mega Menu */
        .mega-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .group:hover .mega-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }

        /* Smooth hover effect for chevron */
        .group:hover i {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-zinc-50">

    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-amber-600 to-yellow-600 text-white py-2.5 text-sm">
        <div class="max-w-screen-2xl mx-auto px-6 flex items-center justify-between">
            <div class="flex items-center gap-x-6">
                <div class="flex items-center gap-x-2">
                    <i class="fa-solid fa-gift"></i>
                    <span class="font-medium">Limited Time Offer:</span>
                    <span>Get 30 Days Free + 20% OFF on Annual Plans</span>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-x-5 text-xs uppercase tracking-widest">
                <a href="#" class="hover:underline">Limited Slots Available</a>
                <span class="w-px h-3 bg-white/40"></span>
                <a href="#" class="hover:underline">Offer Ends Soon →</a>
            </div>
        </div>
    </div>

    <!-- ========================= -->
    <!-- Premium Navbar -->
    <!-- ========================= -->
    <header class="sticky top-0 z-50 bg-white shadow">
        <div class="max-w-screen-2xl mx-auto px-6">
            <div class="h-20 flex items-center justify-between">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 text-white flex items-center justify-center text-2xl font-bold">
                        A
                    </div>
                    <div>
                        <h2 class="text-2xl font-black">AIManager</h2>
                        <p class="text-xs text-zinc-500">Compare • Review • Develop</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center gap-8 font-medium">
                    <a href="#" class="hover:text-amber-600 transition-colors">Home</a>

                    <!-- Mega Menu -->
                    <div class="relative group" id="softwareMenu">
                        <button class="flex items-center gap-2 hover:text-amber-600 transition-colors">
                            Software
                            <i class="fa fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                        </button>

                        <!-- Mega Menu -->
                        <div class="mega-menu fixed left-0 right-0 top-26 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="max-w-screen-2xl mx-auto px-6">
                                <div class="bg-white rounded-3xl border shadow-2xl overflow-hidden">
                                    <div class="grid grid-cols-4 gap-8 p-8">
                                        <!-- Categories -->
                                        <div>
                                            <h4 class="font-bold text-amber-600 mb-4">Categories</h4>
                                            <ul class="space-y-3 text-sm">
                                                <li><a href="#" class="hover:text-amber-600">CRM Software</a></li>
                                                <li><a href="#" class="hover:text-amber-600">ERP Software</a></li>
                                                <li><a href="#" class="hover:text-amber-600">HRMS Software</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Accounting</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Inventory</a></li>
                                                <li><a href="#" class="hover:text-amber-600">AI Software</a></li>
                                            </ul>
                                        </div>
                                        <!-- Popular -->
                                        <div>
                                            <h4 class="font-bold text-amber-600 mb-4">Popular</h4>
                                            <ul class="space-y-3 text-sm">
                                                <li><a href="#" class="hover:text-amber-600">ClickUp</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Monday</a></li>
                                                <li><a href="#" class="hover:text-amber-600">HubSpot</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Zoho CRM</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Salesforce</a></li>
                                            </ul>
                                        </div>
                                        <!-- Development -->
                                        <div>
                                            <h4 class="font-bold text-amber-600 mb-4">Development</h4>
                                            <ul class="space-y-3 text-sm">
                                                <li><a href="#" class="hover:text-amber-600">CRM Development</a></li>
                                                <li><a href="#" class="hover:text-amber-600">ERP Development</a></li>
                                                <li><a href="#" class="hover:text-amber-600">HRMS Development</a></li>
                                                <li><a href="#" class="hover:text-amber-600">AI Solutions</a></li>
                                                <li><a href="#" class="hover:text-amber-600">Mobile Apps</a></li>
                                            </ul>
                                        </div>
                                        <!-- CTA -->
                                        <div>
                                            <div class="bg-gradient-to-br from-amber-500 to-orange-500 rounded-2xl p-6 text-white h-full">
                                                <i class="fa fa-code text-3xl"></i>
                                                <h3 class="text-xl font-bold mt-5">Need Custom Software?</h3>
                                                <p class="text-sm mt-3 text-amber-100">CRM, ERP, HRMS, AI & Mobile Apps.</p>
                                                <button class="mt-6 w-full bg-white text-amber-600 rounded-xl py-3 font-semibold hover:bg-amber-50 transition-colors">
                                                    Get Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="hover:text-amber-600 transition-colors">Blogs</a>
                    <a href="#" class="hover:text-amber-600 transition-colors">About</a>
                    <a href="#" class="hover:text-amber-600 transition-colors">Contact</a>
                </nav>

                <!-- Right Side -->
                <div class="hidden lg:flex items-center gap-4">
                    <a href="#" class="px-6 h-11 flex items-center rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-semibold transition-colors">
                        Get Consultation
                    </a>
                </div>

                <!-- Mobile Button -->
                <button id="mobileBtn" class="lg:hidden w-11 h-11 flex items-center justify-center rounded-xl border text-xl">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden lg:hidden fixed inset-0 bg-white z-50 overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <a href="#" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 text-white flex items-center justify-center text-2xl font-bold">A</div>
                        <span class="text-2xl font-black">AIManager</span>
                    </a>
                    <button id="closeMobile" class="text-3xl">✕</button>
                </div>

                <div class="space-y-6 text-lg">
                    <a href="#" class="block py-2">Home</a>
                    <a href="#" class="block py-2">Blogs</a>
                    <a href="#" class="block py-2">About</a>
                    <a href="#" class="block py-2">Contact</a>

                    <div class="pt-4 border-t">
                        <h3 class="font-bold text-amber-600 mb-4">Software Categories</h3>
                        <div class="grid grid-cols-2 gap-4 text-base">
                            <a href="#" class="block p-3 bg-zinc-50 rounded-xl">CRM Software</a>
                            <a href="#" class="block p-3 bg-zinc-50 rounded-xl">ERP Software</a>
                            <a href="#" class="block p-3 bg-zinc-50 rounded-xl">HRMS Software</a>
                            <a href="#" class="block p-3 bg-zinc-50 rounded-xl">AI Solutions</a>
                        </div>
                    </div>

                    <a href="#" class="block w-full text-center bg-amber-500 text-white py-4 rounded-2xl font-semibold mt-8">
                        Get Consultation
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->

    <div id="mobileMenu"
        class="hidden lg:hidden bg-white border-t">

        <div class="p-6 space-y-5">

            <a class="block" href="#">Home</a>

            <a class="block" href="#">Software</a>

            <a class="block" href="#">Services</a>

            <a class="block" href="#">Compare</a>

            <a class="block" href="#">Blogs</a>

            <a class="block" href="#">About</a>

            <a class="block" href="#">Contact</a>

            <!-- <a href="#"
                class="block text-center bg-amber-500 text-white py-3 rounded-xl">

                Get Consultation

            </a> -->

        </div>

    </div>

    @yield('pages')
    <!-- ========================= -->
    <!-- Footer Start -->
    <!-- ========================= -->
    <footer class="bg-zinc-950 text-zinc-300 mt-20">

        <!-- Top Footer -->
        <div class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-16">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                <!-- Column 1 -->
                <div>

                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-3 mb-5">
                        <div
                            class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-500 to-yellow-500 flex items-center justify-center text-white text-2xl font-bold">
                            A
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-white tracking-tight">
                                AIManager
                            </h3>
                        </div>
                    </a>

                    <p class="text-sm leading-7 text-zinc-400 mb-6">
                        AIManager helps businesses manage projects, teams, budgets, resources and workflows with
                        AI-powered productivity tools. Trusted by startups, agencies and enterprises worldwide.
                    </p>

                    <!-- Rating -->
                    <div class="flex items-center gap-3">

                        <div class="flex text-amber-400 text-lg">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>

                        <div>
                            <div class="text-white font-semibold">
                                4.5 / 5
                            </div>
                            <div class="text-xs text-zinc-500">
                                Rated by 5,000+ customers
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Column 2 -->
                <div>

                    <h4 class="text-white font-semibold text-lg mb-6">
                        Quick Links
                    </h4>

                    <ul class="space-y-4 text-sm">

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Software
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Pricing
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Blog
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Contact Us
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- Column 3 -->
                <div>

                    <h4 class="text-white font-semibold text-lg mb-6">
                        Popular Softwares
                    </h4>

                    <ul class="space-y-4 text-sm">

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Project Management Software
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Construction Management Software
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                CRM Software
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Inventory Management
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                Task Management Software
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-amber-400 transition">
                                ERP Solution
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- Column 4 -->
                <div>

                    <h4 class="text-white font-semibold text-lg mb-6">
                        Contact Us
                    </h4>

                    <div class="space-y-5 text-sm">

                        <!-- WhatsApp -->
                        <div class="flex items-start gap-4">

                            <div
                                class="w-10 h-10 rounded-xl bg-zinc-900 flex items-center justify-center text-green-500">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>

                            <div>

                                <p class="text-zinc-500 text-xs uppercase tracking-wider">
                                    WhatsApp
                                </p>

                                <a href="#" class="hover:text-amber-400 transition">
                                    +91 98765 43210
                                </a>

                            </div>

                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">

                            <div
                                class="w-10 h-10 rounded-xl bg-zinc-900 flex items-center justify-center text-amber-400">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>

                                <p class="text-zinc-500 text-xs uppercase tracking-wider">
                                    Email
                                </p>

                                <a href="#" class="hover:text-amber-400 transition">
                                    support@aimanager.com
                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Social -->
                    <div class="mt-8">

                        <p class="text-white font-medium mb-4">
                            Follow Us
                        </p>

                        <div class="flex gap-3">

                            <a href="#"
                                class="w-11 h-11 rounded-xl bg-zinc-900 hover:bg-amber-500 transition flex items-center justify-center">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#"
                                class="w-11 h-11 rounded-xl bg-zinc-900 hover:bg-sky-500 transition flex items-center justify-center">
                                <i class="fab fa-x-twitter"></i>
                            </a>

                            <a href="#"
                                class="w-11 h-11 rounded-xl bg-zinc-900 hover:bg-pink-500 transition flex items-center justify-center">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#"
                                class="w-11 h-11 rounded-xl bg-zinc-900 hover:bg-blue-600 transition flex items-center justify-center">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="#"
                                class="w-11 h-11 rounded-xl bg-zinc-900 hover:bg-red-600 transition flex items-center justify-center">
                                <i class="fab fa-youtube"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-zinc-800">

            <div class="max-w-screen-2xl mx-auto px-6 lg:px-10 py-6">

                <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                    <p class="text-sm text-zinc-500 text-center md:text-left">
                        © 2026 <span class="text-white font-semibold">AIManager</span>. All Rights Reserved.
                    </p>

                    <div class="flex flex-wrap items-center gap-6 text-sm">

                        <a href="#" class="hover:text-amber-400 transition">
                            Privacy Policy
                        </a>

                        <a href="#" class="hover:text-amber-400 transition">
                            Terms & Conditions
                        </a>

                        <a href="#" class="hover:text-amber-400 transition">
                            Cookie Policy
                        </a>

                        <a href="#" class="hover:text-amber-400 transition">
                            Sitemap
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </footer>
    <!-- ========================= -->
    <script>
        // Mobile Menu
        const mobileBtn = document.getElementById('mobileBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobile = document.getElementById('closeMobile');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        closeMobile.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'visible';
        });

        // Optional: Close mobile menu when clicking a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = 'visible';
            });
        });
    </script>
    <script>
        document.querySelectorAll('.faq-btn').forEach(button => {

            button.addEventListener('click', () => {

                const item = button.parentElement;
                const content = item.querySelector('.faq-content');
                const icon = button.querySelector('i');

                document.querySelectorAll('.faq-item').forEach(faq => {

                    if (faq !== item) {
                        faq.querySelector('.faq-content').classList.add('hidden');
                        faq.querySelector('i').classList.remove('fa-minus', 'rotate-180');
                        faq.querySelector('i').classList.add('fa-plus');
                    }

                });

                content.classList.toggle('hidden');

                if (content.classList.contains('hidden')) {
                    icon.classList.remove('fa-minus', 'rotate-180');
                    icon.classList.add('fa-plus');
                } else {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus', 'rotate-180');
                }

            });

        });
    </script>
</body>

</html>