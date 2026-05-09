<?php
/**
 * Hesten's Learning - Level Page Template
 * This file provides the standardized structure for all level pages (A-O).
 */

// Global Header
include '../src/header.php';

// Default falling values
if (!isset($themeColor)) $themeColor = 'rose';
if (!isset($levelId)) $levelId = 'k';
if (!isset($levelTitle)) $levelTitle = 'Level K';
if (!isset($gradeText)) $gradeText = '9th Grade';
if (!isset($pageDescription)) $pageDescription = '';
if (!isset($initialSubject)) $initialSubject = 'math';
if (!isset($initialSubjectName)) $initialSubjectName = 'Math';
if (!isset($initialSubjectDesc)) $initialSubjectDesc = '';
if (!isset($modules)) $modules = [];
?>

<!-- Level Breadcrumb & Subject Navigation -->
<div class="sticky top-0 z-40 bg-gray-50/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 transition-all duration-300 print:hidden shadow-sm">
    <div class="container mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-4">
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400" aria-label="Breadcrumb">
            <a href="../index.php" class="hover:text-<?php echo $themeColor; ?>-600 transition-colors">Home</a>
            <i class="fas fa-chevron-right text-[8px] opacity-30"></i>
            <span class="text-<?php echo $themeColor; ?>-600/70"><?php echo $gradeText; ?></span>
            <i class="fas fa-chevron-right text-[8px] opacity-30"></i>
            <span class="text-gray-900 dark:text-white"><?php echo $levelTitle; ?></span>
        </nav>
        
        <div class="flex overflow-x-auto gap-2 no-scrollbar" role="tablist" aria-label="Subject navigation tabs">
            <button onclick="switchTab('math')" id="tab-math"
                class="tab-button <?php echo ($initialSubject == 'math') ? 'active' : ''; ?> flex-shrink-0 flex items-center gap-2 px-5 py-2 rounded-lg font-black text-xs transition-all duration-300 border border-transparent aria-selected:bg-<?php echo $themeColor; ?>-600 aria-selected:text-white aria-selected:shadow-lg aria-selected:shadow-<?php echo $themeColor; ?>-600/20"
                aria-selected="true" role="tab" aria-controls="content-math">
                MATH
            </button>
            <button onclick="switchTab('ela')" id="tab-ela"
                class="tab-button <?php echo ($initialSubject == 'ela') ? 'active' : ''; ?> flex-shrink-0 flex items-center gap-2 px-5 py-2 rounded-lg font-black text-xs text-gray-500 dark:text-gray-400 transition-all duration-300 border border-transparent hover:bg-<?php echo $themeColor; ?>-600/10 hover:text-<?php echo $themeColor; ?>-600 aria-selected:bg-<?php echo $themeColor; ?>-600 aria-selected:text-white aria-selected:shadow-lg aria-selected:shadow-<?php echo $themeColor; ?>-600/20"
                aria-selected="false" role="tab" aria-controls="content-ela">
                LANGUAGE ARTS
            </button>
            <button onclick="switchTab('science')" id="tab-science"
                class="tab-button <?php echo ($initialSubject == 'science') ? 'active' : ''; ?> flex-shrink-0 flex items-center gap-2 px-5 py-2 rounded-lg font-black text-xs text-gray-500 dark:text-gray-400 transition-all duration-300 border border-transparent hover:bg-<?php echo $themeColor; ?>-600/10 hover:text-<?php echo $themeColor; ?>-600 aria-selected:bg-<?php echo $themeColor; ?>-600 aria-selected:text-white aria-selected:shadow-lg aria-selected:shadow-<?php echo $themeColor; ?>-600/20"
                aria-selected="false" role="tab" aria-controls="content-science">
                SCIENCE
            </button>
            <button onclick="switchTab('social')" id="tab-social"
                class="tab-button <?php echo ($initialSubject == 'social') ? 'active' : ''; ?> flex-shrink-0 flex items-center gap-2 px-5 py-2 rounded-lg font-black text-xs text-gray-500 dark:text-gray-400 transition-all duration-300 border border-transparent hover:bg-<?php echo $themeColor; ?>-600/10 hover:text-<?php echo $themeColor; ?>-600 aria-selected:bg-<?php echo $themeColor; ?>-600 aria-selected:text-white aria-selected:shadow-lg aria-selected:shadow-<?php echo $themeColor; ?>-600/20"
                aria-selected="false" role="tab" aria-controls="content-social">
                SOCIAL STUDIES
            </button>
        </div>
    </div>
