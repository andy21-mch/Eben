<?php

include 'src/backend/User.php';
include 'src/backend/Blog.php';
include 'src/backend/Category.php';
$blog = new Blog();
$user = new User();
$category = new Category();



$id = $_GET['id'];
$blogpost = $blog->getPostBySlug($id);
$comments = $blog->getPostComments($blogpost['id']);
$categories = $category->get_categories();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Bootstrap JavaScript (bundle includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap Icons -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

	<!-- Custom CSS -->

	<link rel="stylesheet" href="css/style.css">

	<style>
		.fixed-image {
			max-width: 100%;
			/* Ensures the image doesn't exceed its parent container */
			height: 400px;
			/* Allows the height to adjust proportionally based on the width */
			width: 800px;
			/* Set your desired width */
			max-height: 300px;
			/* Set your maximum desired height */
			object-fit: cover;


		}
	</style>
	<title>Ebenezer Higher Institure of Science and Technology</title>
</head>

<body>
	<?php

	include 'header.php'

		?>
	<section class="hero" id="hero">
		<div id="demo" class="carousel slide" data-bs-ride="carousel">

			<!-- Indicators/dots -->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			</div>

			<!-- The slideshow/carousel -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="carousel-background">
						<img src="image/slider/slider_1.jpg" alt="">
						<div class="carousel-container">
							<div class="carousel-content-container">
								<h2>Explore Our Blog</h2>
								<p>Discover the latest insights, news, and stories in our blog. Stay informed and
									engaged
									with our
									community.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-background">
						<img src="image/slider/slier_2.jpg" alt="">
						<div class="carousel-container">
							<div class="carousel-content-container">
								<h2>Dive into Knowledge</h2>
								<p>Immerse yourself in a world of knowledge and information. Our blog is a source of
									valuable insights
									and updates.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Left and right controls/icons -->
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>
		</div>
	</section>


	<section class="about mt-2" style="font-family: 'Rubik',sans-serif;">
		<div class="container-fluid">
			<div class="container-fluid bg-services bg-white text-center p-5 mt-5 text-light-blue">
				<h3>
					<?php echo $blogpost['title']; ?>
				</h3>
			</div>
			<div class="container bg-white">
				<div class="row">
					<div class="col-md-8 p-2">
						<div class="card mb-4">
							<div class="blog-post-image-wrapper">
								<img class="blog-post-image fixed-image"
									src="<?php echo 'src/images/' . $blogpost['image']; ?>" alt="blog post image">
							</div>
							<div class="card-body">
								<h2 class="card-title">
									<?php echo $blogpost['title']; ?>
								</h2>
								<p class="card-text">
									<?php echo $blogpost['content']; ?>
								</p>
							</div>
							<div class="card-footer">
								Posted on
								<?php echo $blogpost['date']; ?> by
								<a href="#">
									<?php

									$name = $user->getUser($blogpost['userid']);
									echo ($name['fullname']);

									?>
								</a>
							</div>

							<!-- to display votes -->
							<?php
							$conn = connect();
							$ids = $blogpost['id'];
							$query = "SELECT * FROM `ratings` WHERE post_id=:post_id";
							$stmt = $conn->prepare($query);
							$stmt->execute([
								'post_id' => $ids,
							]);
							$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

							$up = 0;
							$down = 0;

							if ($rows) {
								foreach ($rows as $row) {

									if ($row['up'] == 1) {
										$up += 1;
									}

									if ($row['down'] == 1) {
										$down += 1;
									}
								}
							}
							?>

							<!-- for the ratings -->
							<div class="pad-ver">
								<div class="btn-group">

									<form class="" action="vote.php" method="post">
										<input type="hidden" name="id" value="<?php echo $blogpost['id']; ?>">
										<input type="hidden" name="vote_type" value="1">
										<button>
											<a
												class="click_unlike_like btn btn-sm btn-default  btn-hover-success style">
												<i class="fa fa-thumbs-up"></i>
											</a>
										</button>
									</form>

									<div class="btn">
										<?php echo $up ?>
									</div>

									<form action="vote.php" method="post">
										<input type="hidden" name="id" value="<?php echo $blogpost['id']; ?>">
										<input type="hidden" name="vote_type" value="0">
										<button>
											<a class="click_unlike_like btn btn-sm btn-default btn-hover-success style">
												<i class="fa fa-thumbs-down"></i>
											</a>
										</button>
									</form>

									<div class="btn">
										<?php echo $down ?>
									</div>

								</div>
							</div>

						</div>

						<div class="card my-4">
							<h5 class="card-header">Leave a Comment:</h5>
							<div class="card-body">
								<form action="src/backend/useraction.php" method="post">
									<div class="form-group">
										<input type="hidden" class="form-control" name="post_id"
											value="<?php echo $blogpost['id'] ?>">
										<input type="text" class="form-control" placeholder="Username" name="username">
									</div>
									<div class="form-group">
										<textarea class="form-control" rows="3" name="comment" required></textarea>
									</div>
									<?php
									if (isset($_SESSION['message'])) {
										?>
										<div class="alert alert-success">
											<span>
												<?php
												echo $_SESSION['message'];
												unset($_SESSION['message']); ?>
											</span>
										</div>
									<?php } ?>
									<button type="submit" class="btn btn-primary" name="comment_submit">Submit</button>
								</form>
							</div>
						</div>
						<div class="card my-4">
							<h5 class="card-header">Comments</h5>
							<div class="card-body">
								<?php
								$commentsPerPage = 5; // Number of comments per page
								$totalComments = count($comments);
								$totalPages = ceil($totalComments / $commentsPerPage);

								$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
								$startIndex = ($currentPage - 1) * $commentsPerPage;
								$endIndex = min($startIndex + $commentsPerPage - 1, $totalComments - 1);

								for ($i = $startIndex; $i <= $endIndex; $i++) {
									$comment = $comments[$i];
									?>
									<div class="comment-box media mb-4">
										<div class="initials mr-3 rounded-circle"
											style="background-color: #<?php echo dechex(rand(0, 16777215)); ?>">
											<?php echo substr($comment['username'], 0, 1); ?>
										</div>
										<div class="media-body">
											<h5 class="mt-0">
												<?php echo $comment['username']; ?>
											</h5>
											<?php echo $comment['comment']; ?>
										</div>
									</div>
									<?php
								}
								?>

								<!-- Pagination links -->
								<nav aria-label="Comments Pagination">
									<ul class="pagination justify-content-center">
										<?php for ($page = 1; $page <= $totalPages; $page++): ?>
											<li class="page-item <?php echo $page === $currentPage ? 'active' : ''; ?>">
												<a class="page-link"
													href="?id=<?php echo $id; ?>&page=<?php echo $page; ?>">
													<?php echo $page; ?>
												</a>
											</li>
										<?php endfor; ?>
									</ul>
								</nav>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="card my-4">
							<h5 class="card-header">Search</h5>
							<div class="card-body">
								<div class="input-group">
									<form action="category_post.php" method="post">
										<input type="text" class="form-control" name="cate" placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-secondary" name="search_cat"
												type="submit">Go!</button>
										</span>
									</form>
								</div>
							</div>
						</div>

						<?php
						// Assuming $categories is your array of categories
						$itemsPerPage = 7; // Set the number of items per page
						$totalCategories = count($categories);
						$totalPages = ceil($totalCategories / $itemsPerPage);

						// Determine the current page
						$page = isset($_GET['category_page']) ? max(1, min($totalPages, $_GET['category_page'])) : 1;

						// Calculate the starting index for the current page
						$startIndex = ($page - 1) * $itemsPerPage;

						// Get the categories for the current page
						$currentCategories = array_slice($categories, $startIndex, $itemsPerPage);
						?>

						<div class="card my-4">
							<h5 class="card-header">Categories</h5>
							<div class="card-body">
								<ul class="list-unstyled category-list mb-0">
									<?php foreach ($currentCategories as $row): ?>
										<li><a href="category_post?id=<?php echo $row['id']; ?>" class="category-link">
												<?php echo $row['cat_title']; ?>
											</a>
											<hr class="category-divider">
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>

						<!-- Pagination links -->
						<nav aria-label="Categories Pagination">
							<ul class="pagination justify-content-center">
								<?php for ($i = 1; $i <= $totalPages; $i++): ?>
									<li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
										<a class="page-link"
											href="?id=<?php echo $_GET['id'] ?>&category_page=<?php echo $i; ?>">
											<?php echo $i; ?>
										</a>
									</li>
								<?php endfor; ?>
							</ul>
						</nav>

					</div>
				</div>



			</div>
	</section>

	<?php

	include 'footer.php'
		?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>