<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-xl shadow p-6">

<h1 class="text-3xl font-bold mb-4">
    <?php echo e($post->title); ?>

</h1>

<p class="text-sm text-gray-500 mb-4">
    <?php echo e($post->created_at->format('d M Y, h:i A')); ?>

    • <?php echo e($post->category->name); ?>

</p>

<?php if($post->image): ?>

<img src="<?php echo e(asset('storage/'.$post->image)); ?>"
     class="w-full max-h-96 object-cover rounded mb-6">

<?php endif; ?>

<p class="text-gray-700 leading-relaxed mb-6">
    <?php echo e($post->content); ?>

</p>

<div class="flex gap-4">

    <button class="like-btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
            data-id="<?php echo e($post->slug); ?>">

    👍 Like
    (<span class="like-count"><?php echo e($post->likes); ?></span>)

    </button>

    <button class="dislike-btn bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
            data-id="<?php echo e($post->slug); ?>">

    👎 Dislike
    (<span class="dislike-count"><?php echo e($post->dislikes); ?></span>)

    </button>

</div>

<div class="mt-6 flex gap-4">

<a href="<?php echo e(route('posts.edit', $post)); ?>"
   class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">

Edit

</a>

<form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST">

<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>

<button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
onclick="return confirm('Delete this post?')">

Delete

</button>

</form>

</div>
<a href="<?php echo e(route('posts.index')); ?>"
   class="inline-block mt-6 text-blue-500 hover:underline">

← Back to Posts

</a>

</div>



<script>

document.addEventListener('DOMContentLoaded', function () {

    let likeBtn = document.querySelector('.like-btn');
    let dislikeBtn = document.querySelector('.dislike-btn');

    if (likeBtn) {

        likeBtn.addEventListener('click', function () {

            let postId = this.dataset.id;

            fetch(`/posts/${postId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {

                document.querySelector('.like-count').innerText = data.likes;
                document.querySelector('.dislike-count').innerText = data.dislikes;

            });

        });

    }

    if (dislikeBtn) {

        dislikeBtn.addEventListener('click', function () {

            let postId = this.dataset.id;

            fetch(`/posts/${postId}/dislike`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {

                document.querySelector('.like-count').innerText = data.likes;
                document.querySelector('.dislike-count').innerText = data.dislikes;

            });

        });

    }

});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\naaz\myBlog\blog-app\resources\views/posts/show.blade.php ENDPATH**/ ?>