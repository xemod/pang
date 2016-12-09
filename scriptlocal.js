function onDownload() {
	document.location.href = '/sites/default/files/attachment/proposal.docx&nid=7535';
}

$("document").ready(function(){

    $("#proposaldoc").change(function() {
        if(($("#proposaldoc")[0].files[0].size) > 524288){
					alert("ไฟล์เกินขนาด 500kb");
					 $("#proposaldoc").val('');
				}
    });

		$("#testgroup").click(function(){
			alert($('div.checkbox-group.required :checkbox:checked').length );
		});

		$('#i-submit').click(function() {
			$(":input[required]").each(function () {
        if ($("form:first")[0].checkValidity())
          {
            $("form:first").submit();
          }
        });
		});
});




//Code Ends
