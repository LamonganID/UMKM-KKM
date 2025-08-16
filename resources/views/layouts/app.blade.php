<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Welcome')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Scripts -->
        @assets('css/style.css')
        <style>
            html {
                scroll-behavior: smooth;
            }
            
            body {
                scroll-behavior: smooth;
            }
            
            /* Smooth scroll for all anchor links */
            a[href^="#"] {
                transition: all 0.3s ease;
            }
        </style>
</head>
    <body w-full>
        <div>
            <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->        
            <x-navbar />
            @yield('content')
            <x-footer></x-footer>
        </div>

        <script>
            // Enhanced smooth scrolling for anchor links
            document.addEventListener('DOMContentLoaded', function() {
                // Get all anchor links that start with #
                const anchorLinks = document.querySelectorAll('a[href^="#"]');
                
                anchorLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const targetId = this.getAttribute('href').substring(1);
                        const targetSection = document.getElementById(targetId);
                        
                        if (targetSection) {
                            e.preventDefault();
                            
                            // Smooth scroll to target
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                            
                            // Add scroll margin to account for fixed navbar
                            targetSection.style.scrollMarginTop = '80px';
                        }
                    });
                });
                
                // Add scroll margin to all sections with IDs
                const sections = document.querySelectorAll('[id]');
                sections.forEach(section => {
                    section.style.scrollMarginTop = '80px';
                });
            });
        </script>
    </body>
</html>
