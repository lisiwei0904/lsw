<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="file"] {
        margin-bottom: 10px;
    }
 
    .back-btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    .file-info {
        margin-top: 10px;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .file-info img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }
</style>

<?php if(!empty($id)): ?>
    <div class="file-info">
        <a href="<?php echo e(url('/storage/' . $path)); ?>" style="color: #333; font-weight: bold;">
            <?php echo e($id); ?> <?php echo e($originalName); ?>

        </a>
        <br>
        <?php if(substr($mimeType, 0, 5) == 'image'): ?>
            <img src="<?php echo e(url('/storage/' . $path)); ?>">
        <?php endif; ?>
    </div>
<?php endif; ?>

<a href="<?php echo e(url('/')); ?>" class="back-btn">Back to see posts</a>

<?php if(isset($id)): ?>
    <div class="file-info">
        <p><strong>view picture information here</strong></p>
        <?php echo e($id); ?><br>
        <?php echo e($path); ?><br>
        <?php echo e($originalName); ?><br>
        <?php echo e($mimeType); ?>

    </div>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/uploads/resources/views/uploads/create.blade.php ENDPATH**/ ?>