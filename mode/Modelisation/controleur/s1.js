$(function (){
	$('#list_mat').on('shown.bs.collapse', function () {
		$('#icone').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
	});
	$('#list_mat').on('hidden.bs.collapse', function () {
		$('#icone').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
	});
});
$(function (){
	$('#list_mat').on('shown.bs.collapse', function () {
		$('#icone_fold').removeClass('glyphicon-folder-close').addClass('glyphicon-folder-open');
	});
	$('#list_mat').on('hidden.bs.collapse', function () {
		$('#icone_fold').removeClass('glyphicon-folder-open').addClass('glyphicon-folder-close');
	});
});
/* $(function () {
	$('.c1>li>a').click(function(){
		var pos = $($(this).attr('href')).offset().top;
		$('body, html').animate({scrollTop:pos}, 800);
	})
}); */
/* $(function () {
	$('.panel-body>div>form>h2').click(function(){
		var pos = $('.p1').offset().top;
		$('body, html').animate({scrollTop:pos},800);
	})
}); */