</div>

<!-- IXL-Style Clean Header -->
<header class="bg-white dark:bg-gray-950 pt-12 pb-8 border-b border-gray-100 dark:border-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 overflow-hidden">
            <div class="animate-reveal">
                <div class="flex items-center gap-3 mb-2">
                    <span class="w-2 h-8 bg-<?php echo $themeColor; ?>-600 rounded-full"></span>
                    <h1 class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white font-outfit tracking-tight">
                        <?php echo $levelTitle; ?> <span id="header-subject" class="text-<?php echo $themeColor; ?>-600/80 font-medium capitalize"><?php echo $initialSubjectName; ?></span>
                    </h1>
                </div>
                <p id="header-description" class="text-gray-500 dark:text-gray-400 text-lg font-medium max-w-2xl ml-5 leading-snug">
                    <?php echo $initialSubjectDesc; ?>
                </p>
            </div>
            
            <!-- Assessment CTA -->
            <div class="flex items-center gap-3 animate-reveal" style="animation-delay: 0.1s;">
                 <a href="../assessment/index.php"
                    class="inline-flex items-center justify-center px-6 py-2.5 bg-<?php echo $themeColor; ?>-600 text-white text-sm font-black rounded-lg hover:bg-<?php echo $themeColor; ?>-700 transition-all shadow-lg shadow-<?php echo $themeColor; ?>-600/20 active:scale-95">
                    <i class="fas fa-star mr-2 text-[10px]"></i> SKILL DIAGNOSTIC
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Main Content Area -->
<main id="main-content" class="container mx-auto px-4 py-12 scroll-mt-32" tabindex="-1">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
        <!-- Main Directory Col (75%) -->
        <div class="lg:col-span-3">

            <!-- MATH SECTION -->
            <section id="content-math" class="tab-content <?php echo ($initialSubject == 'math') ? 'block' : 'hidden'; ?> animate-fade-in-up" role="tabpanel">
                
                <?php foreach ($modules as $mIndex => $module): ?>
                <!-- Module <?php echo ($mIndex + 1); ?> Header & Overview -->
                <div class="mb-12 <?php echo ($mIndex > 0) ? 'mt-16' : ''; ?>">
                    <h2 class="text-xs font-black text-<?php echo $themeColor; ?>-600 uppercase tracking-[0.2em] mb-4 flex items-center gap-2">
                        <i class="fas fa-layer-group"></i> Module <?php echo ($mIndex + 1); ?>
                    </h2>
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-6 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 rounded-xl bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 text-<?php echo $themeColor; ?>-600 flex items-center justify-center text-2xl shadow-sm">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-gray-900 dark:text-white font-outfit tracking-tight"><?php echo $module['title']; ?></h3>
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium"><?php echo $module['description']; ?></p>
                            </div>
                        </div>

                        <!-- Mastery Metric -->
                        <div class="flex items-center gap-6">
                            <div class="text-right">
                                <div class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Mastery</div>
                                <div class="text-2xl font-black text-<?php echo $themeColor; ?>-600 module-progress-text" data-module="<?php echo ($mIndex + 1); ?>">0%</div>
                            </div>
                            <div class="w-32 h-1.5 bg-gray-100 dark:bg-white/5 rounded-full overflow-hidden">
                                <div class="h-full bg-<?php echo $themeColor; ?>-600 transition-all duration-1000 ease-out module-progress-bar" data-module="<?php echo ($mIndex + 1); ?>" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-16">
                    <?php foreach ($module['topics'] as $topic): ?>
                    <!-- Category <?php echo $topic['letter']; ?>: <?php echo $topic['name']; ?> -->
                    <div>
                        <div class="flex items-center gap-4 mb-8">
                            <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-<?php echo $themeColor; ?>-600 text-white font-black text-xl shadow-lg shadow-<?php echo $themeColor; ?>-600/20"><?php echo $topic['letter']; ?></span>
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 dark:text-white font-outfit tracking-tight"><?php echo $topic['name']; ?></h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php foreach ($topic['skills'] as $skill): ?>
                            <!-- Skill <?php echo $skill['code']; ?> -->
                            <div class="group relative flex items-center justify-between p-4 rounded-xl bg-white dark:bg-white/5 border border-gray-100 dark:border-white/5 hover:border-<?php echo $themeColor; ?>-200 dark:hover:border-<?php echo $themeColor; ?>-900/30 hover:shadow-xl transition-all duration-300 skill-card" id="skill-<?php echo str_replace('.', '-', strtolower($skill['id'])); ?>">
                                 <div class="flex items-center gap-4">
                                    <span class="text-xs font-black text-<?php echo $themeColor; ?>-600/50 group-hover:text-<?php echo $themeColor; ?>-600 transition-colors"><?php echo $skill['code']; ?></span>
                                    <span class="text-[0.95rem] font-bold text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white transition-colors"><?php echo $skill['name']; ?></span>
                                 </div>
                                 <button onclick="toggleLesson('<?php echo $skill['id']; ?>', this)" 
                                         class="lesson-check-btn w-8 h-8 rounded-full border-2 border-gray-100 dark:border-white/10 flex items-center justify-center transition-all hover:scale-110 active:scale-90"
                                         aria-label="Mark as complete">
                                     <div class="check-icon text-transparent text-[10px]"><i class="fas fa-check"></i></div>
                                 </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </section>

            <!-- LANGUAGE ARTS SECTION -->
            <section id="content-ela" class="tab-content <?php echo ($initialSubject == 'ela') ? 'block' : 'hidden'; ?> animate-fade-in-up" role="tabpanel">
                <div class="flex flex-col items-center justify-center py-20 bg-gray-50 dark:bg-white/5 rounded-3xl border border-dashed border-gray-300 dark:border-white/10">
                    <div class="w-20 h-20 bg-<?php echo $themeColor; ?>-100 dark:bg-<?php echo $themeColor; ?>-900/30 rounded-full flex items-center justify-center text-<?php echo $themeColor; ?>-600 text-3xl mb-4 shadow-sm">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h2 class="text-2xl font-black text-gray-900 dark:text-white font-outfit tracking-tight">English Language Arts</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-2 max-w-md text-center font-medium">Literary theory, comprehensive research papers, and classical literature analysis for <?php echo $levelTitle; ?>.</p>
                    <div class="mt-8 px-6 py-2 bg-<?php echo $themeColor; ?>-600 text-white text-[10px] font-black rounded-full uppercase tracking-widest shadow-lg shadow-<?php echo $themeColor; ?>-600/20">
                        Coming Soon
                    </div>
                </div>
            </section>

            <!-- SCIENCE SECTION -->
            <section id="content-science" class="tab-content <?php echo ($initialSubject == 'science') ? 'block' : 'hidden'; ?> animate-fade-in-up" role="tabpanel">
                <div class="flex flex-col items-center justify-center py-20 bg-gray-50 dark:bg-white/5 rounded-3xl border border-dashed border-gray-300 dark:border-white/10">
                    <div class="w-20 h-20 bg-<?php echo $themeColor; ?>-100 dark:bg-<?php echo $themeColor; ?>-900/30 rounded-full flex items-center justify-center text-<?php echo $themeColor; ?>-600 text-3xl mb-4 shadow-sm">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h2 class="text-2xl font-black text-gray-900 dark:text-white font-outfit tracking-tight">Science</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-2 max-w-md text-center font-medium">Explore nature, the environment, and physical laws customized for <?php echo $levelTitle; ?>.</p>
                    <div class="mt-8 px-6 py-2 bg-<?php echo $themeColor; ?>-600 text-white text-[10px] font-black rounded-full uppercase tracking-widest shadow-lg shadow-<?php echo $themeColor; ?>-600/20">
                        Coming Soon
                    </div>
                </div>
            </section>

            <!-- SOCIAL STUDIES SECTION -->
            <section id="content-social" class="tab-content <?php echo ($initialSubject == 'social') ? 'block' : 'hidden'; ?> animate-fade-in-up" role="tabpanel">
                <div class="flex flex-col items-center justify-center py-20 bg-gray-50 dark:bg-white/5 rounded-3xl border border-dashed border-gray-300 dark:border-white/10">
                    <div class="w-20 h-20 bg-<?php echo $themeColor; ?>-100 dark:bg-<?php echo $themeColor; ?>-900/30 rounded-full flex items-center justify-center text-<?php echo $themeColor; ?>-600 text-3xl mb-4 shadow-sm">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h2 class="text-2xl font-black text-gray-900 dark:text-white font-outfit tracking-tight">Social Studies</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-2 max-w-md text-center font-medium">History, citizenship, and community study modules for <?php echo $levelTitle; ?>.</p>
                    <div class="mt-8 px-6 py-2 bg-<?php echo $themeColor; ?>-600 text-white text-[10px] font-black rounded-full uppercase tracking-widest shadow-lg shadow-<?php echo $themeColor; ?>-600/20">
                        Coming Soon
                    </div>
                </div>
            </section>

        </div> <!-- End Main Directory Col -->

        <!-- Recommendations Sidebar -->
        <aside class="space-y-8 animate-reveal" style="animation-delay: 0.3s;">
            <!-- Skill of the Day -->
            <div id="side-skill-day" class="bg-gradient-to-br from-<?php echo $themeColor; ?>-500 to-<?php echo ($themeColor == 'rose') ? 'pink' : $themeColor; ?>-600 rounded-3xl p-6 text-white shadow-xl shadow-<?php echo $themeColor; ?>-600/20 relative overflow-hidden group">
                <i class="fas fa-calendar-star absolute -bottom-4 -right-4 text-8xl text-white/10 group-hover:scale-110 transition-transform duration-700"></i>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4">
                         <span class="px-2 py-0.5 rounded bg-white/20 text-[10px] font-black uppercase tracking-widest">Skill of the Day</span>
                    </div>
                    <div id="day-skill-id" class="text-[10px] font-black text-<?php echo $themeColor; ?>-200 mb-1">...</div>
                    <h4 id="day-skill-name" class="text-lg font-black leading-tight mb-6">Loading recommendation...</h4>
                    <button class="w-full py-3 bg-white text-<?php echo $themeColor; ?>-600 rounded-xl font-black text-xs hover:bg-gray-50 transition-colors shadow-lg active:scale-95">
                        PRACTICE NOW
                    </button>
                </div>
            </div>

            <!-- Recent Activity -->
            <div id="side-recent-activity" class="bg-gray-50 dark:bg-white/5 rounded-3xl p-6 border border-gray-100 dark:border-white/5">
                <h4 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-6 flex items-center gap-2">
                    <i class="fas fa-history"></i> Recent Activity
                </h4>
                <div id="recent-activity-list" class="space-y-4">
                    <div class="text-sm text-gray-400 font-medium italic py-4 text-center">No recent activity</div>
                </div>
            </div>

            <!-- Study Tip -->
            <div class="bg-white dark:bg-white/5 rounded-3xl p-8 border border-gray-200 dark:border-white/10 relative overflow-hidden group shadow-sm">
                <i class="fas fa-lightbulb absolute -top-4 -right-4 text-8xl text-<?php echo $themeColor; ?>-600/5 rotate-12 group-hover:rotate-45 transition-transform duration-500"></i>
                <div class="relative z-10">
                    <h4 class="text-xs font-black text-<?php echo $themeColor; ?>-600/50 uppercase tracking-[0.2em] mb-4">Study Tip</h4>
                    <p class="text-lg font-bold leading-tight mb-4 text-gray-900 dark:text-white">Active learning is key! Try to explain topics to others.</p>
                    <div class="w-8 h-1 bg-<?php echo $themeColor; ?>-600/20 rounded-full"></div>
                </div>
            </div>
        </aside>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
    const LEVEL_ID = '<?php echo $levelId; ?>';
    const THEME_COLOR = '<?php echo $themeColor; ?>';
    let completedLessons = [];

    // Load progress from localStorage
    function loadLessonProgress() {
        try {
            const stored = localStorage.getItem(`hl_progress_${LEVEL_ID}`);
            if (stored) completedLessons = JSON.parse(stored);
        } catch (e) { }
    }

    function toggleLesson(lessonId, btn) {
        const index = completedLessons.indexOf(lessonId);
        if (index > -1) {
            completedLessons.splice(index, 1);
        } else {
            completedLessons.push(lessonId);
            triggerWinEffect();
        }
        localStorage.setItem(`hl_progress_${LEVEL_ID}`, JSON.stringify(completedLessons));
        updateAllUI();
    }

    function triggerWinEffect() {
        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 },
            colors: [getGlobalThemeHex()]
        });
    }

    function getGlobalThemeHex() {
        const colors = {
            'teal': '#0d9488',
            'rose': '#e11d48',
            'indigo': '#4f46e5',
            'blue': '#2563eb',
            'cyan': '#0891b2',
            'green': '#16a34a',
            'orange': '#ea580c',
            'violet': '#7c3aed'
        };
        return colors[THEME_COLOR] || '#e11d48';
    }

    function switchTab(tabName) {
        const subjectData = {
            'math': { name: 'Math', desc: '<?php echo $initialSubjectDesc; ?>' },
            'ela': { name: 'Language Arts', desc: 'Developing strong literacy and communication skills for <?php echo $levelTitle; ?>.' },
            'science': { name: 'Science', desc: 'Exploring natural phenomena and scientific inquiry.' },
            'social': { name: 'Social Studies', desc: 'Understanding society, history, and civic responsibility.' }
        };

        const headerSubject = document.getElementById('header-subject');
        const headerDesc = document.getElementById('header-description');
        if (subjectData[tabName]) {
            if (headerSubject) headerSubject.innerText = subjectData[tabName].name;
            if (headerDesc) headerDesc.innerText = subjectData[tabName].desc;
        }

        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
        document.querySelectorAll('.tab-button').forEach(b => {
            b.classList.remove('active', `bg-${THEME_COLOR}-600`, 'text-white', 'shadow-lg', `shadow-${THEME_COLOR}-600/20`);
            b.classList.add('text-gray-500', 'dark:text-gray-400');
            b.setAttribute('aria-selected', 'false');
        });

        const target = document.getElementById(`content-${tabName}`);
        if (target) target.classList.remove('hidden');
        
        const btn = document.getElementById(`tab-${tabName}`);
        if (btn) {
            btn.classList.add('active', `bg-${THEME_COLOR}-600`, 'text-white', 'shadow-lg', `shadow-${THEME_COLOR}-600/20`);
            btn.classList.remove('text-gray-500', 'dark:text-gray-400');
            btn.setAttribute('aria-selected', 'true');
        }
    }

    const allSkills = <?php echo json_encode(array_merge(...array_column($modules, 'topics'))['skills'] ?? []); ?>;
    // Flattening skills for sidebar
    const flatSkills = [];
    <?php foreach($modules as $m): foreach($m['topics'] as $t): foreach($t['skills'] as $s): ?>
        flatSkills.push(<?php echo json_encode($s); ?>);
    <?php endforeach; endforeach; endforeach; ?>

    function updateRecentActivity() {
        const list = document.getElementById('recent-activity-list');
        if (!list) return;
        const recent = [...completedLessons].reverse().slice(0, 2);
        if (recent.length === 0) {
            list.innerHTML = '<div class="text-xs text-gray-400 font-medium italic py-2 text-center">No recent activity yet</div>';
            return;
        }
        list.innerHTML = recent.map(id => {
            const skill = flatSkills.find(s => s.id === id) || { name: 'Unknown Skill', code: '??' };
            return `
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-white dark:bg-white/5 border border-gray-100 dark:border-white/5 shadow-sm">
                    <div class="w-8 h-8 rounded-full bg-${THEME_COLOR}-100 dark:bg-${THEME_COLOR}-900/30 text-${THEME_COLOR}-600 flex items-center justify-center text-[10px]">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <div class="text-[10px] font-black text-${THEME_COLOR}-600/50">${skill.code}</div>
                        <div class="text-xs font-bold text-gray-700 dark:text-gray-300 line-clamp-1">${skill.name}</div>
                    </div>
                </div>
            `;
        }).join('');
    }

    function updateSkillOfTheDay() {
        const dayId = document.getElementById('day-skill-id');
        const dayName = document.getElementById('day-skill-name');
        if (!dayId || !dayName || flatSkills.length === 0) return;
        const available = flatSkills.filter(s => !completedLessons.includes(s.id));
        const pool = available.length > 0 ? available : flatSkills;
        const dateSeed = new Date().toDateString();
        let hash = 0;
        for (let i = 0; i < dateSeed.length; i++) hash = dateSeed.charCodeAt(i) + ((hash << 5) - hash);
        const index = Math.abs(hash) % pool.length;
        const skill = pool[index];
        dayId.innerText = skill.code;
        dayName.innerText = skill.name;
    }

    function updateAllUI() {
        updateRecentActivity();
        updateSkillOfTheDay();
        document.querySelectorAll('.skill-card').forEach(card => {
            const btn = card.querySelector('.lesson-check-btn');
            const onclickText = btn.getAttribute('onclick');
            const id = onclickText.match(/'([^']+)'/)[1];
            const isDone = completedLessons.includes(id);
            const checkIcon = btn.querySelector('.check-icon');
            const textSpan = card.querySelector('span:last-child');
            if (isDone) {
                card.classList.add(`bg-${THEME_COLOR}-50/50`, `dark:bg-${THEME_COLOR}-900/10`, `border-${THEME_COLOR}-200`, `dark:border-${THEME_COLOR}-800/30`);
                checkIcon.classList.remove('text-transparent');
                checkIcon.classList.add(`bg-${THEME_COLOR}-600`, 'text-white');
                btn.classList.add(`bg-${THEME_COLOR}-600`, `border-${THEME_COLOR}-600`);
                if (textSpan) textSpan.classList.add('line-through', 'opacity-40');
            } else {
                card.classList.remove(`bg-${THEME_COLOR}-50/50`, `dark:bg-${THEME_COLOR}-900/10`, `border-${THEME_COLOR}-200`, `dark:border-${THEME_COLOR}-800/30`);
                checkIcon.classList.add('text-transparent');
                checkIcon.classList.remove(`bg-${THEME_COLOR}-600`, 'text-white');
                btn.classList.remove(`bg-${THEME_COLOR}-600`, `border-${THEME_COLOR}-600`);
                if (textSpan) textSpan.classList.remove('line-through', 'opacity-40');
            }
        });
        updateMetrics();
    }

    function updateMetrics() {
        // Module progress
        document.querySelectorAll('.module-progress-text').forEach((el, index) => {
            const moduleData = <?php echo json_encode($modules); ?>[index];
            const skillIds = [].concat(...moduleData.topics.map(t => t.skills.map(s => s.id)));
            const doneCount = skillIds.filter(id => completedLessons.includes(id)).length;
            const percent = Math.round((doneCount / skillIds.length) * 100) || 0;
            el.innerText = percent + '%';
            document.querySelectorAll('.module-progress-bar')[index].style.width = percent + '%';
        });
    }

    // Initialize
    loadLessonProgress();
    updateAllUI();
</script>

<?php include '../src/footer.php'; ?>
