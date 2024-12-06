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
</script><?php /**PATH /opt/lsw/resources/views/components/form/setting.blade.php ENDPATH**/ ?>