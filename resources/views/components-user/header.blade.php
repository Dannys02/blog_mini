<header class="sticky top-0 bg-white shadow-md p-4 md:p-6 z-20">
  <div class="flex justify-between items-center">
    <button id="menu-toggle" class="md:hidden text-gray-500 hover:text-indigo-600 focus:outline-none p-2 rounded-lg">
      <i class="fa fa-bars text-xl"></i>
    </button>

    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Dashboard</h1>

    <a href="#" class="flex items-center px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 hidden sm:flex">
      <i class="fa fa-plus-circle mr-2"></i> Tulis Artikel Baru
    </a>
  </div>
</header>

<script>
  const menuToggle = document.getElementById('menu-toggle');
  const sidebar = document.getElementById('sidebar');
  const mainContent = document.querySelector('body');

  menuToggle.addEventListener('click', () => {
  sidebar.classList.toggle('-translate-x-full');
  // Menambahkan/menghapus kelas overflow-hidden pada body saat sidebar terbuka
  mainContent.classList.toggle('overflow-hidden');
  });

  // Menutup sidebar ketika di luar sidebar diklik (hanya di mobile)
  document.addEventListener('click', (event) => {
  const isClickInsideSidebar = sidebar.contains(event.target);
  const isClickOnToggle = menuToggle.contains(event.target);

  if (!isClickInsideSidebar && !isClickOnToggle && window.innerWidth < 768 && !sidebar.classList.contains('-translate-x-full')) {
  sidebar.classList.add('-translate-x-full');
  mainContent.classList.remove('overflow-hidden');
  }
  });

  // Menutup sidebar jika di-resize ke desktop
  window.addEventListener('resize', () => {
  if (window.innerWidth >= 768 && sidebar.classList.contains('-translate-x-full')) {
  sidebar.classList.remove('-translate-x-full');
  mainContent.classList.remove('overflow-hidden');
  }
  });
</script>