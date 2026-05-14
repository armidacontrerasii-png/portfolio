<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armida Contreras | AI Systems Developer – DOST-FNRI</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .gradient-text {
            background: linear-gradient(135deg, #06b6d4, #a855f7, #3b82f6);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradientShift 5s ease infinite;
        }
        .glass-card {
            background: rgba(15, 25, 35, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(6, 182, 212, 0.25);
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .glass-card:hover {
            transform: translateY(-8px);
            border-color: #06b6d4;
            box-shadow: 0 20px 35px -15px rgba(6, 182, 212, 0.4);
        }
        .tech-badge {
            background: rgba(6, 182, 212, 0.15);
            padding: 0.4rem 1rem;
            border-radius: 40px;
            font-size: 0.8rem;
            border: 1px solid rgba(6, 182, 212, 0.3);
            transition: all 0.2s;
        }
        .tech-badge:hover {
            background: rgba(6, 182, 212, 0.3);
            transform: scale(1.05);
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background: linear-gradient(90deg, #06b6d4, #a855f7);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .hero-bg {
            background: radial-gradient(circle at 20% 30%, rgba(6, 182, 212, 0.2), transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(168, 85, 247, 0.15), transparent 50%),
                        #0a0a0f;
        }
        .floating {
            animation: float 5s ease-in-out infinite;
        }
        .timeline-dot {
            width: 14px;
            height: 14px;
            background: #06b6d4;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(6, 182, 212, 0.3);
        }
        .timeline-line {
            background: linear-gradient(to bottom, #06b6d4, #a855f7);
            width: 2px;
        }
        @media (max-width: 768px) {
            .timeline-line { display: none; }
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 1.5rem;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="bg-[#0a0a0f] text-white overflow-x-hidden">

<!-- Custom Cursor -->
<div class="hidden lg:block fixed w-6 h-6 border-2 border-cyan-400 rounded-full pointer-events-none z-50 transition-transform duration-100 transform -translate-x-1/2 -translate-y-1/2" id="cursor"></div>

<!-- Navigation -->
<nav class="fixed w-full z-50 backdrop-blur-xl bg-[#0a0a0f]/80 border-b border-cyan-500/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold gradient-text">Armida<span class="text-cyan-400">.</span></a>
        <div class="hidden md:flex space-x-6">
            <a href="#home" class="nav-link text-gray-300 hover:text-cyan-400 transition">Home</a>
            <a href="#why-hire" class="nav-link text-gray-300 hover:text-cyan-400 transition">Why Me</a>
            <a href="#experience" class="nav-link text-gray-300 hover:text-cyan-400 transition">Experience</a>
            <a href="#projects" class="nav-link text-gray-300 hover:text-cyan-400 transition">Projects</a>
            <a href="#demo" class="nav-link text-gray-300 hover:text-cyan-400 transition">Live Demo</a>
            <a href="#achievements" class="nav-link text-gray-300 hover:text-cyan-400 transition">Awards</a>
            <a href="#contact" class="nav-link text-gray-300 hover:text-cyan-400 transition">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="https://github.com/armidacontrerasii-png" target="_blank" class="text-gray-300 hover:text-cyan-400 transition text-xl"><i class="fab fa-github"></i></a>
            <button id="menu-btn" class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-[#0a0a0f]/95 backdrop-blur-lg border-t border-cyan-500/20">
        <div class="flex flex-col space-y-3 px-6 py-4">
            <a href="#home" class="nav-link py-2">Home</a>
            <a href="#why-hire" class="nav-link py-2">Why Me</a>
            <a href="#experience" class="nav-link py-2">Experience</a>
            <a href="#projects" class="nav-link py-2">Projects</a>
            <a href="#demo" class="nav-link py-2">Live Demo</a>
            <a href="#achievements" class="nav-link py-2">Awards</a>
            <a href="#contact" class="nav-link py-2">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center hero-bg relative overflow-hidden pt-20">
    <div class="absolute inset-0 opacity-30 pointer-events-none">
        <canvas id="particlesCanvas"></canvas>
    </div>
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center z-10">
        <div data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-wrap gap-3 mb-6">
                <span class="tech-badge">🤖 AI & LLM Integration</span>
                <span class="tech-badge">⚡ Full Stack</span>
                <span class="tech-badge">🧠 TensorFlow</span>
                <span class="tech-badge">🍎 Nutrition AI</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">
                Armida <span class="gradient-text">Contreras</span>
            </h1>
            <p class="text-cyan-300 text-xl md:text-2xl font-semibold mb-3" id="typed-role"></p>
            <p class="text-gray-300 text-lg leading-relaxed mb-8">
                Full Stack Developer & AI Systems Engineer at <strong class="text-cyan-400">DOST-FNRI</strong>. Building intelligent solutions for health, nutrition, and community development.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#projects" class="px-8 py-3 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 font-semibold hover:scale-105 transition-all"><i class="fas fa-robot mr-2"></i>See My Work</a>
                <a href="#contact" class="px-8 py-3 rounded-full border border-cyan-400 hover:bg-cyan-400/20 transition-all"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
            </div>
        </div>
        <div class="flex justify-center" data-aos="fade-left" data-aos-delay="200">
            <div class="relative">
                <div class="absolute inset-0 bg-cyan-500 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                <img src="assets/images/profile.jpg" alt="Armida" class="w-72 md:w-96 rounded-full border-4 border-cyan-400 shadow-2xl floating relative z-10 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Me (clean version) -->
<section id="why-hire" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold gradient-text text-center mb-16" data-aos="fade-up">Why Hire Me?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass-card p-8 rounded-2xl text-center" data-aos="zoom-in">
                <i class="fas fa-layer-group text-5xl text-cyan-400 mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Full Stack Experience</h3>
                <p class="text-gray-300">Delivered AI and web solutions that improved research processes and user experiences.</p>
            </div>
            <div class="glass-card p-8 rounded-2xl text-center" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-microchip text-5xl text-cyan-400 mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">AI-Integrated Solutions</h3>
                <p class="text-gray-300">Built and trained AI models (69 food recognition, 87% accuracy) integrated into real-world nutrition systems.</p>
            </div>
            <div class="glass-card p-8 rounded-2xl text-center" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-landmark text-5xl text-cyan-400 mb-4"></i>
                <h3 class="text-2xl font-bold mb-3">Government & Research</h3>
                <p class="text-gray-300">Hands-on experience with DOST-FNRI on national nutrition and health projects.</p>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience (Timeline) -->
<section id="experience" class="py-24 bg-[#0f0f17]">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold gradient-text text-center mb-16" data-aos="fade-up">Work Experience</h2>
        <div class="relative">
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 timeline-line h-full"></div>
            
            <div class="mb-12 relative" data-aos="fade-up">
                <div class="md:flex items-center">
                    <div class="md:w-1/2 md:pr-12 text-right">
                        <span class="tech-badge inline-block mb-2">Oct 2025 – Present</span>
                        <h3 class="text-2xl font-bold">Project Technical Specialist IV</h3>
                        <p class="text-cyan-400">DOST-Food and Nutrition Research Institute</p>
                        <ul class="text-gray-300 list-disc list-inside mt-2 space-y-1">
                            <li>Develop AI-enabled databases & backend for PhilFCT</li>
                            <li>Design AI-assisted data pipelines for food matching</li>
                            <li>Build APIs & internal tools for nutritionists</li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12"><div class="timeline-dot mx-auto"></div></div>
                </div>
            </div>
            
            <div class="mb-12 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="md:flex items-center">
                    <div class="md:w-1/2 md:pr-12 text-right md:order-2">
                        <span class="tech-badge inline-block mb-2">Jan 2025 – Sep 2025</span>
                        <h3 class="text-2xl font-bold">Project Technical Assistant VI</h3>
                        <p class="text-cyan-400">DOST-FNRI</p>
                        <ul class="text-gray-300 list-disc list-inside mt-2 space-y-1">
                            <li>Developed AINA – AI model recognizing 69 food images (87% accuracy)</li>
                            <li>Integrated Ollama LLM chatbot for PhilFCT (<0.5s response)</li>
                            <li>Presented at RSTW Butuan City 2025</li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12 md:order-1"><div class="timeline-dot mx-auto"></div></div>
                </div>
            </div>
            
            <div class="mb-12 relative" data-aos="fade-up" data-aos-delay="200">
                <div class="md:flex items-center">
                    <div class="md:w-1/2 md:pr-12 text-right">
                        <span class="tech-badge inline-block mb-2">Mar 2024 – Jan 2025</span>
                        <h3 class="text-2xl font-bold">Project Technical Assistant IV</h3>
                        <p class="text-cyan-400">DBP Service Corp / DOST-FNRI</p>
                        <ul class="text-gray-300 list-disc list-inside mt-2 space-y-1">
                            <li>Initiated RNDforNCD offline desktop app</li>
                            <li>Started Telenutrition web platform</li>
                            <li>Full system design, programming, testing</li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12"><div class="timeline-dot mx-auto"></div></div>
                </div>
            </div>
            
            <div class="relative" data-aos="fade-up" data-aos-delay="300">
                <div class="md:flex items-center">
                    <div class="md:w-1/2 md:pr-12 text-right md:order-2">
                        <span class="tech-badge inline-block mb-2">Jul 2022 – Dec 2022</span>
                        <h3 class="text-2xl font-bold">IT Project Manager (Internship)</h3>
                        <p class="text-cyan-400">SD Solutions IT Outsourcing Inc.</p>
                        <ul class="text-gray-300 list-disc list-inside mt-2 space-y-1">
                            <li>Project coordination, documentation, reporting</li>
                            <li>System analysis tasks</li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12 md:order-1"><div class="timeline-dot mx-auto"></div></div>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center" data-aos="zoom-in">
            <h2 class="text-3xl font-bold mb-8">Technologies I Master</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="tech-badge">Python</span>
                <span class="tech-badge">TensorFlow</span>
                <span class="tech-badge">PyTorch</span>
                <span class="tech-badge">LangChain</span>
                <span class="tech-badge">Ollama</span>
                <span class="tech-badge">FastAPI</span>
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">MySQL</span>
                <span class="tech-badge">Flutter</span>
                <span class="tech-badge">Firebase</span>
                <span class="tech-badge">Arduino</span>
                <span class="tech-badge">AWS/GCP</span>
            </div>
        </div>
    </div>
</section>

<!-- Projects Showcase with GitHub Links & Metrics -->
<section id="projects" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold gradient-text text-center mb-16" data-aos="fade-up">Signature Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: Food Recognition App -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left">
                <div class="h-48 bg-gradient-to-br from-cyan-900 to-purple-900 flex items-center justify-center">
                    <i class="fas fa-apple-alt text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">Food Recognition App</h3>
                        <a href="https://github.com/armidacontrerasii-png/food-recognition" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">TensorFlow</span><span class="tech-badge text-xs">Python</span><span class="tech-badge text-xs">69 classes</span></div>
                    <p class="text-gray-300">87% validation accuracy, &lt;0.3s inference.</p>
                </div>
            </div>
            <!-- Project 2: Chatbot -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-purple-900 to-pink-900 flex items-center justify-center">
                    <i class="fas fa-comments text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">Chatbot</h3>
                        <a href="https://github.com/armidacontrerasii-png/chatbot" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">Ollama</span><span class="tech-badge text-xs">LLM</span><span class="tech-badge text-xs">NLP</span></div>
                    <p class="text-gray-300">&lt;0.5s response time, handles 100+ concurrent users. Supports natural language nutrient queries.</p>
                </div>
            </div>
            <!-- Project 3: Self-Service Kiosk -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left" data-aos-delay="200">
                <div class="h-48 bg-gradient-to-br from-blue-900 to-cyan-900 flex items-center justify-center">
                    <i class="fas fa-money-bill-wave text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">Cash Payment Kiosk</h3>
                        <a href="https://github.com/armidacontrerasii-png/kiosk" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">PHP</span><span class="tech-badge text-xs">Hardware</span><span class="tech-badge text-xs">MySQL</span></div>
                    <p class="text-gray-300">Integrated bill acceptor + touchscreen. Processed 500+ transactions in pilot.</p>
                </div>
            </div>
            <!-- Project 4: HOA Management -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left" data-aos-delay="300">
                <div class="h-48 bg-gradient-to-br from-emerald-900 to-teal-900 flex items-center justify-center">
                    <i class="fas fa-building text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">HOA Management System</h3>
                        <a href="https://github.com/armidacontrerasii-png/hoa" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">PHP</span><span class="tech-badge text-xs">MySQL</span><span class="tech-badge text-xs">JS</span></div>
                    <p class="text-gray-300">Used by 3 HOAs. Modules: resident records, billing, payments, reports.</p>
                </div>
            </div>
            <!-- Project 5: Nutrient Predictor -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left" data-aos-delay="400">
                <div class="h-48 bg-gradient-to-br from-orange-900 to-red-900 flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">Nutrient Predictor</h3>
                        <a href="https://github.com/armidacontrerasii-png/nutrient-predictor" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">Flutter</span><span class="tech-badge text-xs">Firebase</span><span class="tech-badge text-xs">TFLite</span></div>
                    <p class="text-gray-300">45 FPS on mid-range Android. Cloud image storage for inference logging.</p>
                </div>
            </div>
            <!-- Project 6: IoT Rain Detection -->
            <div class="glass-card rounded-2xl overflow-hidden" data-aos="flip-left" data-aos-delay="500">
                <div class="h-48 bg-gradient-to-br from-slate-800 to-gray-900 flex items-center justify-center">
                    <i class="fas fa-cloud-rain text-7xl text-cyan-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-2xl font-bold mb-2">IoT Rain Detection</h3>
                        <a href="https://github.com/armidacontrerasii-png/rain-sensor" target="_blank" class="text-gray-400 hover:text-cyan-400"><i class="fab fa-github text-xl"></i></a>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-3"><span class="tech-badge text-xs">Arduino</span><span class="tech-badge text-xs">C++</span><span class="tech-badge text-xs">Sensors</span></div>
                    <p class="text-gray-300">99% detection accuracy in field tests. Triggers alerts automatically.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="https://github.com/armidacontrerasii-png" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full glass-card hover:border-cyan-400 transition">
                <i class="fab fa-github"></i> See all projects on GitHub
            </a>
        </div>
    </div>
</section>

<!-- Live Demo Video Section -->
<section id="demo" class="py-24 bg-[#0f0f17]">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold gradient-text text-center mb-16" data-aos="fade-up">Live Demo: Food Recognition in Action</h2>
        <div class="glass-card p-6 rounded-3xl" data-aos="zoom-in">
            <div class="video-container">
                <!-- 🔁 REPLACE 'YOUR_VIDEO_ID' with your actual Loom/YouTube video ID -->
                <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                        title="Food Recognition Demo" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <p class="text-center text-gray-400 mt-4">
                📹 Demo: Food recognition app recognizing a food image and chatbot answering nutrition queries via Ollama LLM.
                <br><strong></strong>
            </p>
        </div>
    </div>
</section>

<!-- Achievements & Awards -->
<section id="achievements" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold gradient-text text-center mb-16" data-aos="fade-up">Achievements & Recognition</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="glass-card p-6 rounded-2xl flex items-start gap-4" data-aos="fade-right">
                <i class="fas fa-trophy text-4xl text-yellow-400"></i>
                <div><h3 class="text-xl font-bold">2025 Division Model Employee Award</h3><p class="text-gray-400">DOST-FNRI</p></div>
            </div>
            <div class="glass-card p-6 rounded-2xl flex items-start gap-4" data-aos="fade-left">
                <i class="fas fa-award text-4xl text-cyan-400"></i>
                <div><h3 class="text-xl font-bold">Inventor’s Award – Telenutrition Software</h3><p class="text-gray-400">DOST-FNRI 2025</p></div>
            </div>
            <div class="glass-card p-6 rounded-2xl flex items-start gap-4" data-aos="fade-right" data-aos-delay="100">
                <i class="fas fa-award text-4xl text-cyan-400"></i>
                <div><h3 class="text-xl font-bold">Inventor’s Award – RNDforNCD V1.0</h3><p class="text-gray-400">DOST-FNRI 2025</p></div>
            </div>
            <div class="glass-card p-6 rounded-2xl flex items-start gap-4" data-aos="fade-left" data-aos-delay="100">
                <i class="fas fa-chalkboard-user text-4xl text-purple-400"></i>
                <div><h3 class="text-xl font-bold">Technical Presenter – AINA at RSTW</h3><p class="text-gray-400">Butuan City 2025</p></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact & Commitment -->
<section id="contact" class="py-24">
    <div class="max-w-5xl mx-auto px-6">
        <div class="glass-card p-10 rounded-3xl" data-aos="zoom-in">
            <h2 class="text-4xl font-bold gradient-text text-center mb-6">Let's Build Something Intelligent</h2>
            <p class="text-center text-gray-300 mb-8">I build scalable, reliable, and impactful AI solutions. Committed to high-quality code and continuous learning.</p>
            <div class="flex flex-wrap justify-center gap-6 mb-8">
                <a href="mailto:armidacontrerasii@gmail.com" class="flex items-center gap-2 text-cyan-400 hover:text-cyan-300"><i class="fas fa-envelope fa-2x"></i> armidacontrerasii@gmail.com</a>
                <a href="mailto:armidacontreras.a@icloud.com" class="flex items-center gap-2 text-cyan-400 hover:text-cyan-300"><i class="fas fa-envelope fa-2x"></i> armidacontreras.a@icloud.com</a>
            </div>
            <div class="text-center">
                <p class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i> Taguig City, Philippines</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <a href="https://github.com/armidacontrerasii-png" target="_blank" class="text-gray-400 hover:text-cyan-400 transition text-2xl"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/armidacontreras/" class="text-gray-400 hover:text-cyan-400 transition text-2xl"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition text-2xl"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="border-t border-cyan-500/20 py-6 text-center text-gray-500 text-sm">
    <p>&copy; <?php echo date('Y'); ?> Armida B. Contreras – AI Systems Developer. Built with <i class="fas fa-heart text-red-500"></i> for impact.</p>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    AOS.init({ duration: 800, once: true, offset: 100 });
    
    new Typed('#typed-role', {
        strings: ['AI Systems Developer', 'LLM Engineer', 'Full Stack Architect', 'Computer Vision Expert'],
        typeSpeed: 60, backSpeed: 40, loop: true
    });
    
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn?.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    
    const cursor = document.getElementById('cursor');
    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
        document.querySelectorAll('a, button, .glass-card').forEach(el => {
            el.addEventListener('mouseenter', () => cursor.style.transform = 'translate(-50%, -50%) scale(1.5)');
            el.addEventListener('mouseleave', () => cursor.style.transform = 'translate(-50%, -50%) scale(1)');
        });
    }
    
    // Particle background
    const canvas = document.getElementById('particlesCanvas');
    if (canvas) {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const ctx = canvas.getContext('2d');
        let particles = [];
        for (let i = 0; i < 80; i++) {
            particles.push({ x: Math.random() * canvas.width, y: Math.random() * canvas.height, radius: Math.random() * 2 + 1, alpha: Math.random() * 0.5 });
        }
        function draw() {
            if (!ctx) return;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#06b6d4';
            particles.forEach(p => {
                ctx.globalAlpha = p.alpha;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fill();
                p.y += 0.3;
                if (p.y > canvas.height) p.y = 0;
            });
            requestAnimationFrame(draw);
        }
        draw();
        window.addEventListener('resize', () => { canvas.width = window.innerWidth; canvas.height = window.innerHeight; });
    }
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        });
    });
</script>
</body>
</html>