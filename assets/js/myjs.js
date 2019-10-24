$( document ).ready(function() {



$('.reg').on('click', function(){
    $('#table').fadeToggle();
    $('#form').fadeToggle();
});





$('.exam-sec').on( 'click', '.add-b', function(e){
	e.preventDefault();
	var numb = $(this).closest('.exam-sec')[0].childNodes.length - 1;
	$(this).closest('.exam-sec').find('.exam-row:not(.removable)').clone().addClass('removable row-'+ numb).appendTo('.exam-sec');
	$(this).closest('.exam-sec').find('.row-'+ numb ).find('input').val('');
});




$('.exam-sec').on( 'click', '.remove-b', function(e){
	e.preventDefault();
	$(this).closest('.removable').remove();
});





$('.cancel').on('click', function(e){

	e.preventDefault();

	if ( confirm('Are you sure you want to reset the form?') ) {
		$('#form input.form-control').val('');
		$('.removable').remove();
	}

});



}); // end document ready fn


// ===========


/* var student;
function showData(){

	$.ajax({
	url: '/controller/ajax.php',
	data: { student: "John"},
	dataType : 'json',
	type: 'POST',

	success: function(data){
		console.log(data);
		student = data;


	},

	error: function(data) {
		
	}


	});
}
showData();

var x = JSON.parse(student[0].exam); */
