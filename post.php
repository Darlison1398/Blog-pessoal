<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
  }

?>
   <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
        <p id="post-description"> <?= $currentPost['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/imgBlog/<?= $currentPost['img'] ?>" alt=" <?= $currentPost['title'] ?> ">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla porro reiciendis et dicta,
             perferendis minus vel quod distinctio eligendi placeat soluta, voluptates magnam incidunt!
              Molestiae voluptate accusamus recusandae rerum necessitatibus?
            Modi sed amet, est ipsam unde vel? Perferendis nisi, porro fugiat excepturi reprehenderit, 
            recusandae nemo cupiditate esse blanditiis beatae ullam eius eos adipisci quisquam nostrum
             dolorum quibusdam mollitia magnam. Veritatis!
            Dolore neque aliquid eius error iste similique corrupti placeat delectus voluptate tempore 
            quod amet, ullam totam quasi sed expedita! Unde inventore voluptatibus facilis fugiat quas
             eum, tenetur officiis ab odio.
            Aliquid magni debitis a vero reprehenderit aut modi explicabo enim nisi voluptatem itaque 
            atque quisquam autem assumenda rem quaerat voluptatibus, omnis dignissimos iure ex. Cumque 
            et suscipit at laboriosam officiis?
            Consectetur officia reiciendis debitis ad nesciunt maxime dicta ea, quam, cumque laborum eos
             repellendus unde officiis assumenda autem suscipit sapiente. Mollitia optio earum consectetur
              minima quae facere alias odit nihil!
        </p>

        <p class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla porro reiciendis et dicta,
             perferendis minus vel quod distinctio eligendi placeat soluta, voluptates magnam incidunt!
              Molestiae voluptate accusamus recusandae rerum necessitatibus?
            Modi sed amet, est ipsam unde vel? Perferendis nisi, porro fugiat excepturi reprehenderit, 
            recusandae nemo cupiditate esse blanditiis beatae ullam eius eos adipisci quisquam nostrum
             dolorum quibusdam mollitia magnam. Veritatis!
            Dolore neque aliquid eius error iste similique corrupti placeat delectus voluptate tempore 
            quod amet, ullam totam quasi sed expedita! Unde inventore voluptatibus facilis fugiat quas
             eum, tenetur officiis ab odio.
            Aliquid magni debitis a vero reprehenderit aut modi explicabo enim nisi voluptatem itaque 
            atque quisquam autem assumenda rem quaerat voluptatibus, omnis dignissimos iure ex. Cumque 
            et suscipit at laboriosam officiis?
            Consectetur officia reiciendis debitis ad nesciunt maxime dicta ea, quam, cumque laborum eos
             repellendus unde officiis assumenda autem suscipit sapiente. Mollitia optio earum consectetur
              minima quae facere alias odit nihil!
        </p>


    </div>

    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    
    <!--  Essa tag, é semelhante a tag do index.php; Eu apenas copiei pra cá e fiz algumas pequenas alterações -->
    <ul id = "tags-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li> <a href="#"> <?= $tag?> </a> </li>

        <?php  endforeach; ?>
    </ul>

    <h3 id="categories-title">Categorias</h3>

    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li> <a href="#"> <?= $category?> </a> </li>
        <?php  endforeach; ?>

    </ul>
   </aside>
   </main>
  
<?php
  include_once("templates/footer.php");
?>