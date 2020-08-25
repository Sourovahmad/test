$("body").on("click", "#orderProductTableDelete", function () {
  console.log("clicked");

  $("#orderProductTableTbody").html("");

  // $(this).addClass('edit-item-trigger-clicked');
  // console.log("class added ");
  // var el = $(".edit-item-trigger-clicked");
  // console.log("class selected ");
  // var prooductId= el.attr('productId');

  var prooductId = $(this).attr('productId');

  console.log("Clicked On " + prooductId);

  delete orderTableData[prooductId];
  showTable();
  showTable();

  orderProductInputSubmitButton();

});