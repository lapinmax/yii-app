<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
?>
<h1>book/index</h1>

<a href="<?=Url::to(['books/create'])?>"><h3>Add new book</h3></a>

<table class="table">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col">Author</th>
    <th scope="col">Date</th>
      <?php foreach ($books as $book): ?>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><?= $book->id;?></td>
    <td><?= $book->title;?></td>
    <td><?= $book->author;?></td>
    <td><?= $book->date_publication;?></td>
  </tr>
  </tbody>
    <? endforeach; ?>
</table>
