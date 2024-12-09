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
      input {
         width: 400px;
      }
   </style>
   <body>
      <body>
         <?php if(!empty(Auth::id())): ?>
             <form action="/search" method="get">
                <input type="text" name="query" placeholder="Your search will be recorded">
                <button type="submit">Search</button>
             </form>
         <?php else: ?>
             <input type="text" name="query" placeholder="Please log in to use the search feature">
         <?php endif; ?>
     
      <?php foreach ($posts as $post): ?>
         <article style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
            <h1 style="color: #333; font-size: 24px;">
              <a href="/posts/<?php echo e($post->slug); ?>" style="text-decoration: none; color: #3490dc;">
                 <?php echo $post->title; ?>   
                  <?php if(!empty($post->image_url)): ?>
              <strong>has photo</strong>
                  <?php endif; ?>
               </a>
            </h1>
            <p style="color: #666; font-size: 14px;">
               By <a href="/authors/<?php echo e($post->author->id); ?>" style="text-decoration: none; color: #3490dc;"><?php echo e($post->author->name); ?></a>
               in <a href="/?categories/<?php echo e($post->category->slug); ?>" style="text-decoration: none; color: #3490dc;"><?php echo e($post->category->name); ?></a>
            
            </p>
            <div style="color: #333; font-size: 16px; line-height: 1.6;">
               <?= $post->body; ?><br>
               <strong><?= $post->excerpt; ?></strong>
            </div>
         </article>
      <?php endforeach; ?>
   </body>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/uploads/resources/views/posts/index.blade.php ENDPATH**/ ?>