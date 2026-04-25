<?php $__env->startSection('content'); ?>

<h1 class="text-3xl font-bold mb-6">
    Latest Posts
</h1>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
 <?php if($post->image): ?>
    <img src="<?php echo e(asset('storage/'.$post->image)); ?>"
             class="w-full h-48 object-cover rounded-t-xl">
 <?php endif; ?>
<div class="p-4">
    <h2 class="text-xl font-semibold mb-2">
        <?php echo e($post->title); ?>

    </h2>
    <p class="text-sm text-gray-500 mb-2">
        <?php echo e($post->created_at->format('d M Y')); ?>

            • <?php echo e($post->category->name); ?>

    </p>

    <p class="text-sm text-gray-500 mb-2">

        <?php echo e($post->created_at->format('d M Y')); ?>


        • <?php echo e($post->category->name); ?>


        • 👍 <?php echo e($post->likes); ?>


        • 👎 <?php echo e($post->dislikes); ?>


    </p>


    <p class="text-gray-700 mb-4">
        <?php echo e(Str::limit($post->content, 100)); ?>

    </p>
   <a href="<?php echo e(route('posts.show', $post)); ?>"
           class="text-blue-500 font-medium hover:underline">
            Read More →
    </a>

    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="mt-6">
    <?php echo e($posts->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\naaz\myBlog\blog-app\resources\views/posts/index.blade.php ENDPATH**/ ?>