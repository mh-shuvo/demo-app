$(document).on('click','#upload_btn',function (){
    $("#videoFile").click();
});

$("#videoFile").change(function () {
    $("#UploadForm")[0].submit();
})