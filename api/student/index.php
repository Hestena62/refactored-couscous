<?php
/**
 * Student Dashboard - Main Hub
 * This page serves as the central landing page for students, providing quick access 
 * to all educational resources, subjects, and learning tools.
 */

// Set page variables for header.php
$pageTitle = "Student Dashboard - Hesten's Learning";
$pageDescription = "Welcome to your personalized student dashboard. Access all your subjects and learning resources in one place.";
$pageAuthor = "Hesten's Learning";

// Include the standard site header
include __DIR__ . '/../src/header.php';
?>

<!-- DASHBOARD CONTENT -->
<div class="min-h-screen bg-slate-50/50 dark:bg-slate-900/50">
    <!-- Hero Section -->
    <section class="relative py-16 lg:py-24 overflow-hidden border-b border-slate-200/50 dark:border-slate-800/50">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/5 via-purple-600/5 to-blue-600/5 dark:from-indigo-900/10 dark:via-purple-900/10 dark:to-blue-900/10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/10 blur-[100px] rounded-full animate-pulse"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-500/10 blur-[100px] rounded-full animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 border border-indigo-100 dark:border-indigo-900/50 text-indigo-600 dark:text-indigo-400 text-sm font-extrabold tracking-wide uppercase shadow-sm">
                        <i class="fas fa-sparkles animate-spin-slow"></i> Personalized Learning Hub
                    </div>
                    
                    <div class="space-y-4">
                        <h1 class="text-5xl md:text-7xl font-black text-slate-900 dark:text-white leading-[1.1] font-outfit tracking-tight">
                            Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">Dashboard</span>
                        </h1>
                        <p class="text-xl text-slate-600 dark:text-slate-400 max-w-xl leading-relaxed mx-auto lg:mx-0">
                            Explore your subjects, track your progress, and discover new resources tailored to your learning style.
                        </p>
                    </div>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-4">
                        <a href="#subjects" class="group px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-2xl font-bold shadow-xl shadow-indigo-600/20 transition-all transform hover:-translate-y-1 flex items-center gap-3">
                            <i class="fas fa-play-circle text-xl"></i>
                            <span>Resume Learning</span>
                        </a>
                        <a href="/assessment" class="px-8 py-4 bg-white dark:bg-slate-800 text-slate-900 dark:text-white border border-slate-200 dark:border-slate-700 rounded-2xl font-bold hover:bg-slate-50 dark:hover:bg-slate-700 transition-all shadow-sm">
                            Take Assessment
                        </a>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white dark:border-slate-800 transform rotate-2 hover:rotate-0 transition-transform duration-700 ease-out group">
                        <img src="/assets/images/student-hero.png" alt="Student Learning Illustration" class="w-full h-auto scale-105 group-hover:scale-100 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-60"></div>
                        
                        <!-- Floating Achievement Badge -->
                        <div class="absolute bottom-6 left-6 bg-white/90 dark:bg-slate-800/90 backdrop-blur-md p-4 rounded-2xl shadow-xl flex items-center gap-4 animate-bounce-short">
                            <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900/30 rounded-xl flex items-center justify-center text-amber-600 text-2xl">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Latest Achievement</p>
                                <p class="text-sm font-black text-slate-900 dark:text-white">Math Master 2024</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Orbitals -->
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-purple-500/20 blur-3xl rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-500/20 blur-3xl rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subjects Section -->
    <section id="subjects" class="py-24 container mx-auto px-6 scroll-mt-24">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="space-y-4 max-w-2xl text-center md:text-left">
                <div class="inline-block px-3 py-1 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400 text-xs font-bold rounded-lg uppercase tracking-wider">
                    Core Curriculum
                </div>
                <h2 class="text-4xl font-black text-slate-900 dark:text-white font-outfit leading-tight">Master Your Subjects</h2>
                <p class="text-lg text-slate-500 dark:text-slate-400">Deep dive into interactive lessons and resources across all major categories.</p>
            </div>
            <div class="flex bg-slate-100 dark:bg-slate-800 p-1 rounded-xl border border-slate-200 dark:border-slate-700">
                <button class="px-4 py-2 rounded-lg bg-white dark:bg-slate-700 shadow-sm text-indigo-600 font-bold transition-all">
                    Grid View
                </button>
                <button class="px-4 py-2 rounded-lg text-slate-400 font-bold hover:text-indigo-600 transition-all">
                    List View
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Math Card -->
            <div class="group bg-white dark:bg-slate-800 rounded-[2rem] p-8 shadow-sm hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500 border border-slate-100 dark:border-slate-700 relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-indigo-500/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                
                <div class="w-16 h-16 bg-indigo-100 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-3xl mb-8 transform group-hover:rotate-6 transition-transform">
                    <i class="fas fa-calculator"></i>
                </div>
                
                <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4 font-outfit">Mathematics</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed mb-8 flex-grow">
                    Build strong foundations in numbers, geometry, and algebra with visual tools and interactive practice.
                </p>
                
                <div class="space-y-3 mt-auto">
                    <a href="/student/math-practice.php" class="w-full py-3 bg-indigo-600 text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-indigo-700 transition-colors shadow-lg shadow-indigo-600/10">
                        Practice Problems <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="/student/math-tutorials.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 hover:text-indigo-600 transition-all">
                            <i class="fas fa-play"></i> Tutorials
                        </a>
                        <a href="/student/math-games.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-indigo-50 dark:hover:bg-indigo-900/20 hover:text-indigo-600 transition-all">
                            <i class="fas fa-gamepad"></i> Games
                        </a>
                    </div>
                </div>
            </div>

            <!-- ELA Card -->
            <div class="group bg-white dark:bg-slate-800 rounded-[2rem] p-8 shadow-sm hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 border border-slate-100 dark:border-slate-700 relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-emerald-500/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                
                <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900/30 rounded-2xl flex items-center justify-center text-emerald-600 dark:text-emerald-400 text-3xl mb-8 transform group-hover:-rotate-6 transition-transform">
                    <i class="fas fa-book-open"></i>
                </div>
                
                <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4 font-outfit">English (ELA)</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed mb-8 flex-grow">
                    Enhance your reading comprehension, writing skills, and literary analysis with guided pathways.
                </p>
                
                <div class="space-y-3 mt-auto">
                    <a href="/student/ela-reading.php" class="w-full py-3 bg-emerald-600 text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-emerald-700 transition-colors shadow-lg shadow-emerald-600/10">
                        Reading Hub <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="/student/ela-writing.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-emerald-50 dark:hover:bg-emerald-900/20 hover:text-emerald-600 transition-all">
                            <i class="fas fa-pen"></i> Writing
                        </a>
                        <a href="/student/ela-grammar.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-emerald-50 dark:hover:bg-emerald-900/20 hover:text-emerald-600 transition-all">
                            <i class="fas fa-spell-check"></i> Grammar
                        </a>
                    </div>
                </div>
            </div>

            <!-- Science Card -->
            <div class="group bg-white dark:bg-slate-800 rounded-[2rem] p-8 shadow-sm hover:shadow-2xl hover:shadow-rose-500/10 transition-all duration-500 border border-slate-100 dark:border-slate-700 relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-rose-500/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                
                <div class="w-16 h-16 bg-rose-100 dark:bg-rose-900/30 rounded-2xl flex items-center justify-center text-rose-600 dark:text-rose-400 text-3xl mb-8 transform group-hover:rotate-6 transition-transform">
                    <i class="fas fa-flask"></i>
                </div>
                
                <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4 font-outfit">Science</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed mb-8 flex-grow">
                    Discover the wonders of biology, chemistry, and physics through virtual labs and interactive models.
                </p>
                
                <div class="space-y-3 mt-auto">
                    <a href="/student/science-experiments.php" class="w-full py-3 bg-rose-600 text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-rose-700 transition-colors shadow-lg shadow-rose-600/10">
                        Virtual Labs <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="/student/science-diagrams.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-rose-50 dark:hover:bg-rose-900/20 hover:text-rose-600 transition-all">
                            <i class="fas fa-project-diagram"></i> Models
                        </a>
                        <a href="/student/science-quizzes.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-rose-50 dark:hover:bg-rose-900/20 hover:text-rose-600 transition-all">
                            <i class="fas fa-tasks"></i> Quizzes
                        </a>
                    </div>
                </div>
            </div>

            <!-- Social Card -->
            <div class="group bg-white dark:bg-slate-800 rounded-[2rem] p-8 shadow-sm hover:shadow-2xl hover:shadow-amber-500/10 transition-all duration-500 border border-slate-100 dark:border-slate-700 relative overflow-hidden flex flex-col h-full">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-amber-500/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                
                <div class="w-16 h-16 bg-amber-100 dark:bg-amber-900/30 rounded-2xl flex items-center justify-center text-amber-600 dark:text-amber-400 text-3xl mb-8 transform group-hover:-rotate-6 transition-transform">
                    <i class="fas fa-globe-americas"></i>
                </div>
                
                <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4 font-outfit">Social Studies</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed mb-8 flex-grow">
                    Journey through time and space with historical timelines, geography maps, and civic lessons.
                </p>
                
                <div class="space-y-3 mt-auto">
                    <a href="/student/social-history.php" class="w-full py-3 bg-amber-600 text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-amber-700 transition-colors shadow-lg shadow-amber-600/10">
                        History Hub <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="/student/social-maps.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-amber-50 dark:hover:bg-amber-900/20 hover:text-amber-600 transition-all">
                            <i class="fas fa-map-marked-alt"></i> Maps
                        </a>
                        <a href="/student/social-civics.php" class="py-2.5 bg-slate-50 dark:bg-slate-900/50 text-slate-600 dark:text-slate-300 rounded-xl text-xs font-bold flex items-center justify-center gap-2 hover:bg-amber-50 dark:hover:bg-amber-900/20 hover:text-amber-600 transition-all">
                            <i class="fas fa-landmark"></i> Civics
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learning Path & Progress Section -->
    <section class="py-24 container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Reflection Journal -->
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white dark:bg-slate-800 rounded-[2.5rem] p-8 lg:p-10 shadow-xl border border-slate-100 dark:border-slate-700 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-6 opacity-5">
                        <i class="fas fa-feather-alt text-9xl"></i>
                    </div>
                    
                    <div class="flex items-center justify-between mb-8">
                        <div class="space-y-1">
                            <h2 class="text-2xl font-black text-slate-900 dark:text-white font-outfit tracking-tight">Learning Reflection</h2>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">What did you discover today? How do you feel about your progress?</p>
                        </div>
                        <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/30 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                            <i class="fas fa-journal-whills"></i>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <textarea id="reflection-input" rows="4" class="w-full p-6 bg-slate-50 dark:bg-slate-900/50 border border-slate-200 dark:border-slate-700 rounded-2xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-slate-700 dark:text-slate-200 placeholder:text-slate-400 resize-none" placeholder="Write your thoughts here..."></textarea>
                        
                        <div class="flex items-center justify-between">
                            <div id="reflection-status" class="text-xs font-bold text-slate-400 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-slate-300"></span> Not saved
                            </div>
                            <button id="save-reflection" class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-bold transition-all shadow-lg shadow-indigo-600/20 flex items-center gap-2">
                                <i class="fas fa-save"></i> Save Reflection
                            </button>
                        </div>
                    </div>
                    
                    <!-- Past Reflections Preview -->
                    <div class="mt-10 pt-8 border-t border-slate-100 dark:border-slate-700">
                        <h4 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Recent Reflections</h4>
                        <div id="past-reflections" class="space-y-4">
                            <!-- Reflections will be injected here -->
                            <div class="p-4 bg-slate-50/50 dark:bg-slate-900/30 rounded-xl border border-dashed border-slate-200 dark:border-slate-700 text-center text-slate-400 italic text-sm">
                                No reflections saved yet. Start your journey today!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Goals & Daily Progress -->
            <div class="space-y-8">
                <!-- Daily Goals Checklist -->
                <div class="bg-indigo-900 text-white rounded-[2.5rem] p-8 shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-white/10 blur-3xl rounded-full"></div>
                    
                    <h3 class="text-xl font-black mb-6 flex items-center gap-3 font-outfit">
                        <i class="fas fa-check-circle text-indigo-400"></i> Today's Goals
                    </h3>
                    
                    <div id="goals-list" class="space-y-3">
                        <!-- Goal Item -->
                        <div class="flex items-center gap-3 p-3 bg-white/10 rounded-xl hover:bg-white/20 transition-all group cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 rounded-md border-transparent bg-white/20 checked:bg-indigo-400 text-indigo-400 focus:ring-0 focus:ring-offset-0 transition-all cursor-pointer">
                            <span class="text-sm font-bold opacity-80 group-hover:opacity-100">Complete 5 Math problems</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white/10 rounded-xl hover:bg-white/20 transition-all group cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 rounded-md border-transparent bg-white/20 checked:bg-indigo-400 text-indigo-400 focus:ring-0 focus:ring-offset-0 transition-all cursor-pointer">
                            <span class="text-sm font-bold opacity-80 group-hover:opacity-100">Read ELA literature guide</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white/10 rounded-xl hover:bg-white/20 transition-all group cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 rounded-md border-transparent bg-white/20 checked:bg-indigo-400 text-indigo-400 focus:ring-0 focus:ring-offset-0 transition-all cursor-pointer">
                            <span class="text-sm font-bold opacity-80 group-hover:opacity-100">Take Science Quiz</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-white/10 flex items-center gap-4">
                        <input type="text" id="new-goal-input" placeholder="Add a goal..." class="flex-grow bg-white/10 border-transparent rounded-xl text-xs py-2 px-4 focus:ring-0 placeholder:text-white/40">
                        <button id="add-goal-btn" class="w-8 h-8 bg-white text-indigo-900 rounded-lg flex items-center justify-center hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-xs"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Recent Activity Tracking -->
                <div class="bg-white dark:bg-slate-800 rounded-[2.5rem] p-8 shadow-xl border border-slate-100 dark:border-slate-700">
                    <h3 class="text-lg font-black text-slate-900 dark:text-white mb-6 flex items-center gap-3 font-outfit">
                        <i class="fas fa-history text-indigo-600"></i> Recent Activity
                    </h3>
                    <ul id="recent-activity-list" class="space-y-4">
                        <!-- Items injected via JS from hl_recent_pages -->
                        <li class="flex items-center gap-3 text-sm text-slate-400 italic">
                            No recent activity found.
                        </li>
                    </ul>
                    <a href="#" id="clear-activity" class="mt-6 block text-center text-xs font-bold text-slate-400 hover:text-red-500 transition-colors uppercase tracking-widest">
                        Clear History
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Gallery -->
    <section class="py-12 container mx-auto px-6">
        <div class="bg-slate-900 rounded-[3rem] p-12 lg:p-16 relative overflow-hidden shadow-2xl">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
            
            <div class="relative z-10 flex flex-col lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/3 text-center lg:text-left space-y-4">
                    <h2 class="text-3xl font-black text-white font-outfit">My Achievements</h2>
                    <p class="text-slate-400">Collect badges as you complete tasks and master new skills.</p>
                </div>
                
                <div class="w-full lg:w-2/3 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <!-- Unlocked Badge -->
                    <div class="flex flex-col items-center gap-3 group">
                        <div class="w-20 h-20 bg-amber-500 rounded-full flex items-center justify-center text-white text-3xl shadow-lg shadow-amber-500/30 transform group-hover:scale-110 transition-transform cursor-help" title="Completed 10 Math Lessons">
                            <i class="fas fa-brain"></i>
                        </div>
                        <span class="text-xs font-black text-white uppercase tracking-widest">Math Whiz</span>
                    </div>
                    <!-- Unlocked Badge -->
                    <div class="flex flex-col items-center gap-3 group">
                        <div class="w-20 h-20 bg-indigo-500 rounded-full flex items-center justify-center text-white text-3xl shadow-lg shadow-indigo-500/30 transform group-hover:scale-110 transition-transform cursor-help" title="Written 5 Reflections">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <span class="text-xs font-black text-white uppercase tracking-widest">Thinker</span>
                    </div>
                    <!-- Locked Badge -->
                    <div class="flex flex-col items-center gap-3 group opacity-40 grayscale">
                        <div class="w-20 h-20 bg-slate-700 rounded-full flex items-center justify-center text-white text-3xl transform group-hover:scale-105 transition-transform cursor-help" title="Complete a Science Experiment to unlock">
                            <i class="fas fa-atom"></i>
                        </div>
                        <span class="text-xs font-black text-white uppercase tracking-widest">Explorer</span>
                    </div>
                    <!-- Locked Badge -->
                    <div class="flex flex-col items-center gap-3 group opacity-40 grayscale">
                        <div class="w-20 h-20 bg-slate-700 rounded-full flex items-center justify-center text-white text-3xl transform group-hover:scale-105 transition-transform cursor-help" title="Master all ELA Grammar levels to unlock">
                            <i class="fas fa-feather"></i>
                        </div>
                        <span class="text-xs font-black text-white uppercase tracking-widest">Wordsmith</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Tools Grid -->

    <!-- Learning Tools Grid -->
    <section class="py-24 bg-white dark:bg-slate-800/30 border-y border-slate-200/50 dark:border-slate-800/50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-20 space-y-4">
                <div class="inline-block px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 text-xs font-bold rounded-lg uppercase tracking-wider">
                    Support Resources
                </div>
                <h2 class="text-4xl font-black text-slate-900 dark:text-white font-outfit">Learning Arsenal</h2>
                <p class="text-lg text-slate-500 dark:text-slate-400">Essential tools and resources to support your daily learning goals.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Dictionary Tool -->
                <a href="/dic.php" class="group flex flex-col items-center p-8 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-indigo-50 dark:bg-indigo-900/20 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-book"></i>
                    </div>
                    <span class="text-lg font-black text-slate-900 dark:text-white font-outfit">Dictionary</span>
                    <span class="text-xs text-slate-400 mt-1 uppercase font-bold tracking-widest">Word Finder</span>
                </a>

                <!-- Skills Hub -->
                <a href="/skills-dictionary.php" class="group flex flex-col items-center p-8 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:shadow-emerald-500/5 transition-all transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-emerald-50 dark:bg-emerald-900/20 rounded-full flex items-center justify-center text-emerald-600 dark:text-emerald-400 text-2xl mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <span class="text-lg font-black text-slate-900 dark:text-white font-outfit">Skills Hub</span>
                    <span class="text-xs text-slate-400 mt-1 uppercase font-bold tracking-widest">Growth Map</span>
                </a>

                <!-- Games -->
                <a href="/games.php" class="group flex flex-col items-center p-8 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:shadow-rose-500/5 transition-all transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-rose-50 dark:bg-rose-900/20 rounded-full flex items-center justify-center text-rose-600 dark:text-rose-400 text-2xl mb-6 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <span class="text-lg font-black text-slate-900 dark:text-white font-outfit">Games</span>
                    <span class="text-xs text-slate-400 mt-1 uppercase font-bold tracking-widest">Brain Breaks</span>
                </a>

                <!-- Help Center -->
                <a href="/help-center.php" class="group flex flex-col items-center p-8 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:shadow-amber-500/5 transition-all transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-amber-50 dark:bg-amber-900/20 rounded-full flex items-center justify-center text-amber-600 dark:text-amber-400 text-2xl mb-6 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <span class="text-lg font-black text-slate-900 dark:text-white font-outfit">Support</span>
                    <span class="text-xs text-slate-400 mt-1 uppercase font-bold tracking-widest">Get Help</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Activity Placeholder -->
    <section class="py-24 container mx-auto px-6">
        <div class="bg-indigo-600 rounded-[3rem] p-12 lg:p-20 relative overflow-hidden shadow-2xl shadow-indigo-600/30">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-indigo-500"></div>
            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/10 blur-3xl rounded-full animate-pulse"></div>
            
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="space-y-6 text-center lg:text-left max-w-xl">
                    <h2 class="text-4xl lg:text-5xl font-black text-white font-outfit leading-tight">Ready for a challenge?</h2>
                    <p class="text-xl text-indigo-100 leading-relaxed">
                        Complete your weekly assessment to unlock new badges and see how much you've grown!
                    </p>
                    <a href="/assessment" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-indigo-600 rounded-2xl font-black text-lg hover:bg-slate-50 transition-all transform hover:scale-105 shadow-xl">
                        Start Weekly Goal <i class="fas fa-chevron-right text-sm"></i>
                    </a>
                </div>
                
                <div class="w-full lg:w-1/3 bg-white/10 backdrop-blur-xl rounded-[2rem] p-8 border border-white/20">
                    <h4 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <i class="fas fa-chart-line"></i> This Week's Stats
                    </h4>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm font-bold text-indigo-100">
                                <span>Math Progress</span>
                                <span>75%</span>
                            </div>
                            <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-white rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm font-bold text-indigo-100">
                                <span>ELA Mastery</span>
                                <span>40%</span>
                            </div>
                            <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-white rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm font-bold text-indigo-100">
                                <span>Science Quizzes</span>
                                <span>90%</span>
                            </div>
                            <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-white rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Custom Page Styles for Premium Feel -->
