<?
include_once('model/Book.php');

class Model
{
   public function getBookList() 
   {
      return array(
         0 => new Book('PHP. Объекты, шаблоны и методики программирования', 'Мэт Зандстра', 'ЗКнига начинается с обзора объектно-ориентированных возможностей PHP, в который включены важные темы.'),
         1 => new Book('Разработка веб-приложений с помощью PHP и MySQL', 'Люк Веллинг', 'Исчерпывающее учебное пособие по разработке веб-приложений, управляемых базами данных, с использованием PHP и MySQL!'),
         2 => new Book('PHP и MySQL. Карманный справочник', 'Кристиан Уэнц', 'Книга PHP и MySQL. Карманный справочник, не претендуя на полноту описания всех возможностей, предоставляемых языком PHP, предлагает для рассмотрения темы, с которыми PHP-программист сталкивается практически ежедневно.')
      );
   }
   
   public function getBook($id)
   {
      $allBooks = $this->getBookList();
      return $allBooks[$id];
   }
}