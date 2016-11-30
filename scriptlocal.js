function onDownload() {
	document.location.href = 'https://www.hsri.or.th/sites/all/modules/contrib/pubdlcnt/pubdlcnt.php?file=/sites/default/files/attachment/proposal.docx&nid=7535';
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
