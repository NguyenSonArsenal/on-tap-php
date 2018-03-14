$(document).ready(function() {

    // Kiem tra input co empty khong ?
    function isEmpty(str) {
        return (!str || 0 === str.length || !str.trim());
    }


    // enter input_todo to add todo
    $('#input_todo').on('keypress', function (e) {
        if(e.which === 13){
            var txt_todo = $(this).val();

            if(!isEmpty(txt_todo))
            {
                var str =
                    '<div class="view">' +
                        '<input class="checkbox" type="checkbox">' +
                        '<label class="todo">'+txt_todo+'</label>' +
                        '<a class="destroy"><i class="fa fa-trash-o" aria-hidden="true"></i></a>'+
                    '</div>';

                $('.main').append(str);
                document.getElementById("myList").appendChild(node);

                $(this).val('');
            }
            else
            {
                console.log('empty oy');
            }
        }
    });

    // toggele checkbox
    $('.toggle_check_all_checkbox').click(function () {
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        }
        else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });


    // event delete a todo

    $('.destroy').click(function () {
        console.log(1);
        console.log($(this));
    });



});