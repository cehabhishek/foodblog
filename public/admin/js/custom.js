function csrfToken() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
}

function wordCount(field) {
    let number = 0;
    // Split the value of input by
    // space to count the words
    let matches = $(field)
        .val()
        .split(" ");
    // Count number of words
    number = matches.filter(function(word) {
        return word.length > 0;
    }).length;
    // Final number of words
    $("#final").val(number);
    if (number > 28) {
        $("#showError").show();
        $("#meta_description_word").removeClass("text-success");
        $("#meta_description_word").addClass("text-danger");
        $("#showError").text(
            "Meta description is too long please ente only 160 word"
        );
    } else {
        $("#meta_description_word").removeClass("text-danger");
        $("#meta_description_word").addClass("text-success");
        $("#showError").hide();
    }
    $("#meta_description_word").addClass("text-success");
    $("#meta_description_word").text(` Total Word ${number}`);
}

$(function() {
    $("#showError").hide();
    $("#short_description").each(function() {
        let input = "#short_description";
        // Count words when keyboard
        // key is released
        $(this).keyup(function() {
            wordCount(input);
        });
    });
});

// $("#category_id").on("change", function() {
//     csrfToken();
//     let category_id = $("#category_id").val();
//     $.ajax({
//         url: "get_sub_category ",
//         method: "POST",
//         data: {
//             category_id: category_id
//         },
//         dataType: "json",
//         success: function(response) {
//             console.log(response.sub_categoreis);
//             $("#sub_category").empty();
//             $.each(response.sub_categoreis, function(index, sub_category) {
//                 var sub_category =
//                     '<option value="' +
//                     sub_category["name"] +
//                     '">' +
//                     sub_category["name"] +
//                     "</option>";
//                 $("#sub_category").append(sub_category);
//             });
//         },
//         error: function() {}
//     });
// });

$("#jquery-tagIt-default").tagit({
    fieldName: "keywords[]",
    allowSpaces: true,
    tagLimit: 10
});

$("#thumbnail").on("change", function() {
    var showThumbnail = document.querySelector("#show_thumbnail");
    var getThumbnail = document.querySelector("#thumbnail").files[0];
    var studentImagReeader = new FileReader();

    studentImagReeader.onloadend = function() {
        showThumbnail.src = studentImagReeader.result;
    };

    if (getThumbnail) {
        studentImagReeader.readAsDataURL(getThumbnail);
    } else {
        showThumbnail.src = "";
    }
});

//media copy
var clipboard = new ClipboardJS("[data-toggle='clipboard']");
clipboard.on("success", function(e) {
    $(e.trigger).tooltip({
        title: "Copied",
        placement: "top"
    });
    $(e.trigger).tooltip("show");
    setTimeout(function() {
        $(e.trigger).tooltip("dispose");
    }, 500);
});

// $('.messageBox').hide();
// $("#imageUpload").submit(function(e) {
//     $('.messageBox').show();
//     e.preventDefault();
//     csrfToken();

//     let formData = new FormData($(this)[0]);
//     $.ajax({
//         url: "upload_image",
//         method: "POST",
//         data: formData,
//         processData: false,
//         cache: false,
//         contentType: false,
//         success: function(response) {
//             console.log(response.status);
//             if (response.status === 409) {
//                 $('.messageBox').show();
//                 $("#message").text(response.message)
//                 $('.messageBox').removeClass("alert-success");
//                 $('.messageBox').addClass("alert-danger");

//             }
//             if (response.status === 200) {
//                 console.log(response)
//                 $('.messageBox').show();
//                 $("#message").text(response.message)
//                 $('.messageBox').removeClass("alert-danger");
//                 $('.messageBox').addClass("alert-success");
//                 $("#images").append(' <div class="d-flex"><div class="flex-1 d-flex"><div class="input-group"> <input id="'+response.imageName+'" type="text" class="form-control" value="'+response.image+'" /> <button class="btn btn-dark" type="button" data-toggle="clipboard" data-clipboard-target="#'+response.imageName+'"><i class="fa fa-clipboard"></i></button></div></div></div><hr />')
//             }
//         },
//         error: function(error) {
//             console.log(error);
//         }
//     });
// });
