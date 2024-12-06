@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">

        <main class="flex-1">
            <div {{ $attributes(['class' => 'border border-gray-200 p-6 rounded-xl']) }}>
                {{ $slot }}
            </div>
        </main>
    </div>
</section>
<script>
    function showLinks() {
        document.getElementById('linksList').style.display = 'block';
    }

    function hideLinks() {
        document.getElementById('linksList').style.display = 'none';
    }
</script>