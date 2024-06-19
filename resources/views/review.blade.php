<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Reviews System</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="reviews.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Reviews System</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<h2>Reviews</h2>
			<p>Check out the below reviews for our website.</p>
		</div>
	</body>
</html>
<p>Check out the below reviews for our website.</p>
<div class="reviews"></div>
<script>
const reviews_page_id = 1;
fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
	document.querySelector(".reviews").innerHTML = data;
	document.querySelector(".reviews .write_review_btn").onclick = event => {
		event.preventDefault();
		document.querySelector(".reviews .write_review").style.display = 'block';
		document.querySelector(".reviews .write_review input[name='name']").focus();
	};
	document.querySelector(".reviews .write_review form").onsubmit = event => {
		event.preventDefault();
		fetch("reviews.php?page_id=" + reviews_page_id, {
			method: 'POST',
			body: new FormData(document.querySelector(".reviews .write_review form"))
		}).then(response => response.text()).then(data => {
			document.querySelector(".reviews .write_review").innerHTML = data;
		});
	};
});
</script>
