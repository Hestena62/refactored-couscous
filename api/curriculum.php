<?php
  // Define page-specific variables for the header
  $pageTitle = 'Curriculum Standards & Outlines | Hesten\'s Learning';
  $pageDescription = 'In-depth curriculum outlines and standards alignment for Math, ELA, Science, and Social Studies across all grade levels.';
  
  // Include the header
  include 'src/header.php';

  // Define the grades and their corresponding levels
  $grades = [
    ['name' => 'Pre-K', 'level' => 'A', 'color' => 'teal'],
    ['name' => 'Kindergarten', 'level' => 'B', 'color' => 'indigo'],
    ['name' => '1st Grade', 'level' => 'C', 'color' => 'rose'],
    ['name' => '2nd Grade', 'level' => 'D', 'color' => 'sky'],
    ['name' => '3rd Grade', 'level' => 'E', 'color' => 'emerald'],
    ['name' => '4th Grade', 'level' => 'F', 'color' => 'amber'],
    ['name' => '5th Grade', 'level' => 'G', 'color' => 'violet'],
    ['name' => '6th Grade', 'level' => 'H', 'color' => 'pink'],
    ['name' => '7th Grade', 'level' => 'I', 'color' => 'cyan'],
    ['name' => '8th Grade', 'level' => 'J', 'color' => 'orange'],
    ['name' => '9th Grade', 'level' => 'K', 'color' => 'blue'],
    ['name' => '10th Grade', 'level' => 'L', 'color' => 'purple'],
    ['name' => '11th Grade', 'level' => 'M', 'color' => 'fuchsia'],
    ['name' => '12th Grade', 'level' => 'N', 'color' => 'slate'],
  ];

  $subjects = [
    'math' => ['name' => 'Mathematics', 'icon' => 'fa-calculator', 'color' => 'indigo'],
    'ela' => ['name' => 'Language Arts', 'icon' => 'fa-book-open', 'color' => 'rose'],
    'science' => ['name' => 'Science', 'icon' => 'fa-flask', 'color' => 'emerald'],
    'social' => ['name' => 'Social Studies', 'icon' => 'fa-globe-americas', 'color' => 'amber'],
  ];
?>

