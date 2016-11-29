function onDownload() {
	document.location.href = 'proposal.docx';
}

$("document").ready(function(){

    $("#proposaldoc").change(function() {
        if(($("#proposaldoc")[0].files[0].size) > 524288){
					alert("ไฟล์เกินขนาด 500kb");
					 $("#proposaldoc").val('');
				}
    });
});




//Code Ends
