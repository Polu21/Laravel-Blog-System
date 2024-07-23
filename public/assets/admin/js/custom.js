jQuery(document).ready(function ($) {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});

// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function (e) {
//             jQuery("#image-preview").attr("src", e.target.result);
//             jQuery("#image-preview").hide();
//             jQuery("#image-preview").fadeIn(650);
//         };
//         reader.readAsDataURL(input.files[0]);
//     }
// }

// jQuery("#file-input").change(function () {
//     readURL(this);
// });

