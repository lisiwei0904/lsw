<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['heading']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['heading']); ?>
<?php foreach (array_filter((['heading']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        <?php echo e($heading); ?>

    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <div style="position: relative;" onmouseover="showLinks()" onmouseout="hideLinks()">
                <h4 class="font-semibold mb-4">Links</h4>
            
                <ul id="linksList" style="display: none;">
                    <li>
                        <a href="/admin/posts" class="<?php echo e(request()->is('admin/posts') ? 'text-blue-500' : ''); ?>">All Posts</a>
                    </li>
            
                    <li>
                        <a href="/admin/posts/create" class="<?php echo e(request()->is('admin/posts/create') ? 'text-blue-500' : ''); ?>">New Post</a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="flex-1">
            <div <?php echo e($attributes(['class' => 'border border-gray-200 p-6 rounded-xl'])); ?>>
                <?php echo e($slot); ?>

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
</script><?php /**PATH /var/www/uploads/resources/views/components/form/setting.blade.php ENDPATH**/ ?>