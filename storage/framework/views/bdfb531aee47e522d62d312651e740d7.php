<?php $__env->startSection('content'); ?>

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-6">
        Edit Post
    </h1>

    <form action="<?php echo e(route('posts.update', $post)); ?>"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <!-- Title -->
        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text"
                   name="title"
                   value="<?php echo e($post->title); ?>"
                   class="w-full border p-2 rounded mt-1"
                   required>
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-medium">Category</label>

            <select name="category_id"
                    class="w-full border p-2 rounded mt-1">

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"
                        <?php echo e($post->category_id == $category->id ? 'selected' : ''); ?>>

                        <?php echo e($category->name); ?>


                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>

        <!-- Content -->
        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content"
                      rows="5"
                      class="w-full border p-2 rounded mt-1"
                      required><?php echo e($post->content); ?></textarea>
        </div>

        <!-- Current Image -->
        <?php if($post->image): ?>
        <div>
            <p class="text-sm mb-2">Current Image:</p>
            <img src="<?php echo e(asset('storage/'.$post->image)); ?>"
                 class="w-40 rounded">
        </div>
        <?php endif; ?>

        <!-- New Image -->
        <div>
            <label class="block text-sm font-medium">Change Image</label>
            <input type="file" name="image"
                   class="w-full border p-2 rounded mt-1">
        </div>

        <!-- Buttons -->
        <div class="flex gap-3">

            <button class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">
                Update Post
            </button>

            <a href="<?php echo e(route('posts.index')); ?>"
               class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                Cancel
            </a>

        </div>

    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\naaz\myBlog\blog-app\resources\views/posts/edit.blade.php ENDPATH**/ ?>