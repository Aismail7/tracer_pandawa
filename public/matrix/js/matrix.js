
$(document).ready(function(){
	var url ="http://localhost/futsall_api/public/admin"
	//Modul Transaksi Member iuran
	$("#nama_pelanggan").select2();
	$( "#nama_pelanggan" ).change(function() {
		$.ajax({
			url: url+'/pelangganList/'+$("#nama_pelanggan").val(),
			dataType:"json",
			type: "get",
        success: function(data){
			$("#email").val(data[0].email);
			$("#hp").val(data[0].hp);
			$("#alamat").val(data[0].alamat);
			$("#hd_email").val(data[0].email);
			$("#hd_hp").val(data[0].hp);
			$("#hd_nama_team").val(data[0].nama_team);
				  
        	}
    	});
	});

//Modul Transaksi Member iuran
	$("#absensi").select2();
	$( "#absensi" ).change(function() {
		$.ajax({
			url: url+'/absensiList/'+$("#absensi").val(),
			dataType:"json",
			type: "get",
        success: function(data){
			$("#hari_pertandingan").val(data[0].hari_pertandingan);
			$("#tgl").val(Date(now()));
				  
        	}
    	});
	});


	//modul non member
	var todayDate = new Date().getDate();
	$('.datepicker').datetimepicker({
		timepicker:false,
		formatDate:'Y/m/d',
		minDate: new Date(),
		maxDate: new Date(new Date().setDate(todayDate + 30))
	});
	$('.datepicker2').datepicker({formatDate:'Y-m-d H:i:s'});

	
	 $("#total_dp").val(0);
	 $("#nilai_pelunasan_dp").keyup(function(){
		var nilai1 = $("#nilai_dp").val();
		var nilai2 = $("#nilai_pelunasan_dp").val();
		var total = parseInt(nilai1)+parseInt(nilai2);
		$("#total_dp").val(total);
		$('#nilai_pelunasan_dp_hidden').val(nilai2);
    });
	

	//alert("aaa");

	// $("#form_pelunasan_dp").validate({
	// 	submitHandler: function(form) {
	// 		var nilai1 = $("#nilai_tagihan").val();
	// 		var nilai2 = $("#total_dp").val();
	// 		var total = parseInt(nilai1)-parseInt(nilai2);
	// 		if(parseInt(nilai1)<parseInt(nilai2)){
	// 			alert("Nilai Pembayaran tidak boleh kurang");
	// 			return false; 
	// 		}
				
	// 		 // block the default submit action
	// 	}
	// });



	
	// === Sidebar navigation === //
	
	$('.submenu > a').click(function(e)
	{
		e.preventDefault();
		var submenu = $(this).siblings('ul');
		var li = $(this).parents('li');
		var submenus = $('#sidebar li.submenu ul');
		var submenus_parents = $('#sidebar li.submenu');
		if(li.hasClass('open'))
		{
			if(($(window).width() > 768) || ($(window).width() < 479)) {
				submenu.slideUp();
			} else {
				submenu.fadeOut(250);
			}
			li.removeClass('open');
		} else 
		{
			if(($(window).width() > 768) || ($(window).width() < 479)) {
				submenus.slideUp();			
				submenu.slideDown();
			} else {
				submenus.fadeOut(250);			
				submenu.fadeIn(250);
			}
			submenus_parents.removeClass('open');		
			li.addClass('open');	
		}
	});
	
	var ul = $('#sidebar > ul');
	
	$('#sidebar > a').click(function(e)
	{
		e.preventDefault();
		var sidebar = $('#sidebar');
		if(sidebar.hasClass('open'))
		{
			sidebar.removeClass('open');
			ul.slideUp(250);
		} else 
		{
			sidebar.addClass('open');
			ul.slideDown(250);
		}
	});
	
	// === Resize window related === //
	$(window).resize(function()
	{
		if($(window).width() > 479)
		{
			ul.css({'display':'block'});	
			$('#content-header .btn-group').css({width:'auto'});		
		}
		if($(window).width() < 479)
		{
			ul.css({'display':'none'});
			fix_position();
		}
		if($(window).width() > 768)
		{
			$('#user-nav > ul').css({width:'auto',margin:'0'});
            $('#content-header .btn-group').css({width:'auto'});
		}
	});
	
	if($(window).width() < 468)
	{
		ul.css({'display':'none'});
		fix_position();
	}
	
	if($(window).width() > 479)
	{
	   $('#content-header .btn-group').css({width:'auto'});
		ul.css({'display':'block'});
	}
	
	// === Tooltips === //
	$('.tip').tooltip();	
	$('.tip-left').tooltip({ placement: 'left' });	
	$('.tip-right').tooltip({ placement: 'right' });	
	$('.tip-top').tooltip({ placement: 'top' });	
	$('.tip-bottom').tooltip({ placement: 'bottom' });	
	
	// === Search input typeahead === //
	$('#search input[type=text]').typeahead({
		source: ['Dashboard','Form elements','Common Elements','Validation','Wizard','Buttons','Icons','Interface elements','Support','Calendar','Gallery','Reports','Charts','Graphs','Widgets'],
		items: 4
	});
	
	// === Fixes the position of buttons group in content header and top user navigation === //
	function fix_position()
	{
		var uwidth = $('#user-nav > ul').width();
		$('#user-nav > ul').css({width:uwidth,'margin-left':'-' + uwidth / 2 + 'px'});
        
        var cwidth = $('#content-header .btn-group').width();
        $('#content-header .btn-group').css({width:cwidth,'margin-left':'-' + uwidth / 2 + 'px'});
	}
	
	// === Style switcher === //
	$('#style-switcher i').click(function()
	{
		if($(this).hasClass('open'))
		{
			$(this).parent().animate({marginRight:'-=190'});
			$(this).removeClass('open');
		} else 
		{
			$(this).parent().animate({marginRight:'+=190'});
			$(this).addClass('open');
		}
		$(this).toggleClass('icon-arrow-left');
		$(this).toggleClass('icon-arrow-right');
	});
	
	$('#style-switcher a').click(function()
	{
		var style = $(this).attr('href').replace('#','');
		$('.skin-color').attr('href','css/maruti.'+style+'.css');
		$(this).siblings('a').css({'border-color':'transparent'});
		$(this).css({'border-color':'#aaaaaa'});
	});
	
	$('.lightbox_trigger').click(function(e) {
		
		e.preventDefault();
		
		var image_href = $(this).attr("href");
		
		if ($('#lightbox').length > 0) {
			
			$('#imgbox').html('<img src="' + image_href + '" /><p><i class="icon-remove icon-white"></i></p>');
		   	
			$('#lightbox').slideDown(500);
		}
		
		else { 
			var lightbox = 
			'<div id="lightbox" style="display:none;">' +
				'<div id="imgbox"><img src="' + image_href +'" />' + 
					'<p><i class="icon-remove icon-white"></i></p>' +
				'</div>' +	
			'</div>';
				
			$('body').append(lightbox);
			$('#lightbox').slideDown(500);
		}
		
	});
	

	$('#lightbox').live('click', function() { 
		$('#lightbox').hide(200);
	});
	
});

