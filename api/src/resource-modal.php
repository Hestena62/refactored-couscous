<?php
/**
 * Resource Modal Component
 * A dynamic, interactive modal system used across the student help pages 
 * to provide context-sensitive help, definitions, and tutorials.
 */
?>

<!-- DYNAMIC RESOURCE MODAL -->
<div id="resource-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="resource-title">
    <!-- Backdrop with premium blur -->
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity duration-300" onclick="closeDynamicModal()"></div>
    
    <!-- Modal Content -->
    <div id="resource-modal-container" class="bg-white dark:bg-slate-900 rounded-[2.5rem] w-full max-w-2xl transform transition-all duration-500 scale-95 opacity-0 shadow-2xl border border-slate-200 dark:border-slate-800 flex flex-col max-h-[85vh] overflow-hidden relative z-10">
        
        <!-- Header -->
        <div class="p-8 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center shrink-0 bg-gradient-to-r from-indigo-500/5 to-purple-500/5">
            <div class="flex items-center gap-5">
                <div id="resource-icon-box" class="w-14 h-14 bg-indigo-100 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-2xl shadow-inner transition-transform duration-500">
                    <i class="fas fa-book-open"></i>
                </div>
                <div>
                    <h3 id="resource-title" class="text-2xl md:text-3xl font-black font-outfit text-slate-900 dark:text-white leading-none tracking-tight">Resource Guide</h3>
                    <div class="flex items-center gap-2 mt-2">
                        <span class="w-6 h-1 bg-indigo-500 rounded-full opacity-50"></span>
                        <p id="resource-category" class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Help Center</p>
                    </div>
                </div>
            </div>
            <button onclick="closeDynamicModal()" class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-slate-900 dark:hover:text-white transition-all flex items-center justify-center hover:rotate-90" aria-label="Close Resource">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Body -->
        <div class="p-8 md:p-10 overflow-y-auto flex-grow bg-white dark:bg-slate-900 custom-modal-scrollbar">
            <div id="resource-content" class="prose dark:prose-invert max-w-none space-y-6 text-slate-600 dark:text-slate-300">
                <!-- Dynamic content will be injected here -->
                <div class="flex flex-col items-center justify-center py-12 text-center space-y-4">
                    <i class="fas fa-circle-notch fa-spin text-3xl text-indigo-500"></i>
                    <p class="font-bold text-slate-400">Loading learning resource...</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="p-6 md:px-10 md:py-8 border-t border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50 flex flex-col sm:flex-row justify-between items-center gap-6 shrink-0">
            <div class="flex items-center gap-3">
                <button id="speak-btn" class="flex items-center gap-2 px-6 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 rounded-2xl font-bold text-sm hover:bg-indigo-50 dark:hover:bg-indigo-900/20 hover:text-indigo-600 transition-all shadow-sm">
                    <i class="fas fa-volume-up"></i> <span>Read Aloud</span>
                </button>
                <button onclick="window.print()" class="w-12 h-12 rounded-2xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-all flex items-center justify-center shadow-sm" title="Print Resource">
                    <i class="fas fa-print"></i>
                </button>
            </div>
            <button onclick="closeDynamicModal()" class="w-full sm:w-auto px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-xl shadow-indigo-600/20 hover:bg-indigo-700 hover:-translate-y-0.5 transition-all active:scale-95">
                Got it, thanks!
            </button>
        </div>
    </div>
</div>

<!-- Resource CSS -->
<style>
    .custom-modal-scrollbar::-webkit-scrollbar { width: 8px; }
    .custom-modal-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-modal-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 20px; }
    .dark .custom-modal-scrollbar::-webkit-scrollbar-thumb { background: #334155; }
    
    #resource-modal-container {
        backface-visibility: hidden;
    }
</style>

<!-- Resource Script -->
<script>
/**
 * Resource Library Database
 * Contains instructional content for various topics across subjects.
 */
