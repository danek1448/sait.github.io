<html>
<head>
    <title>Контакты</title>
    <link rel="stylesheet" href="stili.css">
</head>
<body>
    <header>
        <h1><B>Наши контакты</B></h1>
		<img src="logo.jpg" alt="DaniilEnergy Logo" width="200">
    </header>
    
    <nav>
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="katalog.html">Каталог</a></li>
            <li><a href="onas.html">О нас</a></li>
            <li><a href="feedback.php">Контакты</a></li>
        </ul>
    </nav>
    
    <main>
        <h2>Свяжитесь с нами</h2>
        <form action="test.php" method="post">
            <label>Имя:</label>
            <input type="text" name="name" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Сообщение:</label>
            <textarea name="message" required></textarea>
            
            <button type="submit">Отправить</button>
        </form>
		<div class="reviews">
            <h2>Последние отзывы:</h2>
			<?
			$link = mysqli_connect("localhost", "root", "");
			mysqli_select_db($link, "praktika");
	
			$sql="SELECT name, email, msg FROM feedback ORDER BY id DESC";
			$result=mysqli_query($link, $sql);

			while ($line=mysqli_fetch_row($result)) {
				echo '<div class="review">';
				echo "<b>Имя:</b>".$line[0]."<br>";
				echo "<b>Email:</b>".$line[1]."<br>";
				echo "<b>Сообщение:</b>".$line[2]."<br><br>";
			}
		?>
    </main>


    <footer>
        <p>2025 ИП Богдашкин Даниил Борисович.</p>
    </footer>

</body>
</html>




