<div class="fixed bottom-6 right-6 z-[60] flex flex-col gap-3 items-end print:hidden">
    <!-- Scroll To Top (Outside FAB) -->
    <button id="scroll-to-top"
        class="w-12 h-12 bg-white dark:bg-slate-800 backdrop-blur border border-gray-200 dark:border-gray-700 text-primary rounded-full shadow-lg hover:scale-110 focus:outline-none transition-all duration-300 transform translate-y-24 opacity-0 flex items-center justify-center"
        type="button"><i class="fas fa-arrow-up"></i></button>

    <!-- Floating Action Button Container -->
    <div id="fab-container" class="relative flex flex-col items-end gap-3">
        <!-- Collapsible Tools Menu -->
        <div id="fab-menu" class="flex flex-col gap-3 transition-all duration-300 origin-bottom transform scale-0 opacity-0 pointer-events-none">
            <button onclick="window.print()" class="w-12 h-12 bg-gray-600 text-white rounded-full shadow-lg hover:scale-110 flex items-center justify-center transition-all flex-shrink-0" title="Print Page" type="button"><i class="fas fa-print"></i></button>
            <button id="citation-toggle" class="w-12 h-12 bg-pink-500 text-white rounded-full shadow-lg hover:scale-110 flex items-center justify-center transition-all flex-shrink-0" title="Citation" type="button"><i class="fas fa-quote-right"></i></button>
            <button id="timer-toggle" class="w-12 h-12 bg-green-600 text-white rounded-full shadow-lg hover:scale-110 flex items-center justify-center transition-all flex-shrink-0" title="Timer" type="button"><i class="fas fa-stopwatch"></i></button>
            <button id="scratchpad-toggle" class="w-12 h-12 bg-indigo-600 text-white rounded-full shadow-lg hover:scale-110 flex items-center justify-center transition-all flex-shrink-0" title="Scratchpad" type="button"><i class="fas fa-pen"></i></button>
            <button id="a11y-toggle-button" class="w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all transform hover:scale-110 flex items-center justify-center flex-shrink-0" title="Accessibility" type="button"><i class="fas fa-universal-access"></i></button>
        </div>

        <!-- Main FAB Toggle -->
        <button id="fab-main-toggle"
            class="w-14 h-14 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full shadow-2xl hover:scale-105 focus:outline-none transition-all duration-300 flex items-center justify-center z-10"
            type="button" title="Tools">
            <i class="fas fa-plus text-2xl transition-transform duration-300" id="fab-icon"></i>
        </button>
    </div>
</div>


