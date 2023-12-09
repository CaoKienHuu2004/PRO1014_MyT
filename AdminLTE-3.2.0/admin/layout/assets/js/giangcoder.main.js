// $(document).ready(function() {
//     const fileInputs = $('.file-input');
//     const deleteButtons = $('.delete-button');
//     const labels = $('.preview-secondary-image');

//     fileInputs.each(function(index, input) {
//         $(input).change(function() {
//             if (input.files && input.files[0]) {
//                 const reader = new FileReader();
//                 reader.onload = function(e) {
//                     labels.eq(index).css('backgroundImage', `url(${e.target.result})`);
//                     labels.eq(index).css('backgroundSize', 'cover');
//                     labels.eq(index).css('backgroundPosition', 'center');
//                     labels.eq(index).html('<div style="font-size: 40px;"></div>');
//                     deleteButtons.eq(index).css('display', 'block');
//                 };
//                 reader.readAsDataURL(input.files[0]);
//             }
//         });

//         deleteButtons.eq(index).click(function() {
//             input.value = '';
//             labels[index].style.backgroundImage = '';
//             deleteButtons.eq(index).css('display', 'none');
//             labels.eq(index).html('<div style="font-size: 40px;">+</div>');
//         });
//     });
// });
