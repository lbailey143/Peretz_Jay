$(document).ready(function() {
	function getFiber() {
		$.ajax({
       type: "GET",
       url: "php/get-fiber.php",
       datatype: "json",
       async: false
      }).done(function(data) {
		   fiberdata = $.parseJSON(data);
	  });
	  return fiberdata;
	};
	function showArtists() {		
		var content = '<div id="artistdisplay" class="tabbable">'; 
        content += '<ul class="nav nav-tabs">';
		$.each(fiberdata, function (index,value) {
			content += '<li><a href="#fiberartist'+fiberdata[index].idfiberartist+'" data-toggle="tab">'+fiberdata[index].fiberartistname+'</a></li>';
		});  
		//content += '<li><a href="#addgenre" data-toggle="modal"><i class="icon-plus"></i></a></li>'; 
        content += '</ul>';  		     
		content += '</div>';
		$("#artists_galleries").html(content);
		$("#artistdisplay ul li:first").addClass("active");
		showArtists();
		//$("#newgenre").unbind("click");
		//$("#newgenre").click(function() {
		//$.ajax({
		  // type: "POST",
		   //data: {genre:$("#newgenrename").text()},
		   //url: "php/new-genre.php"
		  	//	}).done(function(data) {
				//   music = getMusic();
				  // showGenres();
				   //$("#addgenre").modal("hide");
				   //$("#data-update").show();
		  			//});
		//});
		$('ul.nav-tabs a[data-toggle="tab"]').on('shown', function (e) {
 			$("#titles").html("");
		})		
	}
	function showGalleries() {
		var content = '<div class="tab-content">';
		$.each(fiberdata, function (index, value) {
			 content += '<div class="tab-pane row" id="fiberartistname'+fiberdata[index].idfiberartist+'">';
			 if (fiberdata[index].fibergalleries) {
			 $.each(fiberdata[index].fibergalleries, function (index2, value2) { 
			      content += '<article class="span2 hero-unit">';
				  content += '<h2>'+fiberdata[index].fibergalleries[index2].galleryname+'</h2>';
				  //content += '<img src="php/utils/get-artist-image.php?id='+index2+'" />';
				  content += '</article>';
				  //*******content += showAlbums(index,index2);
			 });
			 }
    	     content += '</div>';
		});
  		content += '</div>';
		$("#artistdisplay").append(content);
		$("#artistdisplay div.tab-content div.tab-pane:first").addClass("active");
		$("article.gallery").unbind('click');
		$("article.gallery").click(function(e) {
			showTitles($(this).attr('data-idfiberartist'),$(this).attr('data-idfibergallery'));
		});
	}
	
	function showTitles(idfiberartist,idfibergallery) {
		if (fiberdata[idfiberartist].fibergalleries[idfibergallery].fiberartworks) {
			var content = '<section  data-idfiberartist='+idfiberartist+' data-idfibergallery='+idfibergallery+'   class="fibertitle span6">';
		    content += '<h3>Titles&nbsp;<a  data-idfiberartist='+idfiberartist+' data-idfibergallery='+idfibergallery+' </a></h3>';
			$.each(fiberdata[idfiberartist].fibergalleries[idfiberartist].fiberartworks,function(index,value) {
				content += '<article class=span6  data-idfiberartwork=';
				content += index;
				content += '><p contenteditable class="span3 fibertitle">';	
				content += value.fibertitle;			
				content += '</p>';
				//content += '<p contenteditable class="span4 trackfile">';	
				//content += value.url;			
				//content += '</p>';
				//content += '<span class="label span1 update-track">Update</span><span class="label label-important span1 delete-track">Delete</span></article>';
			});
			content += "</section>";
			$("#titles").html(content);
			//$("#plustitle").unbind("click");
			//$("#plustitle").click(function() {
				//$("#addtitle").modal("show");
				//$("#newtitle").attr("data-idfibergallery");
				//$("#newtitle").attr("data-idfibergallery");
				//$("#newtitle").attr("data-idfiberartist");
				//$("#data-update").show();
			//});
			//$(".update-title").unbind("click");
			//$(".update-title").click(function() {
				//genres[$(this).parent().parent().attr("data-genreid")].artists[$(this).parent().parent().attr("data-artistid")].albums[$(this).parent().parent().attr("data-albumid")].tracks[$(this).parent().attr("data-trackid")].track = $(this).parent().find(".trackname").text();
	//			genres[$(this).parent().parent().attr("data-genreid")].artists[$(this).parent().parent().attr("data-artistid")].albums[$(this).parent().parent().attr("data-albumid")].tracks[$(this).parent().attr("data-trackid")].url = $(this).parent().find(".trackfile").text();				
		//		showTracks($(this).parent().parent().attr("data-genreid"),$(this).parent().parent().attr("data-artistid"),$(this).parent().parent().attr("data-albumid"));
			//	$.ajax({
				//	type:"POST",
					//url:"php/update-track.php",
					//data:{track:$(this).parent().find(".trackname").text(),url:$(this).parent().find(".trackfile").text(), trackid:$(this).parent().attr("data-trackid")}
	//			}).done(function(data) {					
					//$("#data-update").show();
		//		});
			//});
			//$(".delete-track").unbind("click");
			//$(".delete-track").click(function() {
				//delete genres[$(this).parent().parent().attr("data-genreid")].artists[$(this).parent().parent().attr("data-artistid")].albums[$(this).parent().parent().attr("data-albumid")].tracks[$(this).parent().attr("data-trackid")];
		        //showTracks($(this).parent().parent().attr("data-genreid"),$(this).parent().parent().attr("data-artistid"),$(this).parent().parent().attr("data-albumid"));
	//			$.ajax({
		//			type:"POST",
			//		url:"php/delete-track.php",
				//	data:{trackid:$(this).parent().attr("data-trackid")}
				//}).done(function(data) {
				//	$("#data-update").show();
				//});
			//});
		//} else {
			$("#track").html("");
		}
	}
	//$("#newtitle").click(function() {
		//$.ajax({
       //type: "POST",
       //url: "php/new-title.php",
	   //data : { albumid: $("#newtrack").attr("data-albumid"), track: $("#newtrackname").text()}
      //}).done(function(data) {
		//  var newtrack = {albums_idalbums: $("#newtrack").attr("data-albumid") , idtracks : data , track:$("#newtrackname").text() };
		  //music[$("#newtrack").attr("data-genreid")].artists[$("#newtrack").attr("data-artistid")].albums[$("#newtrack").attr("data-albumid")].tracks[data] = newtrack;
	//	  $("#addtrack").modal("hide");
		// showTracks($("#newtrack").attr("data-genreid"),$("#newtrack").attr("data-artistid"),$("#newtrack").attr("data-albumid"));
	  //});
	//});
	//$("#data-update").hide();
	//$("#addtrack").modal("hide");
	var fiberdata = getFiber();
	console.log(fiberdata);	
	showArtists();  
});