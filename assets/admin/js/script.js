//slider page script
$(".editbtn").click(function () {
	$("#editModalId").val($(this).attr("data-id"));
	$("#editModalLaptopImage").attr(
		"src",
		$(this).parent().parent().parent().find(".LaptopBanner").attr("src")
	);
	$("#editModalTabletImage").attr(
		"src",
		$(this).parent().parent().parent().find(".TabletBanner").attr("src")
	);
	$("#editModalMobileImage").attr(
		"src",
		$(this).parent().parent().parent().find(".MobileBanner").attr("src")
	);
});
$(".deletebtn").click(function () {
	$("#deleteModalId").val($(this).attr("data-id"));
});


// blog page script
$(".blogdeletebtn").click(function () {
	var id = $(this).attr("data-id");
	$("#blogdeleteModalId").val(id);
});

// blogcategory page script
$(".blogcategoryeditbtn").click(function () {
	var id = $(this).attr('data-id');
	var image = $(this)
		.parent()
		.parent()
		.parent()
		.find(".categoryImage")
		.attr("src");
	var banner = $(this)
		.parent()
		.parent()
		.parent()
		.find(".categoryBanner")
		.attr("src");
	var name = $(this).parent().parent().parent().find(".categoryName").text();
	var description = $(this)
		.parent()
		.parent()
		.parent()
		.find(".categoryDescription")
		.attr("data-content");

		console.log(id,image,banner,name,description)


	$("#blogeditModalId").val($(this).attr("data-id"));
	$("#blogeditModalImage").attr(
		"src",
		image
	);
	$('#blogeditModalBanner').attr('src',banner);
	$(".editModalname").val(name);
	$('.editModalDescription').text(description)
});

// event page script
$(".eventeditbtn").click(function () {
	$("#blogeditModalId").val($(this).attr("data-id"));
	$("#blogeditModalImage").attr(
		"src",
		$(this).parent().parent().parent().find("img").attr("src")
	);
	$(".editModalTitle").val(
		$(this).parent().parent().parent().find(".title").text()
	);
	$(".editModalDescription").html(
		$(this).parent().parent().parent().find(".description").text()
	);
	$(".editModaleventDate").val(
		$(this).parent().parent().parent().find(".eventDate").attr("data-date")
	);
});
