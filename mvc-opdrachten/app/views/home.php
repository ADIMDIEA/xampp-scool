<ul>

    <?php foreach ($books as $book): ?>

        <li>

            <strong><?php echo $book->getTitle(); ?></strong><br>

            Auteur: <?php echo $book->getAuthor(); ?><br>

            Prijs: €<?php echo $book->getPrice(); ?>

        </li>

    <?php endforeach; ?>

</ul>