<!-- Books Section -->
<section class="mt-8">
  <h2 class="text-2xl font-bold mb-4">Popular books</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

  <?php foreach($books as $book): ?>
    <article class="bg-gray-800 rounded-lg overflow-hidden shadow-lg relative">
      <span class="bg-white text-gray-800 px-2 py-1 rounded-md text-sm font-semibold absolute top-2 left-2">
        Drame
      </span>
      <img class="w-full h-48 object-cover" src="<?php echo $book['cover']; ?>" alt="Movie Cover" />
      <div class="p-4">
        <div class="pb-4">
          <span class="bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-2">
            #society
          </span>
          <span class="bg-gray-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
            #bestseller
          </span>
        </div>
        <h3 class="text-xl font-bold"><?php echo \Core\Helpers\trucate ($book['title'], 20); ?></h3>
        <h4 class="text mb-2 text-gray-400"><?php echo $book['firstname']?><?php echo $book['lastname']?></h4>
        <div class="flex items-center mb-2">
          <span class="text-yellow-500 mr-1">
            <i class="fas fa-star"></i>
          </span>
          <span>8.9</span>
        </div>
        <p class="text-gray-400">
        <?php echo \Core\Helpers\trucate($book['resume'], 50);?>
        </p>
        <a href="book.html" class="inline-block mt-4 bg-red-500 hover:bg-red-800 rounded-full px-4 py-2 text-white">
          More details
        </a>
      </div>
    </article>
<?php endforeach; ?>
  
  </div>
</section>


<!-- Authors Section -->
<section class="mt-8">
  <h2 class="text-2xl font-bold mb-4">Popular Authors</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Author 1 -->
<?php foreach($authors as $author): ?>

    <article class="bg-gray-800 rounded-lg overflow-hidden shadow-lg relative">
      <img class="w-full h-48 object-cover" src="<?php echo $author['picture']; ?>" alt="<?php echo $author['firstname']; ?><?php echo $author['lastname']; ?>" />
      <div class="p-4">
        <h3 class="text-xl font-bold"><?php echo $author['firstname']; ?><?php echo $author['lastname']; ?></h3>
        <div class="flex items-center mb-2">
          <span class="text-yellow-500 mr-1">
            <i class="fas fa-star"></i>
          </span>
          <span>8.9</span>
        </div>
        <p class="text-gray-400">
        <?php echo $author['biography']; ?>
        </p>
        <a href="book.html" class="inline-block mt-4 bg-red-500 hover:bg-red-800 rounded-full px-4 py-2 text-white">
          More details
        </a>
      </div>
    </article>
<?php endforeach;?>
   
  </div>
</section>
