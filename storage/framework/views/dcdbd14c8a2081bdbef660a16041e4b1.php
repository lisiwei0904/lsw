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
      <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounder-xl">
        <h1 class="text-center font-bold text-xl" >Log In!</h1>
     
      <form method="POST" action="/login" class="mt-10">
        <?php echo csrf_field(); ?>
 
       <div>
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
         for="email">
       Email
 
       </label>
 
       <input class="border border-grey-400 p-2 w-full"
       type="email"
       name="email"
       id="email"
       value="<?php echo e(old('email')); ?>"
       required>
 
       <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>
 <div>
       <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
       for="password">
     password
 
     </label>
 
     <input class="border border-grey-400 p-2 w-full"
     type="text"
     name="password"
     id="password"
     required> 
     <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
     <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
   </div>
     <div class="mb-6">
     <button type="submit"
     class="bg-blue-400 text-white rounder py-2 px-4 hover:bg-blue-500  mt-5"
     >
  Log In
   </button>  
    </div>
 
       
           </div>   
           <?php if($errors-> any): ?>
           <ul>
          
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li class="text-red-500 text-xs"><?php echo e($error); ?></li>
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
<?php endif; ?><?php /**PATH /var/www/uploads/resources/views/sessions/create.blade.php ENDPATH**/ ?>