<style>
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
        animation: spin-slow 8s linear infinite;
    }
    .animate-bounce-short {
        animation: bounce-short 3s ease-in-out infinite;
    }
    @keyframes bounce-short {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    /* Scroll Margin for Anchor Links */
    .scroll-mt-24 {
        scroll-margin-top: 6rem;
    }
</style>

<?php
// Include site footer
include __DIR__ . '/../src/footer.php';
?>

<!-- DASHBOARD LOGIC -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- REFLECTION JOURNAL ---
        const reflectionInput = document.getElementById('reflection-input');
        const saveBtn = document.getElementById('save-reflection');
        const statusEl = document.getElementById('reflection-status');
        const pastContainer = document.getElementById('past-reflections');

        const loadReflections = () => {
            const reflections = JSON.parse(localStorage.getItem('hl_reflections') || '[]');
            if (reflections.length === 0) return;
            
            pastContainer.innerHTML = '';
            reflections.slice(-3).reverse().forEach(ref => {
                const date = new Date(ref.date).toLocaleDateString();
                const div = document.createElement('div');
                div.className = "p-4 bg-slate-50/80 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-700 space-y-2 text-left";
                div.innerHTML = `
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-black text-indigo-600 uppercase tracking-widest">${date}</span>
                    </div>
                    <p class="text-sm text-slate-600 dark:text-slate-300 line-clamp-2">${ref.text}</p>
                `;
                pastContainer.appendChild(div);
            });
        };

        saveBtn.onclick = () => {
            const text = reflectionInput.value.trim();
            if (!text) return;

            const reflections = JSON.parse(localStorage.getItem('hl_reflections') || '[]');
            reflections.push({ text, date: new Date().toISOString() });
            localStorage.setItem('hl_reflections', JSON.stringify(reflections));

            reflectionInput.value = '';
            statusEl.innerHTML = '<span class="w-2 h-2 rounded-full bg-emerald-500"></span> Saved!';
            setTimeout(() => statusEl.innerHTML = '<span class="w-2 h-2 rounded-full bg-slate-300"></span> Not saved', 2000);
            
            loadReflections();
            if(window.triggerConfetti) window.triggerConfetti();
        };

        loadReflections();

        // --- DAILY GOALS ---
        const goalsList = document.getElementById('goals-list');
        const newGoalInput = document.getElementById('new-goal-input');
        const addGoalBtn = document.getElementById('add-goal-btn');

        const saveGoals = () => {
            const goals = [];
            goalsList.querySelectorAll('.goal-item').forEach(div => {
                goals.push({
                    text: div.querySelector('span').innerText,
                    done: div.querySelector('input').checked
                });
            });
            localStorage.setItem('hl_goals', JSON.stringify(goals));
        };

        const renderGoal = (goal) => {
            const div = document.createElement('div');
            div.className = "goal-item flex items-center gap-3 p-3 bg-white/10 rounded-xl hover:bg-white/20 transition-all group cursor-pointer text-left";
            div.innerHTML = `
                <input type="checkbox" ${goal.done ? 'checked' : ''} class="w-5 h-5 rounded-md border-transparent bg-white/20 checked:bg-indigo-400 text-indigo-400 focus:ring-0 focus:ring-offset-0 transition-all cursor-pointer">
                <span class="text-sm font-bold ${goal.done ? 'line-through opacity-50' : 'opacity-80 group-hover:opacity-100'}">${goal.text}</span>
            `;
            div.onclick = (e) => {
                if(e.target.tagName !== 'INPUT') {
                    const cb = div.querySelector('input');
                    cb.checked = !cb.checked;
                }
                const span = div.querySelector('span');
                const cb = div.querySelector('input');
                if(cb.checked) {
                    span.classList.add('line-through', 'opacity-50');
                    span.classList.remove('opacity-80', 'group-hover:opacity-100');
                    if(window.triggerConfetti) window.triggerConfetti();
                } else {
                    span.classList.remove('line-through', 'opacity-50');
                    span.classList.add('opacity-80', 'group-hover:opacity-100');
                }
                saveGoals();
            };
            goalsList.appendChild(div);
        };

        const initGoals = () => {
            const goals = JSON.parse(localStorage.getItem('hl_goals') || '[]');
            if (goals.length > 0) {
                goalsList.innerHTML = '';
                goals.forEach(renderGoal);
            }
        };

        addGoalBtn.onclick = () => {
            const text = newGoalInput.value.trim();
            if(!text) return;
            const newGoal = { text, done: false };
            if(goalsList.innerText.includes('No goals')) goalsList.innerHTML = '';
            renderGoal(newGoal);
            saveGoals();
            newGoalInput.value = '';
        };

        initGoals();

        // --- RECENT ACTIVITY ---
        const activityList = document.getElementById('recent-activity-list');
        const clearBtn = document.getElementById('clear-activity');

        const loadActivity = () => {
            const history = JSON.parse(localStorage.getItem('hl_recent_pages') || '[]');
            if (history.length === 0) return;

            activityList.innerHTML = '';
            history.forEach(item => {
                const li = document.createElement('li');
                li.className = "flex items-center gap-3 p-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-all group text-left";
                li.innerHTML = `
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 dark:bg-indigo-900/20 flex items-center justify-center text-indigo-600 text-xs">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <a href="${item.url}" class="text-xs font-bold text-slate-600 dark:text-slate-300 group-hover:text-indigo-600 transition-colors truncate">${item.title}</a>
                `;
                activityList.appendChild(li);
            });
        };

        clearBtn.onclick = (e) => {
            e.preventDefault();
            localStorage.removeItem('hl_recent_pages');
            activityList.innerHTML = '<li class="flex items-center gap-3 text-sm text-slate-400 italic">No recent activity found.</li>';
        };

        loadActivity();
    });
</script>