<!-- Subject Navigation (Sticky) -->
<div class="sticky top-[73px] z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-gray-200 dark:border-slate-800 transition-all duration-300 print:hidden shadow-sm">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between gap-4">
            <div class="flex overflow-x-auto gap-2 no-scrollbar" role="tablist" aria-label="Subject tabs">
                <?php foreach ($subjects as $id => $subj): ?>
                <button onclick="switchSubject('<?php echo $id; ?>')" id="tab-<?php echo $id; ?>"
                    class="subject-tab-btn flex-shrink-0 flex items-center gap-2 px-6 py-2.5 rounded-xl font-black text-xs transition-all duration-300 border border-transparent 
                    <?php echo ($id === 'math') ? 'active bg-indigo-600 text-white shadow-lg shadow-indigo-600/20' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-slate-800'; ?>"
                    role="tab" aria-selected="<?php echo ($id === 'math') ? 'true' : 'false'; ?>">
                    <i class="fas <?php echo $subj['icon']; ?> text-[10px]"></i>
                    <?php echo strtoupper($subj['name']); ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<main id="main-content" class="min-h-screen pb-24">
    
    <!-- Grade Level Switcher (Header) -->
    <header class="bg-gray-50 dark:bg-slate-950 pt-16 pb-12 border-b border-gray-200 dark:border-slate-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl animate-reveal">
                <h1 class="text-4xl md:text-5xl font-black text-text-default mb-4 font-outfit tracking-tight">
                    Curriculum <span id="display-subject-name" class="text-indigo-600">Mathematics</span>
                </h1>
                <p id="display-subject-desc" class="text-lg text-text-secondary font-medium mb-10 max-w-2xl">
                    Detailed learning paths, state standards alignment, and core competencies for every stage of development.
                </p>

                <!-- Grade Selection Chips -->
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($grades as $index => $grade): ?>
                    <button onclick="switchGrade('<?php echo $grade['name']; ?>', '<?php echo $grade['level']; ?>')" 
                        class="grade-chip px-4 py-2 rounded-full border-2 border-gray-200 dark:border-slate-800 text-sm font-bold transition-all duration-300 hover:border-primary/30 
                        <?php echo ($index === 1) ? 'active bg-primary text-white border-primary shadow-md' : 'text-text-secondary hover:bg-white dark:hover:bg-slate-800'; ?>"
                        data-grade="<?php echo $grade['name']; ?>">
                        <?php echo $grade['name']; ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Detailed Content Area -->
    <div class="container mx-auto px-4 py-16">
        <div id="curriculum-view" class="animate-reveal" style="animation-delay: 0.1s;">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <!-- Left: Detailed Outline (2/3) -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- Overview Card -->
                    <section class="glass rounded-[2.5rem] p-8 md:p-12 relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-8 opacity-5 text-8xl" id="content-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h2 class="text-xs font-black text-primary uppercase tracking-[0.2em] mb-6 flex items-center gap-2">
                            <i class="fas fa-info-circle"></i> Curriculum Overview
                        </h2>
                        <h3 id="view-title" class="text-3xl font-black text-text-default mb-6 font-outfit">Kindergarten Math Foundations</h3>
                        <div id="view-overview" class="prose dark:prose-invert max-w-none text-text-secondary text-lg leading-relaxed">
                            <p>Our Kindergarten math curriculum focus is based on the <strong>EngageNY</strong> framework, specifically designed to build strong number sense and foundational geometric thinking. Students engage with "Number of the Day" activities, hands-on manipulatives, and interactive story problems.</p>
                            <p class="mt-4">Key focus areas include counting and cardinality, operations and algebraic thinking, and measurement and data.</p>
                        </div>
                    </section>

                    <!-- Standards Alignment -->
                    <section class="glass rounded-[2.5rem] p-8 md:p-12">
                        <h2 class="text-xs font-black text-emerald-600 uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                            <i class="fas fa-check-double"></i> Standards Alignment
                        </h2>
                        <div id="view-standards" class="space-y-6">
                            <div class="p-6 rounded-2xl bg-emerald-500/5 border border-emerald-500/10">
                                <h4 class="font-bold text-emerald-600 dark:text-emerald-400 mb-2">CCSS.MATH.CONTENT.K.CC.A.1</h4>
                                <p class="text-text-secondary">Count to 100 by ones and by tens. Students learn to recognize patterns in the number system and develop fluencies with number sequences.</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-emerald-500/5 border border-emerald-500/10">
                                <h4 class="font-bold text-emerald-600 dark:text-emerald-400 mb-2">CCSS.MATH.CONTENT.K.OA.A.1</h4>
                                <p class="text-text-secondary">Represent addition and subtraction with objects, fingers, mental images, drawings, sounds, acting out situations, verbal explanations, expressions, or equations.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right: Highlights & Quick Links (1/3) -->
                <aside class="space-y-8">
                    <!-- Key Competencies Card -->
                    <div class="bg-primary/5 dark:bg-primary/10 rounded-[2.5rem] p-8 border border-primary/10">
                        <h4 class="text-xs font-black text-primary uppercase tracking-[0.2em] mb-6">Key Competencies</h4>
                        <ul id="view-competencies" class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-primary mt-1"></i>
                                <span class="font-bold text-text-default">Number Recognition to 100</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-primary mt-1"></i>
                                <span class="font-bold text-text-default">Basic Shapes Identification</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check-circle text-primary mt-1"></i>
                                <span class="font-bold text-text-default">Simple Addition/Subtraction</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Level Link -->
                    <div class="glass rounded-[2.5rem] p-8 border border-gray-200 dark:border-slate-800 group hover:border-primary transition-all">
                        <h4 class="text-xs font-black text-text-secondary uppercase tracking-[0.2em] mb-4">Practice Skills</h4>
                        <p class="text-sm text-text-secondary mb-6">Ready to test these skills? Head over to the interactive Level page.</p>
                        <a id="view-level-link" href="/levels/b.php" class="inline-flex items-center justify-center w-full py-4 bg-primary text-white rounded-2xl font-black text-sm shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">
                            GO TO LEVEL B <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>

