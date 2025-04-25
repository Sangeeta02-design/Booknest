<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <style>
    /* Reset */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; background-color: #f4f6f8; }
    header { background-color: #4CAF50; padding: 20px; color: white; text-align: center; }
    nav ul { list-style: none; display: flex; justify-content: center; margin-top: 10px; }
    nav ul li { margin: 0 15px; }
    nav ul li a { color: white; text-decoration: none; font-weight: bold; }
    nav ul li a:hover { text-decoration: underline; }
    main { width: 90%; max-width: 1200px; margin: 40px auto; }
    .services { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
    .service { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; }
    .service a { text-decoration: none; color: #333; display: block; font-size: 18px; margin-top: 10px; }
    .service a:hover { color: #4CAF50; }
    .service-icon { font-size: 40px; color: #4CAF50; }
    footer { background: #333; color: white; text-align: center; padding: 15px; margin-top: 40px; }
  </style>
</head>
<body>
  <header>
    <h1>Library Management System</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="add_book.php">Add Book</a></li>
        <li><a href="view_books.php">View Books</a></li>
        <li><a href="issue_book.php">Issue Book</a></li>
        <li><a href="return_book.php">Return Book</a></li>
        <li><a href="register_student.php">Add Student</a></li>
        
      </ul>
    </nav>
  </header>

  <main>
    <section class="services">
      <div class="service">
        <div class="service-icon">📕</div>
        <a href="add_book.php">Add Book</a>
      </div>
      <div class="service">
        <div class="service-icon">📚</div>
        <a href="view_books.php">View Books</a>
      </div>
      <div class="service">
        <div class="service-icon">📤</div>
        <a href="issue_book.php">Issue Book</a>
      </div>
      <div class="service">
        <div class="service-icon">📥</div>
        <a href="return_book.php">Return Book</a>
      </div>
      <div class="service">
        <div class="service-icon">👤</div>
        <a href="register_student.php">Add Student</a>
      </div>
      <div class="service">
        <div class="service-icon">📋</div>
        <a href="view_issued.php">Issued Books</a>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 Library Management System
  </footer>
</body>
</html>
