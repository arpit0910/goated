<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GOATED JAIPUR | Urban Dance Studio')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="description" content="@yield('meta_description', 'GOATED Jaipur - Generation Of Aspiring Talent And Educating Dancers. The ultimate urban dance experience in Jaipur.')">
</head>

<body>

    <nav>
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="GOATED Logo">
            <span>GOATED</span>
        </a>
        <div class="nav-links" id="navLinks">
            <a href="{{ route('about') }}">Philosophy</a>
            <a href="{{ route('classes') }}">Classes</a>
            <a href="{{ route('wall-of-fame') }}">Wall of Fame</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
        <button class="menu-btn" onclick="toggleMenu()">MENU</button>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <div>
                <div class="footer-logo" style="margin-bottom: 2rem;">
                    <img src="{{ asset('images/logo.png') }}" alt="GOATED Logo">
                    GOATED JAIPUR
                </div>
                <p style="color: var(--dim); font-size: 0.9rem; line-height: 1.6; max-width: 350px;">
                    Generation Of Aspiring Talent And Educating Dancers. Leading the urban dance movement in Jaipur
                    since 2020.
                </p>
            </div>
            <div>
                <h4
                    style="margin-bottom: 2rem; font-family: 'Syncopate', sans-serif; font-size: 0.8rem; letter-spacing: 2px;">
                    EXPLORE</h4>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <a href="{{ route('about') }}"
                        style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">PHILOSOPHY</a>
                    <a href="{{ route('classes') }}"
                        style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">TRAINING BATCHES</a>
                    <a href="{{ route('wall-of-fame') }}"
                        style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">WALL OF FAME</a>
                    <a href="{{ route('contact') }}"
                        style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">GET IN TOUCH</a>
                </div>
            </div>
            <div>
                <h4
                    style="margin-bottom: 2rem; font-family: 'Syncopate', sans-serif; font-size: 0.8rem; letter-spacing: 2px;">
                    CONNECT</h4>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <a href="#" style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">INSTAGRAM</a>
                    <a href="#" style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">YOUTUBE</a>
                    <a href="#" style="color: var(--fg); text-decoration: none; font-size: 0.8rem;">WHATSAPP</a>
                </div>
            </div>
        </div>
        <div
            style="border-top: 1px solid var(--border); padding-top: 2rem; width: 100%; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
            <div style="font-size: 0.7rem; color: var(--dim);">© {{ date('Y') }} GOATED JAIPUR.</div>
        </div>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Scroll handle
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            const menuBtn = document.querySelector('.menu-btn');
            navLinks.classList.toggle('active');
            menuBtn.textContent = navLinks.classList.contains('active') ? 'CLOSE' : 'MENU';
        }
    </script>
    @stack('scripts')
</body>

</html>
