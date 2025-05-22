<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paws For Hearts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		.bg{
			background-color: #fff6e3;
		}
		.bgpurple{
			background-color: #F2A2E8;
		}
		.post-container {
			width: 31%;
			display: inline-block;
			margin-right: 1%;
			vertical-align: top;
		}

	</style>
</head>
<body>
	<?php include("header.php");?>
	
	<div class="container mt-5">
		<h1 class="text-center mb-5">Welcome to Pet Adoption Blog</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="bgpurple">
						<div class="card-header" >
							<a href="blog.php">All</a>
						</div>
					</div>
					<ul class="list-group list-group-flush">

						<li class="list-group-item" >
							<a href="#" class="category" data-value="dogs">Dogs</a>
						</li>
						<li class="list-group-item">
							<a href="#" class="category" data-value="cats">Cats</a>
						</li>
						<!--
						<li class="list-group-item">
							<a href="#" class="category" data-value="both">Both</a>
						</li>-->
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<input type="text" id="search-input" class="form-control mb-3" placeholder="Search Posts">
				<div class="card-columns" id="posts-container">
					<!-- Posts will be added here -->
				</div>
			</div>
		</div>
	</div>

	<script>
		const posts = [
		{
			id: 1,
			title: "How To Get Rid Of Ticks & Fleas in Dogs",
			content: "If you find creepy crawling monsters on your dog's skin, then there might be chances that your dog is suffering from ticks and flea infections. Being a pet parent, it's hard to see our pet",
			category: "dogs",
			image: "images/fleas1.jpg"

		},
		{
			id: 2,
			title: "Why Cat Scratches?",
			content: "Are you a cat parent? If yes, you might have noticed your cat scratching on your couch, curtains, mat, and even your clothes. Every cat parent wonders, why does my cat scratch so much?",
			category: "cats",

			image: "images/catscratching.jpg"

		},
		{
			id: 3,
			title: "7 steps to improve your dog's alone time",
			content: "We wish our dogs to accompany us everywhere we go. Unfortunately, it's an impossible task. Helping your puppy or new dog adjust to being alone is vital teaching they need to.",
			category: "dogs",
			image: "images/alone-dog.jpg"
		}
		];

		function displayPosts(posts) {
			const postsContainer = document.getElementById("posts-container");

			postsContainer.innerHTML = "";

			posts.forEach(post => {
				const postElement = document.createElement("div");
				postElement.classList.add("card");
				postElement.innerHTML = `
				<div class="bg"
				<div class="card-body">
				<img src="${post.image}" class="card-img-top" alt="${post.title}">
				<div class="card-body">
				<h5 class="card-title">${post.title}</h5>
				<p class="card-text">${post.content.substring(0, 100)}...</p>
				<a href="#" class="btn btn-primary">Read More</a>
				</div>
				</div>
				</div
				`;
				postsContainer.appendChild(postElement);
			});
		}

		function filterPostsByCategory(category) {
			let filteredPosts = posts;

			if (category !== "all") {
				filteredPosts = posts.filter(post => post.category === category);
			}

			displayPosts(filteredPosts);
		}

		function searchPosts() {
			const searchInput = document.getElementById("search-input");
			const searchTerm = searchInput.value.toLowerCase();

			let filteredPosts = posts;

			if (searchTerm) {
				filteredPosts = posts.filter(post => post.title.toLowerCase().includes(searchTerm) || post.content.toLowerCase().includes(searchTerm));
			}

			displayPosts(filteredPosts);
		}

		const categories = document.querySelectorAll(".category");
		categories.forEach(category => category.addEventListener("click", e => {
			e.preventDefault();
			const selectedCategory = category.getAttribute("data-value");
			filterPostsByCategory(selectedCategory);
		}));

		const searchInput = document.getElementById("search-input");
		searchInput.addEventListener("keyup", searchPosts);

		displayPosts(posts);
	</script>
