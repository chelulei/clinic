@section('script')

    <script type="text/javascript">

        $('#username').on('blur', function() {
            var thename = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = thename.replace(/&/g, '-and-')
                    .replace(/[^a-z0-9-]+/g, '-')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });

//delete modal script

     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("backend.inventories.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }


//Add modal script

$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});


$(document).on('submit', 'form#frm', function (event) {
    event.preventDefault();
    var form = $(this);
    var data = new FormData($(this)[0]);
    var url = form.attr("action");

    $.ajax({
        type: form.attr('method'),
        url: url,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {

            $('.is-invalid').removeClass('is-invalid');

            if (data.fail) {
                for (control in data.errors) {
                    $('input[name=' + control + ']').addClass('is-invalid');
                    $('#error-' + control).html(data.errors[control]);
                }
            } else {

                $('#modalForm').modal('hide');
                 $('#message').html('');
                  location.reload();
                    ajaxLoad(data.redirect_url);
                $('#message').append(
                  '<div class="alert alert-success alert-dismissable">'+
                    '<button type="button" class="close" data-dismiss="alert">'+
                        '<span aria-hidden="true">&times;</span>'+
                        '<span class="sr-only">Close</span>'+
                    '</button>'+
                    data.message+
                  '</div>'
                );
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert("Error: " + errorThrown);
        }
    });
    return false;
});

function ajaxLoad(filename, content) {
    content = typeof content !== 'undefined' ? content : 'content';
    $('.loading').show();
    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            $("#" + content).html(data);
            $('.loading').hide();
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}

// insert modal
$('#modalForm').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    ajaxLoad(button.data('href'), 'modal_content');
});

$('#modalForm').on('shown.bs.modal', function () {
    $('#focus').trigger('focus')
});



// edit modal
$('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget)
      var name = button.data('myname')
       var quantity = button.data('myqnty')
      var inv_id = button.data('inventoryid')
      var modal = $(this)

      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #inv_id').val(inv_id);
      modal.find('.modal-body #quantity').val(quantity);
})
    </script>

    @endsection
