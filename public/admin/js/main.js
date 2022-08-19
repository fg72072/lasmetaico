$("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
        $('#profileImage').attr('src',
            window.URL.createObjectURL(uploader.files[0]));
    }
}

$("#imageUpload").change(function() {
    fasterPreview(this);
});

$(document).on("click","#secondImage",function(e){
    $("#secondimageUpload").click();
})

function secondfasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
        $('#secondImage').attr('src',
            window.URL.createObjectURL(uploader.files[0]));
    }
}

$(document).on("change","#secondimageUpload",function(){
    secondfasterPreview(this);
})

$(".edit").click(function(){
    var parent = $(this).parent().parent();
    if(parent.find(".icon").hasClass("icon")){
        $(".image-section .form-group").remove()
        $(".image-section").append(`
        <div class="form-group">
            <div id="profile-container">
                <img class="" id="secondImage" src="${parent.find(".icon img").attr('src')}" data-holder-rendered="true" max-height="10px;" max-width="100px;" style="height:100px;width:100px;">
            </div>
            <br>
            <input type="hidden" name="image" value="true"/>
            <input id="secondimageUpload" type="file" name="icon" placeholder="Photo" capture="" value="" style="display:none">
        </div>
        `)
    }
    else{
        $(".image-section .form-group").remove()
    }
    $("input[name='id']").val(parent.find(".id").text())
    $(".update-form input[name='heading']").val(parent.find(".heading").text())
    $(".update-form input[name='subheading']").val(parent.find(".subheading").text())
    $(".update-form textarea[name='description']").val(parent.find(".description").text())
})

  $(document).on('submit', '#delete-form', function(e) {
        e.preventDefault();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: $(this).attr('action'),
                        method: $(this).attr('method'),
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            location.reload();
                            swal("Poof! Data has been deleted!", {
                                icon: "success",
                            });                            
                        }
                    });
                }
            });
    });
    $('#secondTable').DataTable();