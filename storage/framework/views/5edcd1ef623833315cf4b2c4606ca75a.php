
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>

<body>
    <?php foreach ($posts as $post): ?>
       <article>
          <h1>
            <a href="/posts/<?php echo e($post->slug); ?>">
               <?php echo $post->title; ?> 
             </a>
            
            </h1>
            <p>
               By <a href="/authors/<?php echo e($post->author->id); ?>"><?php echo e($post->author->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
            </p>
          <div>
             <?= $post->body; ?><br>
             <?= $post->excerpt; ?>
          </div>
       </article>
    <?php endforeach; ?>
 </body>
<?php /**PATH /var/www/uploads/resources/views/index.blade.php ENDPATH**/ ?>