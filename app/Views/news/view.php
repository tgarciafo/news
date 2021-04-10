<h2><?= esc($news['author']) ?></h2>
<img src="<?php echo base_url('Images/' . esc($news['image'])); ?>" alt=""/>
<p>Data de publicació: <?= esc(date("d-m-Y", strtotime($news['publication_date']))) ?></p>
<p>Categoria: <?= esc($news['category']) ?></p>
<p><?= esc($news['content']) ?></p>