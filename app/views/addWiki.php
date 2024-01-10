<?php
ob_start();
?>

<body style="overflow: hidden visible;">
    <div id="page-container" class="flex items-center justify-center h-screen">

        <div class="bg-white w-full md:w-1/2 p-8 shadow-lg rounded-md">
            <h1 class="text-3xl font-bold mb-6">Add New Article</h1>
            <form action="index.php?action=addWiki" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="image" class="text-sm font-semibold text-gray-600">Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="title" class="text-sm font-semibold text-gray-600">Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="content" class="text-sm font-semibold text-gray-600">Content</label>
                    <textarea id="content" name="content"
                    class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500"
                    rows="5" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="category" class="text-sm font-semibold text-gray-600">category</label>
                    <select id="category" name="category" x-model="newCat"
                            class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500" required>
                            <?php foreach ($catsDATA as $cat){?>
                            <option value="<?= $cat->getIdCat() ?>"><?= $cat->getCatName() ?></option>
                            <?php }?>
                    </select>
                </div>
                <!-- Tags Section -->
                <div>
                    <div class="mb-4">
                        <label for="tags" class="text-sm font-semibold text-gray-600">Select Tags</label>
                            <?php foreach ($tagsDATA as $tag){?>
                            <input type="checkbox" name="tags[]" value="<?= $tag->getIdTag() ?>"><?= $tag->getTagName() ?>
                            <?php }?>
                    </div>
                </div>
                <!-- End Tags Section -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>

<?php
$content = ob_get_clean();

include_once 'layout.php';
?>