<!DOCTYPE html>
<html>
   <head>
       <title>Список книг</title>
       <meta charset="utf-8">
   </head>
   <body>
       <table border="1">
           <thead><tr><th>Название</th><th>Автор</th><th>Описание</th></tr></thead>
           <tbody>
            <? foreach( $books as $id => $book ): ?>
                <tr>
                    <td><a href="index.php?book=<?= $id ?>"><?= $book->title ?></a></td>
                    <td><?= $book->author ?></td>
                    <td><?= $book->description ?></td>
                </tr>
            <? endforeach ?>
          </tbody>
      </table>
   </body>  
</html>