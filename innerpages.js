$(document).ready(function(){
  // Submit review form
  $("form").submit(function(e){
    e.preventDefault();
    var reviewTitle = $("#reviewTitle").val();
    var reviewText = $("#reviewText").val();
    var reviewRating = $("#reviewRating").val();
    if (reviewTitle && reviewText && reviewRating) {
      $("#reviewModal").modal("hide");
      alert("Thank you for your review!");
    } else {
      alert("Please enter a title, text, and rating for your review.");
    }
  });
});
