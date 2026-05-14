<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Armida Contreras | AI Systems Developer</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'gradient': 'gradient 8s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#0a0a0f] text-white overflow-x-hidden">

<div class="custom-cursor hidden lg:block"></div>

<nav class="fixed w-full z-50 backdrop-blur-xl bg-[#0a0a0f]/80 border-b border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="text-2xl font-bold gradient-text">Armida<span class="text-cyan-400">.</span></a>
        
        <div class="hidden md:flex space-x-6">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="experience.php" class="nav-link">Experience</a>
            <a href="projects.php" class="nav-link">Projects</a>
            <a href="certifications.php" class="nav-link">Certifications</a>
            <a href="contact.php" class="nav-link">Contact</a>
        </div>
        
        <button id="mobile-menu-btn" class="md:hidden text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden bg-[#0a0a0f]/95 backdrop-blur-lg border-t border-cyan-500/20">
        <div class="flex flex-col space-y-4 px-6 py-4">
            <a href="index.php" class="nav-link py-2">Home</a>
            <a href="about.php" class="nav-link py-2">About</a>
            <a href="experience.php" class="nav-link py-2">Experience</a>
            <a href="projects.php" class="nav-link py-2">Projects</a>
            <a href="certifications.php" class="nav-link py-2">Certifications</a>
            <a href="contact.php" class="nav-link py-2">Contact</a>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn?.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>