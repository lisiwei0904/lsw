
<article>
    <h1>
        <a href="/index/<?php echo e($post->slug); ?>">
           <?php echo $post->title; ?> 
         </a>
        
        </h1>
        
        <p>
            By <a href="/authors/<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
         </p>
</article>

<a href="/">Go Back</a><?php /**PATH /var/www/uploads/resources/views/show.blade.php ENDPATH**/ ?>