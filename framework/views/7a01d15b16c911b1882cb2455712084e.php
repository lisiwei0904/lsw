<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <link rel="stylesheet" href="<?php echo e(asset('css/postShow.css')); ?>">

  <article>
   <h1>
      <a href="/posts/<?php echo e($post->slug); ?>">
         <?php echo $post->title; ?> 
      </a>
   </h1>
   <p>
      By <a href="/authors/<?php echo e($post->author->id); ?>"><?php echo e($post->author->name); ?></a>
      in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
   </p>
   
   <?php if(!empty($post->image_url)): ?>    
      <a href="<?php echo e(url('/storage/' . $post->image_url)); ?>">
         <img src="<?php echo e(url('/storage/' . $post->image_url)); ?>" alt="Sorry, pictures fly away...">
      </a>
      <br>
     <a href="<?php echo e(route('file.download', ['id' => $post->id])); ?>" class="btn btn-primary download-btn">
        ⬇ Download
    </a>

   <?php endif; ?>
</article>

<section class="comments">
   <h2>Comments</h2>
 
   <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="comment">
      <p><strong><?php echo e($comment->author); ?></strong> said:</p>
      <p><?php echo e($comment->content); ?></p>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   <form action="<?php echo e(route('comments.store', $post->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <textarea name="content" rows="3" placeholder="Input your thoughts into the feed..." required></textarea>
      <button type="submit">Send Transmission</button>
   </form>
</section>

<a href="/" class="back-link">⬅ Back to the Grid</a>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /opt/lsw/resources/views/posts/show.blade.php ENDPATH**/ ?>