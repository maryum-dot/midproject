<?php
include 'components/connect.php';

// Check if the user is logged in
$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '';

// Fetch user data
$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/styles.css">
    

</head>


<body>

<?php include 'components/user_header.php'; ?>

<!-- Quick Select Section -->
<section class="quick-select">
    <h1 class="heading">Quick Options</h1>
    <div class="box-container">
        <?php if ($user_id != ''): ?>
            <div class="box">
                <h3 class="title">Likes and Comments</h3>
                <p>Total Likes: <span><?= $total_likes; ?></span></p>
                <a href="likes.php" class="inline-btn">View Likes</a>
                <p>Total Comments: <span><?= $total_comments; ?></span></p>
                <a href="comments.php" class="inline-btn">View Comments</a>
                <p>Saved Playlist: <span><?= $total_bookmarked; ?></span></p>
                <a href="bookmark.php" class="inline-btn">View Bookmark</a>
            </div>
        <?php else: ?>
            <div class="box" style="text-align: center;">
                <h3 class="title">Login or Register</h3>
                <div class="flex-btn" style="padding-top: .5rem;">
                    <a href="login.php" class="option-btn">Login</a>
                    <a href="register.php" class="option-btn">Register</a>
                </div>
            </div>
        <?php endif; ?>

        

        <div class="box">
            <h3 class="title">Popular Topics</h3>
            <div class="flex">
                <a href="courses.php"><i class=""></i><span>Machine Learning</span></a>
                <a href="courses.php"><i class=""></i><span>Cloud Computing</span></a>
                <a href="courses.php"><i class=""></i><span>Artificial Intelligence</span></a>
                <a href="courses.php"><i class=""></i><span>Project Managemnet</span></a>
                <a href="courses.php"><i class=""></i><span>Robotics</span></a>
                <a href="courses.php"><i class=""></i><span>Data Science</span></a>
            </div>
        </div>

        <div class="box">
            <h3 class="title">e-Books</h3>
            <div class="flex">
        <a href="ROBOTICS.pdf" class="inline-btn"><i class="fas fa-book"></i><span>Robotics</span></a>
        <a href="Artificial intelligence.pdf" class="inline-btn"><i class="fas fa-book"></i><span>Artificial Intelligence</span></a>
        <a href="Cloud Computing.pdf" class="inline-btn"><i class="fas fa-book"></i><span>Cloud Computing</span></a>
        <a href="MachineL.pdf" class="inline-btn"><i class="fas fa-book"></i><span>Machine Learning</span></a>
        <a href="PM.pdf" class="inline-btn"><i class="fas fa-book"></i><span>Project Management</span></a>
        
        

        </div>
        </div>

        <div class="box tutor">
            <h3 class="title">Become a Tutor</h3>
            <p><b><i>Empower students around the world by sharing your expertise and passion. Build your own courses, join our community of educators today, and start making a difference!</i></b></p>
            <a href="admin/register.php" class="inline-btn">Get Started</a>
        </div>
    </div>




</section>

<!-- Courses Section -->
<section class="courses">
    <h1 class="heading">Latest Courses</h1>
    <div class="box-container">
        <?php
        $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
        $select_courses->execute(['active']);
        if ($select_courses->rowCount() > 0) {
            while ($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)) {
                $course_id = $fetch_course['id'];

                $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
                $select_tutor->execute([$fetch_course['tutor_id']]);
                $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
        ?>
                <div class="box">
                    <div class="tutor">
                        <img src="uploaded_files/<?= htmlspecialchars($fetch_tutor['image']); ?>" alt="<?= htmlspecialchars($fetch_tutor['name']); ?>">
                        <div>
                            <h3><?= htmlspecialchars($fetch_tutor['name']); ?></h3>
                            <span><?= htmlspecialchars($fetch_course['date']); ?></span>
                        </div>
                    </div>
                    <img src="uploaded_files/<?= htmlspecialchars($fetch_course['thumb']); ?>" class="thumb" alt="<?= htmlspecialchars($fetch_course['title']); ?>">
                    <h3 class="title"><?= htmlspecialchars($fetch_course['title']); ?></h3>
                    <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">View Playlist</a>
                </div>
        <?php
            }
        } else {
            echo '<p class="empty">No courses added yet!</p>';
        }
        ?>
    </div>

    <div class="more-btn">
        <a href="courses.php" class="inline-option-btn">View More</a>
    </div>
</section>

<!-- Footer Section -->
<?php include 'components/footer.php'; ?>

<!-- Custom JS file link -->
<script src="js/script.js"></script>
</body>
</html>
