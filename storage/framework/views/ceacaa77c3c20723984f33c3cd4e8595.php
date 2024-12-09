<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
        <h1 style="color: #3490dc; font-size: 24px; margin-bottom: 10px;">
            <a href="/posts/<?php echo e($post->slug); ?>" style="text-decoration: none; color: #3490dc;">
                <?php echo $post->title; ?> 
            </a>
        </h1>
        <p style="color: #666; font-size: 14px; margin-bottom: 5px;">
            By <a href="/authors/<?php echo e($post->author->id); ?>" style="text-decoration: none; color: #3490dc;"><?php echo e($post->author->name); ?></a>
            in <a href="/categories/<?php echo e($post->category->slug); ?>" style="text-decoration: none; color: #3490dc;"><?php echo e($post->category->name); ?></a>
        </p>
        
        <?php if(!empty($post->image_url) ): ?>    
        <br>
        <a href="<?php echo e(url('/storage/' . $post->image_url)); ?>"> <br><img height="25%" width="25%" src="<?php echo e(url('/storage/' . $post->image_url)); ?>" alt="Sorry, pictures fly away..." style="max-width: 100%; height: auto; margin-bottom: 10px;"><br></a>
    <?php endif; ?>
    
    </article>
    
    <a href="/" style="display: inline-block; margin-top: 10px; color: #3490dc; text-decoration: none; font-size: 16px;">Go Back</a>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/uploads/resources/views/posts/show.blade.php ENDPATH**/ ?>