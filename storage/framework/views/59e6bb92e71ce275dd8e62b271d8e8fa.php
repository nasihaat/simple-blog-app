<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">

        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between">

            <h1 class="text-xl font-bold text-gray-800">
                My Blog
            </h1>

            <a href="<?php echo e(route('posts.create')); ?>"
               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create Post
            </a>

        </div>

    </nav>


    <div class="max-w-6xl mx-auto mt-6 px-4">

        <?php echo $__env->yieldContent('content'); ?>

    </div>

</body>
</html>
<?php /**PATH C:\naaz\myBlog\blog-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>