<script>
    let currentSubject = 'math';
    let currentGrade = 'Kindergarten';

    const curriculumData = {
        'math': {
            'desc': 'Detailed learning paths, state standards alignment, and core competencies for Mathematics.',
            'color': 'indigo-600',
            'icon': 'fa-calculator',
            'grades': {
                'Pre-K': {
                    'title': 'Pre-K Math Foundations',
                    'overview': '<p>Early introduction to number recognition, shapes, and patterns through play-based learning.</p>',
                    'standards': '<div class="p-4 bg-emerald-500/5 rounded-xl border border-emerald-500/10"><h4 class="font-bold text-emerald-600">PK.CC.1</h4><p>Counting objects to 5 and identifying basic shapes.</p></div>',
                    'competencies': ['Number Recognition 1-10', 'Shape Identification', 'Pattern Completion'],
                    'level': 'A'
                },
                'Kindergarten': {
                    'title': 'Kindergarten Math Foundations',
                    'overview': '<p>Our Kindergarten math curriculum focus is based on the <strong>EngageNY</strong> framework, specifically designed to build strong number sense and foundational geometric thinking.</p>',
                    'standards': '<div class="p-4 bg-emerald-500/5 rounded-xl border border-emerald-500/10"><h4 class="font-bold text-emerald-600">K.CC.A.1</h4><p>Count to 100 by ones and by tens.</p></div>',
                    'competencies': ['Number Recognition to 100', 'Basic Shapes Identification', 'Simple Addition'],
                    'level': 'B'
                }
                // Add more grades as needed...
            }
        },
        'ela': {
            'desc': 'Literacy development, phonics, and classical literature analysis for every grade level.',
            'color': 'rose-600',
            'icon': 'fa-book-open',
            'grades': {
                'Pre-K': {
                    'title': 'Pre-K Literacy & Phonics',
                    'overview': '<p>Building the first blocks of literacy through letter recognition and rhyming sounds.</p>',
                    'standards': '<div class="p-4 bg-emerald-500/5 rounded-xl border border-emerald-500/10"><h4 class="font-bold text-emerald-600">PK.ELA.1</h4><p>Identify upper-case letters and sounds.</p></div>',
                    'competencies': ['Letter Recognition', 'Phonemic Awareness', 'Story Comprehension'],
                    'level': 'A'
                }
            }
        }
        // Add Science and Social Studies as needed...
    };

    function switchSubject(id) {
        currentSubject = id;
        const data = curriculumData[id] || { name: id, color: 'primary', icon: 'fa-info-circle', desc: 'Curriculum details.' };
        
        // Update Tabs
        document.querySelectorAll('.subject-tab-btn').forEach(btn => {
            btn.classList.remove('active', 'bg-indigo-600', 'bg-rose-600', 'bg-emerald-600', 'bg-amber-600', 'text-white', 'shadow-lg');
            btn.classList.add('text-gray-500', 'dark:text-gray-400');
            btn.setAttribute('aria-selected', 'false');
        });
        
        const activeBtn = document.getElementById(`tab-${id}`);
        const colorClass = data.color === 'indigo-600' ? 'bg-indigo-600' : 
                          data.color === 'rose-600' ? 'bg-rose-600' :
                          data.color === 'emerald-600' ? 'bg-emerald-600' : 'bg-amber-600';
                          
        activeBtn.classList.add('active', colorClass, 'text-white', 'shadow-lg');
        activeBtn.classList.remove('text-gray-500', 'dark:text-gray-400');
        activeBtn.setAttribute('aria-selected', 'true');

        // Update Header
        const nameEl = document.getElementById('display-subject-name');
        nameEl.innerText = activeBtn.innerText.trim();
        nameEl.className = `text-${data.color}`;
        document.getElementById('display-subject-desc').innerText = data.desc;

        updateView();
    }

    function switchGrade(gradeName, level) {
        currentGrade = gradeName;
        
        document.querySelectorAll('.grade-chip').forEach(chip => {
            chip.classList.remove('active', 'bg-primary', 'text-white', 'border-primary', 'shadow-md');
            chip.classList.add('text-text-secondary');
        });
        
        const activeChip = document.querySelector(`[data-grade="${gradeName}"]`);
        activeChip.classList.add('active', 'bg-primary', 'text-white', 'border-primary', 'shadow-md');
        activeChip.classList.remove('text-text-secondary');

        updateView();
    }

    function updateView() {
        const view = document.getElementById('curriculum-view');
        view.style.opacity = '0';
        view.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
            const subject = curriculumData[currentSubject];
            const gradeData = (subject && subject.grades[currentGrade]) ? subject.grades[currentGrade] : {
                title: `${currentGrade} ${currentSubject.toUpperCase()} Outline`,
                overview: `<p>Outline and detailed curriculum for ${currentGrade} ${currentSubject} is being updated. Please check back soon or visit the specific level page.</p>`,
                standards: '<p>Standards data coming soon.</p>',
                competencies: ['Information Pending'],
                level: 'A' // Default fallback
            };

            document.getElementById('view-title').innerText = gradeData.title;
            document.getElementById('view-overview').innerHTML = gradeData.overview;
            document.getElementById('view-standards').innerHTML = gradeData.standards;
            
            const compList = document.getElementById('view-competencies');
            compList.innerHTML = gradeData.competencies.map(c => `
                <li class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-primary mt-1"></i>
                    <span class="font-bold text-text-default">${c}</span>
                </li>
            `).join('');

            const levelLink = document.getElementById('view-level-link');
            levelLink.href = `/levels/${gradeData.level.toLowerCase()}.php`;
            levelLink.innerHTML = `GO TO LEVEL ${gradeData.level.toUpperCase()} <i class="fas fa-arrow-right ml-2"></i>`;

            document.getElementById('content-icon').innerHTML = `<i class="fas ${subject ? subject.icon : 'fa-info-circle'}"></i>`;

            view.style.opacity = '1';
            view.style.transform = 'translateY(0)';
        }, 200);
    }
</script>

<?php
  // Include the footer
  include 'src/footer.php';
?>