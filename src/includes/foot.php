
<div class="page-loader show">
  <div class="loader"></div>
</div>


<!-- tailwindcss js -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<!-- feather-icon -->
<script>
    feather.replace();
</script>


<script>
    // Get URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('tab') || '1';

    // Hide all tab contents and remove active classes from all tab links
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('border-blue-500', 'text-blue-500'));

    // Show the active tab content and add active class to the corresponding tab link
    document.querySelector(`#tab${tab}`).classList.remove('hidden');
    document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).classList.add('border-blue-500', 'text-blue-500');
</script>
<script src="./scripts/index.js"></script>
</body>

</html>