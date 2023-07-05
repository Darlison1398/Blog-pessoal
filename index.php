<!--  Aqui é a parte do Cabeçalho/Header do site  -->
<?php
  include_once("templates/header.php");
?>

<!--  Aqui é a parte main do site  -->
  <main>
    <div id = "title-container">
      <h1>Blog Codar</h1>
      <p>O seu blog de programação</p>
    </div>

    <div id = "posts-container">
      <?php foreach($posts as $post): ?>
        <div class="post-box">
          <!-- Inseri as imagens e os títulos/links  -->
          <img src="<?= $BASE_URL ?>/imgBlog/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <h2 class = "post-title">
            <a href="<?= $BASE_URL ?>post.php?id= <?= $post['id'] ?> "> <?= $post['title'] ?> </a>
          </h2>
          <!-- Descrição do post/imagem -->
          <p class="post-description"> <?= $post['description'] ?> </p>

          <!-- Acessando as tags  -->
          <div class="tags-container">
            <?php foreach($post['tags'] as $tag): ?>
              <a href="#"> <?= $tag
               ?> </a>

            <?php  endforeach; ?>
          </div>


        </div>

      <?php endforeach; ?>  
    </div>



  </main>



<!--  Aqui é a parte do Footer do site  -->
<?php
  include_once("templates/footer.php");
?>