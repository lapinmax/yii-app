<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Index author</h1>

<a href="<?php echo Url::to(['authors/create'])?>"><h3>Add new author</h3></a>

<table class="table">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Автор</th>
    <th scope="col">Ссылка на книгу</th>
      <?php foreach ($authors as $author): ?>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><?php echo $author->id;?></td>
    <td><?php echo $author->full_name;?></td>
  </tr>
  </tbody>
    <?php endforeach; ?>
</table>
