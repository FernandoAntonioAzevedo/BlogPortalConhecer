<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost
                ['title'] ?>">
        </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi a voluptate sunt eaque ratione impedit consectetur. Commodi doloremque similique repellat voluptatem nihil, aperiam veniam dignissimos quasi? Sapiente, architecto voluptatum!
            In laudantium, ea facere eaque minima sunt ad modi eius sed enim neque voluptates veritatis deserunt quisquam cupiditate laboriosam! Cumque provident corrupti facere nihil maiores animi quod nostrum mollitia minima.
            Nihil delectus corporis hic ad ullam ducimus architecto voluptate optio neque. Nam blanditiis nulla eum! Maxime dolor architecto, culpa placeat fuga atque provident tempora ea quas quo inventore. Vel, a!
            Tempore iure, excepturi placeat fuga laudantium veniam sunt ab aperiam molestiae inventore cumque nobis architecto voluptatum reprehenderit earum rerum repudiandae alias reiciendis iusto tenetur beatae modi mollitia? Totam, sapiente tenetur.
            Aspernatur, quam. Velit eius earum ad, numquam praesentium, deserunt expedita omnis nostrum harum dolorem esse, dolore magnam eaque. Dolor vitae odio natus tenetur nulla! Blanditiis delectus saepe nulla! Blanditiis, quisquam?
            </p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi a voluptate sunt eaque ratione impedit consectetur. Commodi doloremque similique repellat voluptatem nihil, aperiam veniam dignissimos quasi? Sapiente, architecto voluptatum!
            In laudantium, ea facere eaque minima sunt ad modi eius sed enim neque voluptates veritatis deserunt quisquam cupiditate laboriosam! Cumque provident corrupti facere nihil maiores animi quod nostrum mollitia minima.
            Nihil delectus corporis hic ad ullam ducimus architecto voluptate optio neque. Nam blanditiis nulla eum! Maxime dolor architecto, culpa placeat fuga atque provident tempora ea quas quo inventore. Vel, a!
            Tempore iure, excepturi placeat fuga laudantium veniam sunt ab aperiam molestiae inventore cumque nobis architecto voluptatum reprehenderit earum rerum repudiandae alias reiciendis iusto tenetur beatae modi mollitia? Totam, sapiente tenetur.
            Aspernatur, quam. Velit eius earum ad, numquam praesentium, deserunt expedita omnis nostrum harum dolorem esse, dolore magnam eaque. Dolor vitae odio natus tenetur nulla! Blanditiis delectus saepe nulla! Blanditiis, quisquam?
            </p>
        </div>

      <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li> 
            <?php endforeach; ?>
        </ul>
            <h3 id="categories-title">Categorias</h3>  
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
             <li><a href="#"><?= $category ?></a></li> 
            <?php endforeach; ?>
        </ul>          
      </aside>
    </main>
    
    
    <?php
    include_once("templates/footer.php")

?>