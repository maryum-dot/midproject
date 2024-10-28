<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBooks</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link your CSS file here -->
</head>
<body>

    <!-- Include Header -->
    <?php include 'components/user_header.php'; ?>

    <!-- eBook Section -->
    <section class="ebooks">
        <h1 class="heading">e-Books</h1>
        <div class="box-container">

            <div class="box">
                <img src="lms1" alt="eBook Title 1 Thumbnail" class="thumbnail">
                <h3>eBook Title 1</h3>
                <p>Description of the eBook. This eBook covers various topics related to...</p>
                <a href="Textbook.pdf" target="_blank" class="inline-btn">Read Now</a> <!-- Check this link -->
            </div>

            <div class="box">
                <img src="images/book2_thumbnail.jpg" alt="eBook Title 2 Thumbnail" class="thumbnail">
                <h3>eBook Title 2</h3>
                <p>Description of the eBook. This eBook provides insights into...</p>
                <a href="OperatingSystemConcepts.pdf" class="inline-btn">Read Now</a> <!-- Check this link -->
            </div>

            <div class="box">
                <img src="images/book2_thumbnail.jpg" alt="eBook Title 2 Thumbnail" class="thumbnail">
                <h3>eBook Title 2</h3>
                <p>Description of the eBook. This eBook provides insights into...</p>
                <a href="Automata.pdf" class="inline-btn">Read Now</a> <!-- Check this link -->
            </div>

            <!-- Add more eBooks as needed -->
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'components/footer.php'; ?>

</body>
</html>
