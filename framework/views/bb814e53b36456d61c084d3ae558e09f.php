<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> 
    <link rel="stylesheet" href="<?php echo e(asset('css/search.css')); ?>">

    <h1 class="search-title">Results</h1>

    <?php if($posts->isEmpty()): ?>
        <p class="no-results">No matching results found.</p>
    <?php else: ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $query = request('query', '');
                $titleSimilarity = similar_text(mb_strtolower($query), mb_strtolower(substr($post->title, 0, 5)));
            ?>

            <?php if($titleSimilarity >= 3): ?>
                <article class="search-result-item">
                    <h2>
                        <a href="/posts/<?php echo e($post->slug); ?>" class="post-title">
                            <?php echo $post->title; ?>

                            <?php if(!empty($post->image_url)): ?>
                                <strong class="neon-text">with file</strong>
                            <?php endif; ?>
                        </a>
                    </h2>
                    <p class="post-meta">
                        By <a href="/authors/<?php echo e($post->author->id); ?>" class="author-name"><?php echo e($post->author->name); ?></a>
                        in <a href="/?categories/<?php echo e($post->category->slug); ?>" class="category-name"><?php echo e($post->category->name); ?></a>
                    </p>
                    <div class="post-body">
                        <?php echo $post->body; ?>

                        <strong><?php echo $post->excerpt; ?></strong>
                    </div>
                </article>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
 <?php /**PATH /opt/lsw/resources/views/search/index.blade.php ENDPATH**/ ?>