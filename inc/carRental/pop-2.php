<!-- ===============================

     MOBILE POPUP (appears on mobile only)

================================= -->

<!-- Overlay (mobile only) -->
<div id="popup-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 sm:hidden"></div>

<!-- Modal (mobile only) -->
<div id="popup"

    class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full bg-white rounded-md shadow-lg p-2 pt-8 font-sans hidden z-50 sm:hidden">

    <button id="close-btn" aria-label="Close"

        class="absolute top-2 -mt-4 right-3 text-black text-2xl font-bold hover:text-gray-700">×</button>

    <a href="tel:(888) 958-1310" class="block">

        <!-- Top Header -->
        <div class="flex items-center justify-between mb-2">
            <div class="flex items-center space-x-1">
                <img src="./assets/img/bold45.png"

                    alt="Cars N Rental Logo" class="h-12 w-24" />
            </div>

            <div class="flex items-center space-x-1 border border-gray-400 rounded px-2 py-0.5 text-xs">
                <span class="font-bold text-xl">(888) 958-1310</span>
            </div>
        </div>

        <!-- Title -->
        <div class="text-4xl mt-2 text-[#243574] text-center pt-10 rounded -mb-1 font-bold">

            Car Rental's - Contact Us
        </div>

        <div class="text-2xl text-[#243574] text-center py-1 rounded mb-3 font-bold">

            24/7 Reservations & Support
        </div>

        <!-- Buttons -->
        <div class="grid grid-cols-2 mt-8 gap-2 mb-5">
            <button class="bg-[#FFCC00] text-black rounded-full py-6 px-2 text-2xl font-bold">New Booking</button>
            <button class="bg-[#FFCC00] text-black rounded-full py-6 px-2 text-2xl font-bold">Changes</button>
            <button class="bg-[#FFCC00] text-black rounded-full py-6 px-2 text-2xl font-bold">Cancellation</button>
            <button class="bg-[#FFCC00] text-black rounded-full py-6 px-2 text-2xl font-bold">Customer Service</button>
        </div>

        <!-- Airplane -->
        <div class="text-center -mt-28 mb-4">
            <img src="./assets/img/popup car 1.png" alt="Airplane Icon" class="mx-auto w-[320px] h-[240px] -mb-12" />
        </div>

        <!-- Call Section -->
        <div class="text-center">
            <img src="./assets/img/customer service.png" alt="Customer service" class="mx-auto rounded-full w-44 mb-2" />
            <p class="font-semibold mb-3 text-2xl">No Hold - Call Answered in 5 Sec</p>

            <button

                class="bg-[#FFCC00] text-black px-6 py-2 rounded-full flex items-center justify-center mx-auto mb-3 text-3xl font-bold">
                <i class="fa fa-phone mr-2"></i> (888) 958-1310
            </button>

            <div class="text-2xl font-bold text-gray-500">Click To Call!</div>
        </div>
        <div class="text-2xl mt-2 text-[#243574] text-center pt-10 rounded -mb-1 font-bold">

            For Unpublished Deals, Call Now
        </div>
    </a>
</div>

<!-- ===============================

     SCRIPT SECTION

================================= -->
<script>
    function isMobile() {

        return window.innerWidth <= 640; // Tailwind sm breakpoint

    }

    setTimeout(() => {

        if (isMobile()) {

            document.getElementById('popup-overlay').classList.remove('hidden');

            document.getElementById('popup').classList.remove('hidden');

        }

    }, 3000);

    document.getElementById('close-btn').addEventListener('click', () => {

        document.getElementById('popup-overlay').classList.add('hidden');

        document.getElementById('popup').classList.add('hidden');

    });

    document.getElementById('popup-overlay').addEventListener('click', () => {

        document.getElementById('popup-overlay').classList.add('hidden');

        document.getElementById('popup').classList.add('hidden');

    });

    window.addEventListener('resize', () => {

        if (!isMobile()) {

            document.getElementById('popup-overlay').classList.add('hidden');

            document.getElementById('popup').classList.add('hidden');

        }

    });
</script>