const resourceLibrary = {
    // --- MATHEMATICS ---
    'Basic Algebra': {
        icon: 'fa-superscript',
        category: 'Mathematics',
        content: `
            <h3>The Language of Algebra</h3>
            <p>Algebra is like a puzzle where we use letters to represent numbers we don't know yet. It's the foundation for solving complex problems in science, engineering, and daily life.</p>
            <div class="bg-indigo-50 dark:bg-indigo-900/20 p-6 rounded-2xl border-l-4 border-indigo-500">
                <h4 class="text-indigo-600 dark:text-indigo-400 mt-0">Core Vocabulary:</h4>
                <ul class="mb-0">
                    <li><strong>Variable:</strong> A letter (like x or y) representing a number.</li>
                    <li><strong>Coefficient:</strong> The number multiplied by a variable (e.g., in 5x, 5 is the coefficient).</li>
                    <li><strong>Constant:</strong> A fixed number that doesn't change (e.g., +10).</li>
                </ul>
            </div>
            <p>Remember: Whatever you do to one side of an equation, you MUST do to the other side to keep it balanced!</p>
        `
    },
    'Linear Equations': {
        icon: 'fa-slash',
        category: 'Mathematics',
        content: `
            <h3>Understanding Linear Equations</h3>
            <p>A linear equation creates a straight line when graphed. These equations describe constant rates of change.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Slope-Intercept Form</span>
                    <p class="text-xl font-mono text-indigo-500 mt-2">y = mx + b</p>
                </div>
                <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-700">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Standard Form</span>
                    <p class="text-xl font-mono text-indigo-500 mt-2">Ax + By = C</p>
                </div>
            </div>
            <p><strong>Pro Tip:</strong> To find the slope (m), use the "Rise over Run" formula: (y2 - y1) / (x2 - x1).</p>
        `
    },
    'Area and Perimeter': {
        icon: 'fa-shapes',
        category: 'Mathematics',
        content: `
            <h3>Space & Boundaries</h3>
            <p>Understanding the difference between Area and Perimeter is key to solving spatial problems.</p>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left border-b border-slate-200 dark:border-slate-700 py-2">Shape</th>
                        <th class="text-left border-b border-slate-200 dark:border-slate-700 py-2">Area (Inside)</th>
                        <th class="text-left border-b border-slate-200 dark:border-slate-700 py-2">Perimeter (Edge)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 font-bold">Square</td>
                        <td class="py-3 font-mono">s²</td>
                        <td class="py-3 font-mono">4s</td>
                    </tr>
                    <tr>
                        <td class="py-3 font-bold">Rectangle</td>
                        <td class="py-3 font-mono">L × W</td>
                        <td class="py-3 font-mono">2L + 2W</td>
                    </tr>
                    <tr>
                        <td class="py-3 font-bold">Circle</td>
                        <td class="py-3 font-mono">πr²</td>
                        <td class="py-3 font-mono">2πr</td>
                    </tr>
                </tbody>
            </table>
        `
    },

    // --- ENGLISH / ELA ---
    'Active Reading': {
        icon: 'fa-book-reader',
        category: 'ELA',
        content: `
            <h3>Mastering Active Reading</h3>
            <p>Passive reading is just looking at words. Active reading is interacting with the text to extract meaning.</p>
            <ul class="space-y-4">
                <li class="flex gap-4">
                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center text-emerald-600 shrink-0">1</div>
                    <p class="m-0"><strong>Annotate:</strong> Mark key passages, circle unknown words, and write questions in the margins.</p>
                </li>
                <li class="flex gap-4">
                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center text-emerald-600 shrink-0">2</div>
                    <p class="m-0"><strong>Predict:</strong> Based on the title or first paragraph, what do you think will happen next?</p>
                </li>
                <li class="flex gap-4">
                    <div class="w-8 h-8 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center text-emerald-600 shrink-0">3</div>
                    <p class="m-0"><strong>Summarize:</strong> Try to explain what you just read to someone else in 3 sentences or less.</p>
                </li>
            </ul>
        `
    },

    // --- SCIENCE ---
    'Scientific Method': {
        icon: 'fa-vials',
        category: 'Science',
        content: `
            <h3>The Path of Discovery</h3>
            <p>Scientists use a specific set of steps to investigate the world and ensure their results are accurate.</p>
            <ol class="space-y-2">
                <li><strong>Observation:</strong> Notice something interesting.</li>
                <li><strong>Question:</strong> Ask why or how it happens.</li>
                <li><strong>Hypothesis:</strong> Make an educated guess.</li>
                <li><strong>Experiment:</strong> Test your guess under controlled conditions.</li>
                <li><strong>Analysis:</strong> Look at your data.</li>
                <li><strong>Conclusion:</strong> Decide if your guess was right.</li>
            </ol>
            <p class="italic text-sm text-slate-400">"Science is a way of thinking much more than it is a body of knowledge." — Carl Sagan</p>
        `
    }
};

/**
 * Opens the resource modal with dynamic content based on the topic.
 * @param {string} topic - The key for the resourceLibrary object.
 */
function openDynamicModal(topic) {
    const modal = document.getElementById('resource-modal');
    const container = document.getElementById('resource-modal-container');
    const title = document.getElementById('resource-title');
    const category = document.getElementById('resource-category');
    const icon = document.getElementById('resource-icon-box').querySelector('i');
    const content = document.getElementById('resource-content');
    
    // Find resource or use fallback
    const resource = resourceLibrary[topic] || {
        icon: 'fa-info-circle',
        category: 'Information',
        content: `<h3>${topic}</h3><p>We are still working on a detailed guide for this specific topic. Please check back later or consult your teacher for more information!</p>`
    };
    
    // Update UI
    title.innerText = topic;
    category.innerText = resource.category;
    icon.className = `fas ${resource.icon}`;
    content.innerHTML = resource.content;
    
    // Show Modal with Animation
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    // Trigger Reflow for Animation
    void container.offsetWidth;
    
    container.classList.remove('scale-95', 'opacity-0');
    container.classList.add('scale-100', 'opacity-100');
    
    document.body.style.overflow = 'hidden';
}

/**
 * Closes the dynamic resource modal.
 */
function closeDynamicModal() {
    const modal = document.getElementById('resource-modal');
    const container = document.getElementById('resource-modal-container');
    
    container.classList.add('scale-95', 'opacity-0');
    container.classList.remove('scale-100', 'opacity-100');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }, 300);
    
    // Stop speaking if active
    if (window.speechSynthesis) window.speechSynthesis.cancel();
}

/**
 * Text-to-Speech Integration
 */
document.getElementById('speak-btn').onclick = function() {
    const contentText = document.getElementById('resource-content').innerText;
    const btn = this;
    
    if (!('speechSynthesis' in window)) {
        alert('Speech synthesis is not supported in your browser.');
        return;
    }

    if (window.speechSynthesis.speaking) {
        window.speechSynthesis.cancel();
        btn.querySelector('span').innerText = 'Read Aloud';
        btn.classList.remove('bg-indigo-600', 'text-white');
        return;
    }

    const utterance = new SpeechSynthesisUtterance(contentText);
    utterance.rate = 0.95;
    utterance.pitch = 1;
    
    utterance.onstart = () => {
        btn.querySelector('span').innerText = 'Stop Reading';
        btn.classList.add('bg-indigo-600', 'text-white');
    };
    
    utterance.onend = () => {
        btn.querySelector('span').innerText = 'Read Aloud';
        btn.classList.remove('bg-indigo-600', 'text-white');
    };

    window.speechSynthesis.speak(utterance);
};
</script>
