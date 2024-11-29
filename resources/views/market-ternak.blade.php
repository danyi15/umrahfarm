<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/market-ternak.css') }}">
    <script>
        // JavaScript for the search functionality
        function searchMarket() {
            const searchValue = document.querySelector("#search-input").value.toLowerCase();
            const items = document.querySelectorAll(".market-item");

            items.forEach(item => {
                const name = item.querySelector(".market-item-name").textContent.toLowerCase();
                if (name.includes(searchValue)) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });
        }

        // JavaScript for the filter functionality (basic example)
        function filterCategory() {
            const category = document.querySelector("#category-filter").value;
            const items = document.querySelectorAll(".market-item");

            items.forEach(item => {
                const itemCategory = item.dataset.category;
                if (category === "" || itemCategory === category) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });
        }
    </script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Market Section -->
    <div class="container mx-auto mt-8">
        <div class="flex justify-between mb-4">
            <!-- Search Bar -->
            <input
                id="search-input"
                class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded w-1/3"
                placeholder="Search..."
                type="text"
                oninput="searchMarket()"
            />

            <!-- Filter Button -->
            <div class="relative">
                <select
                    id="category-filter"
                    class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded"
                    onchange="filterCategory()"
                >
                    <option value="">Filter berdasarkan kategori</option>
                    <option value="sapi">Sapi</option>
                    <option value="kambing">Kambing</option>
                    <option value="ayam">Ayam</option>
                </select>
                <i class="fas fa-filter absolute top-2 right-3 text-gray-500"></i>
            </div>
        </div>

        <!-- Market Items -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            <div class="market-item bg-white rounded-lg shadow-md overflow-hidden" data-category="sapi">
                <img
                    src="https://storage.googleapis.com/a1aa/image/4dJy4GdDG6ZqJVsh4rlkCumWV6IDqslgb0BcUFyO5KZ5cc9E.jpg"
                    alt="Image of MooMoo Betina"
                    class="w-full h-48 object-cover"
                />
                <div class="p-4 bg-green-100">
                    <h3 class="market-item-name text-lg font-bold">Sapi</h3>
                    <p class="text-gray-600">Betina</p>
                    <p class="text-green-700 font-bold">Rp. 20.000.000</p>
                    <a
                        href="{{ url('detail-market-ternak') }}"
                        class="mt-2 text-gray-600 inline-block hover:underline">
                        ≡ Detail</a>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="market-item bg-white rounded-lg shadow-md overflow-hidden" data-category="kambing">
                <img
                    src="https://storage.googleapis.com/a1aa/image/4dJy4GdDG6ZqJVsh4rlkCumWV6IDqslgb0BcUFyO5KZ5cc9E.jpg"
                    alt="Image of Dodot Jantan"
                    class="w-full h-48 object-cover"
                />
                <div class="p-4 bg-green-100">
                    <h3 class="market-item-name text-lg font-bold">Kambing</h3>
                    <p class="text-gray-600">Jantan</p>
                    <p class="text-green-700 font-bold">Rp. 3.500.000</p>
                    <a
                        href="{{ url('detail-market-ternak') }}"
                        class="mt-2 text-gray-600 inline-block hover:underline">
                        ≡ Detail</a>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="market-item bg-white rounded-lg shadow-md overflow-hidden" data-category="ayam">
                <img
                    src="https://storage.googleapis.com/a1aa/image/4dJy4GdDG6ZqJVsh4rlkCumWV6IDqslgb0BcUFyO5KZ5cc9E.jpg"
                    alt="Image of Ayam Jantan"
                    class="w-full h-48 object-cover"
                />
                <div class="p-4 bg-green-100">
                    <h3 class="market-item-name text-lg font-bold">Ayam</h3>
                    <p class="text-gray-600">Jantan</p>
                    <p class="text-green-700 font-bold">Rp. 1.500.000</p>
                    <a
                        href="{{ url('detail-market-ternak') }}"
                        class="mt-2 text-gray-600 inline-block hover:underline">
                        ≡ Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
