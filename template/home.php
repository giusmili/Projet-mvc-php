
<body>

<header> 
    <h1>🚀 Developer blog</h1>
</header>
    <main>

    	
      
            <?php
               foreach ($posts as $post) {
            ?>
            <section>
                 <h2>🧑‍💻 Derniers publications du blog</h2> 
                        <h3><?= htmlspecialchars($post['title']); ?></h3>
                            <p>
                                <?=
                                // We display the post content.
                                nl2br(htmlspecialchars($post['content']));
                                ?>
                                
                            </p>
                            <p>
                                
                                <em>Publié le <?= $post['french_creation_date']; ?>
                              </em>
                            </p>
                            <a href="#" class=" button btn-primary">Commentaires</a>
            </section>
            <?php
            } // The end of the posts loop.
            ?>
         
       
    </main>
</body>
</html>