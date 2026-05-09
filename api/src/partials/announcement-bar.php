    <!-- Announcement Bar -->
    <div id="announcement-bar" class="hidden bg-aurora-glass text-white text-center py-2.5 px-12 sm:px-16 relative z-50 shadow-2xl border-b border-white/10" role="region" aria-label="Important Site Announcements">
        <div class="container mx-auto max-w-7xl flex items-center justify-center min-h-[32px]">
            <!-- Navigation Buttons -->
            <button id="prev-announcement" class="absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-white/90 transition-all active:scale-90 group focus:ring-2 focus:ring-white/30 outline-none" aria-label="Previous announcement" type="button">
                <i class="fas fa-chevron-left text-xs group-hover:-translate-x-0.5 transition-transform"></i>
            </button>
            
            <div id="announcement-content-container" class="w-full flex justify-center items-center overflow-hidden">
                <p id="announcement-content" class="text-[11px] sm:text-[13px] font-bold tracking-tight text-white/95 w-full mx-auto max-w-4xl whitespace-normal drop-shadow-sm leading-tight px-1">
                    <!-- Content will be injected by JS -->
                </p>
            </div>

            <div class="absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 flex items-center gap-2 sm:gap-4">
                <button id="next-announcement" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-white/90 transition-all active:scale-90 group focus:ring-2 focus:ring-white/30 outline-none" aria-label="Next announcement" type="button">
                    <i class="fas fa-chevron-right text-xs group-hover:translate-x-0.5 transition-transform"></i>
                </button>
                <div class="w-px h-4 bg-white/20 hidden sm:block"></div>
                <button id="close-announcement" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-white/90 transition-all active:scale-95 hover:rotate-90 focus:ring-2 focus:ring-white/20 outline-none" aria-label="Close announcement" type="button">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>
        </div>
        <!-- Progress Bar -->
        <div class="absolute bottom-0 left-0 w-full h-[2px] bg-white/5 overflow-hidden">
            <div id="announcement-progress" class="h-full bg-white/30 w-0 transition-none"></div>
        </div>
    </div>

    <script src="/assets/js/announcements.js"></script>
