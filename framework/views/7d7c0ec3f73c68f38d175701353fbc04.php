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
  /* General Body Styling */
body {
    font-family: 'Rajdhani', sans-serif;
    background: linear-gradient(135deg, #0e0e0e, #1c1c1c);
    color: #dcdcdc;
    margin: 0;
    padding: 20px;
}

/* File Info Section */
.file-info {
    background: rgba(20, 20, 20, 0.9);
    border: 2px solid #00ffff;
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 5px 15px rgba(0, 255, 255, 0.6);
    color: #dcdcdc;
    font-size: 1rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.file-info:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 30px rgba(0, 255, 255, 0.8);
}

/* File Link */
.file-info a {
    color: #00ffff;
    font-weight: bold;
    text-decoration: none;
    font-size: 1.2rem;
    transition: color 0.3s ease, text-shadow 0.3s ease;
}

.file-info a:hover {
    color: #ff00ff;
    text-shadow: 0px 0px 10px rgba(255, 0, 255, 1), 0px 0px 20px rgba(255, 0, 255, 0.8);
}

/* Image Display */
.file-info img {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
    border: 2px solid #00ffff;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 255, 255, 0.6);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.file-info img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0, 255, 255, 0.8);
}

/* Back Button */
.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: linear-gradient(90deg, #ff00ff, #00ffff);
    color: #fff;
    border: none;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    transition: transform 0.3s ease, background 0.3s ease;
    font-size: 1rem;
    box-shadow: 0 5px 15px rgba(255, 0, 255, 0.5);
}

.back-btn:hover {
    transform: scale(1.1);
    background: linear-gradient(90deg, #00ffff, #ff00ff);
    box-shadow: 0 10px 30px rgba(255, 0, 255, 0.8);
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

<a href="<?php echo e(url('/')); ?>" class="back-btn">Back and view posts</a>

<?php if(isset($id)): ?>
    <div class="file-info">
        <p><strong>view picture details</strong></p>
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
<?php endif; ?><?php /**PATH /opt/lsw/resources/views/uploads/create.blade.php ENDPATH**/ ?>