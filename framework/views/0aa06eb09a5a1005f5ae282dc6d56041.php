<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

   <body>
     
         <form action="/search" method="get" style="text-align: center; margin-bottom: 30px;">
            <input type="text" name="query" placeholder="Plug in and find the signal...">
            <button type="submit">hack</button>
         </form>
   
      
      <?php foreach ($posts as $post): ?>
         <article>
            <h1>
               <a href="/posts/<?php echo e($post->slug); ?>">
                  <?php echo $post->title; ?>   
                  <?php if(!empty($post->image_url)): ?>
                     <strong style="color: #ff00ff;">with file</strong>
                  <?php endif; ?>
               </a>
            </h1>
            <p>
               By <a href="/authors/<?php echo e($post->author->id); ?>"><?php echo e($post->author->name); ?></a>
               in <a href="/?categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
            </p>
            <div>
               <?= $post->body; ?><br>
               <strong style="color: #ff00ff;"><?= $post->excerpt; ?></strong>
            </div>
         </article>
      <?php endforeach; ?>
   </body>
   <style>
   /* General Body Styling */
body {
    font-family: 'Rajdhani', sans-serif;
    background: #0e0e0e;
    color: #dcdcdc;
    margin: 0;
    padding: 20px;
    background-image: linear-gradient(45deg, #4e4e4e, #1c1c1c);
    background-size: cover;
}

/* Form Styling */
form {
    text-align: center;
    margin-bottom: 30px;
}

form input[type="text"] {
    width: 60%;
    padding: 10px 15px;
    font-size: 1rem;
    border: 2px solid #00ffff;
    border-radius: 8px;
    background: rgba(20, 20, 20, 0.8);
    color: #fff;
    outline: none;
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
    transition: box-shadow 0.3s ease;
}

form input[type="text"]:focus {
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.8);
}

form button {
    padding: 10px 20px;
    font-size: 1rem;
    background: linear-gradient(90deg, #ff00ff, #00ffff);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-transform: uppercase;
    transition: transform 0.3s ease, background 0.3s ease;
}

form button:hover {
    background: linear-gradient(90deg, #00ffff, #ff00ff);
    transform: scale(1.1);
}

article {
    margin-bottom: 30px;
    padding: 20px;
    background: rgba(20, 20, 20, 0.9);
    border: 2px solid #00ffff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 255, 255, 0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

article:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 30px rgba(0, 255, 255, 0.8);
}


article h1 {
    font-size: 1.5rem;
    color: #00ffff;
    text-shadow: 0px 0px 10px rgba(0, 255, 255, 0.7), 0px 0px 30px rgba(255, 0, 255, 0.6);
}

article h1 a {
    color: #00ffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

article h1 a:hover {
    color: #ff00ff;
    text-shadow: 0px 0px 20px rgba(255, 0, 255, 1), 0px 0px 40px rgba(0, 255, 255, 1);
}


article h1 strong {
    color: #ff00ff;
    font-size: 1rem;
    text-shadow: 0px 0px 10px rgba(255, 0, 255, 1), 0px 0px 20px rgba(255, 0, 255, 0.8);
}


article p {
    color: #777;
    font-size: 0.9rem;
    margin-top: 10px;
    text-shadow: 0px 0px 10px rgba(0, 255, 255, 0.5);
}

article p a {
    color: #00ffff;
    text-decoration: none;
}

article p a:hover {
    color: #ff00ff;
}

/* Body Content */
article div {
    color: #dcdcdc;
    font-size: 1rem;
    line-height: 1.6;
    margin-top: 15px;
}

/* Highlight for Excerpt */
article div strong {
    color: #ff00ff;
    font-weight: bold;
    text-shadow: 0px 0px 10px rgba(255, 0, 255, 1), 0px 0px 20px rgba(255, 0, 255, 0.8);
}

   </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /opt/lsw/resources/views/posts/index.blade.php ENDPATH**/ ?>