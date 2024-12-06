
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="px-6 py-8" id="6">
        <main class="max-w-lg mx-auto mt-10 bg-black bg-opacity-80 border border-purple-500 p-6 rounded-xl shadow-xl">
            <h1 class="text-center font-bold text-2xl text-neon-pink">Join Us</h1>

            <form method="POST" action="/register" class="mt-10">
                <?php echo csrf_field(); ?>
                <!-- Name -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="name">
                        Name
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="text"
                        name="name"
                        id="name"
                        value="<?php echo e(old('name')); ?>"
                        required
                    >
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-neon-red text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Username -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="username">
                        Username
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="text"
                        name="username"
                        id="username"
                        value="<?php echo e(old('username')); ?>"
                        required
                    >
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-neon-red text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="email">
                        Email
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="email"
                        name="email"
                        id="email"
                        value="<?php echo e(old('email')); ?>"
                        required
                    >
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-neon-red text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="password">
                        Password
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-neon-red text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button 
                        type="submit"
                        class="bg-neon-pink text-white py-2 px-4 rounded-md w-full uppercase font-bold hover:bg-neon-blue transition duration-300"
                    >
                        Submit
                    </button>
                </div>

                <!-- Validation Errors -->
                <?php if($errors->any()): ?>
                    <ul class="bg-black bg-opacity-70 text-neon-red p-4 rounded-md">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="text-xs"><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </form>
        </main>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /opt/lsw/resources/views/register/create.blade.php ENDPATH**/ ?>