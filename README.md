Для запуска локальной копии сайта после скачивания архива вам нужно будет проделать следующие действия:

(Инструкция приведена для сервера XAMPP и системы Linux, для Open Server или любого другого решения шаги будут аналогичными), база данных - MySQL
В предложенном репозитории необходимо скопировать папки: application, public; файлы: .htaccess, index.php в папку
1. Скачиваете, устанавливаете и запускаете XAMPP с PHP 7.2 (допустим далее, что путь установки будет /opt/lamp)
1. База данных
	1. В адресной строке браузера вбиваете localhost/phpmyadmin и переходите по этому адресу
	2. Кликаете по ссылке «Создать БД».
	3. Имя базы данных вводите bd_blog, в выпадающем списке «Сравнение» указываете utf8_general_ci
	4. Кликаете по вкладке «Импорт», кликаете по кнопке «Обзор», выбираете файл из репозитория bd.sql

2. Сайт
	1. Все файлы репозитория, кроме bd.sql копируете в папку /opt/htdocs/blog

	2. Запускаете XAMPP

	После этого по адресу http://localhost/blog/ в браузере должен открыться сайт.
