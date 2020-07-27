<?php
$post_allowed = true;
if($_POST["title"] == ""){
	echo "You forgot to enter a title<br>";
	$post_allowed = false;
}
if($_POST["post"] == ""){
	echo "You forgot to enter a post<br>";
	$post_allowed = false;
}
if($_POST["contact"] == ""){
	echo "You forgot to enter contact info  (website, phone number, email etc)<br>";
	$post_allowed = false;
}
if($_POST["category"] == ""){
	echo "You forgot to enter a category";
	$post_allowed = false;
}

function prettyCategory($category){
	if($category == "is"){
		return "Internet Services";
	}
	if($category == "msm"){
		return "Man Seeking Man";
	}
	if($category == "msw"){
		return "Man Seeking woman";
	}
	if($category == "pr"){
		return "Platonic Relationship";
	}
	if($category == "wsw"){
		return "Woman Seeking Woman";
	}
}

function createListing($title, $post, $contact, $category){
	$listingID = uniqid();
	$listingDIR = $category . "/" . $listingID;
	$postHTML = file_get_contents("template.html");
	mkdir($listingDIR);
	file_put_contents($listingDIR . "/title.txt", $title);
	
	$postHTML = str_replace("_TITLE_", htmlspecialchars($title), $postHTML);
	$postHTML = str_replace("_POST_", htmlspecialchars($post), $postHTML);
	$postHTML = str_replace("_CONTACT_", htmlspecialchars($contact), $postHTML);
	$postHTML = str_replace("_CATEGORY_", prettyCategory($category), $postHTML);
	
	file_put_contents($listingDIR . "/index.html", $postHTML);
	Header('Location: http://personals.getgle.org');
}

if($post_allowed == true){
	createListing($_POST["title"], $_POST["post"], $_POST["contact"], $_POST["category"]);
}
?>