<header class="sticky top-0 z-50 bg-white shadow-md">
    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
        <div class="container">
            <div class="flex justify-between items-center py-3">
                <!-- Left Side - Date, Time, Weather -->
                <div class="flex items-center space-x-6 text-sm text-gray-700">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-calendar-alt text-red-600"></i>
                        <span class="font-medium">{{ $date }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-clock text-red-600"></i>
                        <span class="font-medium" id="current-time">{{ now()->format('h:i A') }}</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-red-600"></i>
                        <span class="font-medium">काठमाडौं</span>
                    </div>
                    <div class="hidden lg:flex items-center space-x-2">
                        <i class="fas fa-thermometer-half text-red-600"></i>
                        <span class="font-medium">२५°C</span>
                    </div>
                </div>

                <!-- Center - Breaking News Ticker -->
                <div class="hidden xl:flex items-center flex-1 max-w-2xl mx-8">
                    <div class="bg-red-600 text-white px-4 py-1 rounded-full text-xs font-bold mr-3">
                        <i class="fas fa-broadcast-tower mr-1"></i>ताजा
                    </div>
                    <div class="overflow-hidden">
                        <div class="animate-scroll whitespace-nowrap">
                            <span class="text-sm text-gray-700 font-medium">
                                ताजा समाचार: नेपालमा नयाँ नीति लागू, सरकारले जनतालाई सहयोग गर्ने योजना बनाएको छ
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Social Media & Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Social Media Links -->
                    <div class="flex items-center space-x-3">
                        <a href="#" class="group p-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-all duration-200 transform hover:scale-110">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="group p-2 bg-blue-400 text-white rounded-full hover:bg-blue-500 transition-all duration-200 transform hover:scale-110">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="group p-2 bg-red-600 text-white rounded-full hover:bg-red-700 transition-all duration-200 transform hover:scale-110">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                        <a href="#" class="group p-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-all duration-200 transform hover:scale-110">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                    </div>

                    <!-- Language Toggle -->
                    <div class="hidden md:flex items-center space-x-2 border-l border-gray-300 pl-4">
                        <button class="text-sm font-medium text-red-600 hover:text-red-700 transition-colors duration-200">
                            नेपाली
                        </button>
                        <span class="text-gray-400">|</span>
                        <button class="text-sm text-gray-600 hover:text-gray-800 transition-colors duration-200">
                            English
                        </button>
                    </div>

                    <!-- Contact Info -->
                    <div class="hidden lg:flex items-center space-x-2 text-xs text-gray-600 border-l border-gray-300 pl-4">
                        <i class="fas fa-phone text-red-600"></i>
                        <span>+977-9827008295</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="container py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img class="h-12 md:h-16" src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
            </div>
            <div class="hidden md:block text-right">
                <h1 class="text-xl md:text-2xl font-bold text-gray-800">{{ $company->name }}</h1>
                <p class="text-sm text-gray-600">ताजा समाचार र विश्लेषण</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-red-600 to-red-700 text-white">
        <div class="container">
            <div class="flex justify-between items-center">
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" 
                       class="py-4 px-2 border-b-2 border-transparent hover:border-white transition-colors duration-200 font-medium">
                        <i class="fas fa-home mr-2"></i>गृहपृष्ठ
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('category', $category->slug) }}" 
                           class="py-4 px-2 border-b-2 border-transparent hover:border-white transition-colors duration-200 font-medium">
                            {{ $category->title }}
                        </a>
                    @endforeach
                </div>

                <!-- Search Bar -->
                <div class="hidden md:flex items-center flex-1 max-w-md mx-8">
                    <form action="{{ route('search') }}" method="get" class="w-full">
                        <div class="relative">
                            <input type="text" 
                                   name="q" 
                                   placeholder="समाचार खोज्नुहोस्..." 
                                   class="w-full px-4 py-2 pl-10 pr-12 text-gray-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50"
                                   value="{{ request('q') }}">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <button type="submit" 
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-red-600 hover:text-red-700">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button type="button" 
                            data-drawer-target="drawer-example" 
                            data-drawer-show="drawer-example"
                            aria-controls="drawer-example"
                            class="p-2 text-white hover:bg-red-700 rounded-lg transition-colors duration-200">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Drawer -->
<div id="drawer-example"
    class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 shadow-xl"
    tabindex="-1" aria-labelledby="drawer-label">
    
    <div class="flex items-center justify-between mb-6">
        <h5 class="text-xl font-bold text-gray-800">मेनु</h5>
        <button type="button" 
                data-drawer-hide="drawer-example" 
                aria-controls="drawer-example"
                class="text-gray-400 hover:text-gray-600 transition-colors duration-200">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>

    <!-- Mobile Search -->
    <div class="mb-6">
        <form action="{{ route('search') }}" method="get">
            <div class="relative">
                <input type="text" 
                       name="q" 
                       placeholder="समाचार खोज्नुहोस्..." 
                       class="w-full px-4 py-3 pl-10 pr-12 text-gray-800 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                       value="{{ request('q') }}">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <button type="submit" 
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-red-600 hover:text-red-700">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Mobile Navigation -->
    <nav class="space-y-2">
        <a href="{{ route('home') }}" 
           class="flex items-center p-3 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200">
            <i class="fas fa-home mr-3 w-5"></i>
            गृहपृष्ठ
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('category', $category->slug) }}" 
               class="flex items-center p-3 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition-colors duration-200">
                <i class="fas fa-folder mr-3 w-5"></i>
                {{ $category->title }}
            </a>
        @endforeach
    </nav>

    <!-- Mobile Social Links -->
    <div class="mt-8 pt-6 border-t border-gray-200">
        <h6 class="text-sm font-semibold text-gray-600 mb-3">सामाजिक संजाल</h6>
        <div class="flex space-x-4">
            <a href="#" class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="p-2 bg-blue-400 text-white rounded-lg hover:bg-blue-500 transition-colors duration-200">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="p-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-200">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>

<!-- Custom CSS for scrolling animation -->
<style>
@keyframes scroll {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

.animate-scroll {
    animation: scroll 20s linear infinite;
}

.animate-scroll:hover {
    animation-play-state: paused;
}
</style>

<!-- JavaScript for real-time clock -->
<script>
function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('en-US', { 
        hour: '2-digit', 
        minute: '2-digit',
        hour12: true 
    });
    document.getElementById('current-time').textContent = timeString;
}

// Update time every second
setInterval(updateTime, 1000);
updateTime(); // Initial call
</script>
