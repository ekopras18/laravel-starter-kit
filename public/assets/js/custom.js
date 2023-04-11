/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */

function edit(id, pm_key, id_data, id_form) {
    var data = document.getElementById(id_data).value;
    console.log(JSON.parse(data));
    var dataobj = JSON.parse(data);
    for (var i = 0; i < dataobj.length; i++) {
        var a = "dataobj[i]."+pm_key;
        if (eval(a) == id) {
            var field = document.getElementById(id_form).value;
            var fieldobj = JSON.parse(field);
            //masukkan PK dulu
            // document.getElementById('id').value = id;
            //masukkan field yang lain
            for (var j = 0; j < fieldobj.length; j++) {
                var b = "dataobj[i]." + fieldobj[j].field;
                // console.log(fieldobj[j].type);
                if (fieldobj[j].type != "password") {
                    if (fieldobj[j].type == "combo") {
                        // console.log(fieldobj[j].field, eval(b));
                        document
                            .getElementById(fieldobj[j].field)
                            .removeAttribute("wire:model");
                        console.log(eval(b));
                        $("#" + fieldobj[j].field)
                            .val(eval(b))
                            .find(":selected")
                            .trigger("change");
                    }
                    // else if (fieldobj[j].type == 'autocomplete') {
                    // setAutocompleteVal(fieldobj[j].url, eval(b), fieldobj[j].text, fieldobj[j].field);
                    // } else if (fieldobj[j].type == 'autocomplete_new') {
                    // var id = 'dataobj[i].' + fieldobj[j].field + 'Id';
                    // var nama = 'dataobj[i].' + fieldobj[j].field + 'Nama';

                    // $('#' + fieldobj[j].field + 'Id').val(eval(id));
                    // $('#' + fieldobj[j].field + 'Kode').val(eval(id));
                    // $('#' + fieldobj[j].field + 'Nama').val(eval(nama));

                    // setSelect2(eval(id), eval(nama), fieldobj[j].field);

                    // } else if (fieldobj[j].type == 'angka') {
                    // $('#' + fieldobj[j].field).autoNumeric('set', eval(b));
                    // }
                    else {
                        document
                            .getElementById(fieldobj[j].field)
                            .removeAttribute("wire:model");

                        document.getElementById(fieldobj[j].field).value =
                            eval(b);
                    }
                } else {
                    document
                        .getElementById(fieldobj[j].field)
                        .removeAttribute("wire:model");
                }
            }
        }
    }
}

$(document).ready(function () {

    // Hide messages
	setTimeout(function() {
        $('#messages').addClass('d-none');
    }, 3000);

    // Active Menu
    var path = location.pathname.split("/");
    if (path[1] != "") {
        // set active menu
        $("ul.nav.nav-sidebar li a").each(function () {
            var href = $(this).attr("href").split("/");
            if (href[3] == path[1]) {
                $(this)
                    .addClass("active")
                    .parent()
                    .parent()
                    .addClass("show")
                    .parent("li")
                    .addClass("nav-item-open"); // Level 2
                $(this)
                    .addClass("active")
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("show")
                    .parent("li")
                    .addClass("nav-item-open"); // Level 3
                $(this)
                    .addClass("active")
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("show")
                    .parent("li")
                    .addClass("nav-item-open"); // Level 4
                $(this)
                    .addClass("active")
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("show")
                    .parent("li")
                    .addClass("nav-item-open"); // Level 5
            }
        });
    }
});

const plugins = (function () {
    // Basic Datatable examples
    const _datatable = function () {
        if (!$().DataTable) {
            console.warn("Warning - datatables.min.js is not loaded.");
            return;
        }

        // Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            bInfo: false,
            bSort: false,
            responsive: true,
            lengthChange: false,
            dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                searchPlaceholder: "Type to filter...",
                // lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                paginate: {
                    first: "First",
                    last: "Last",
                    next: document.dir == "rtl" ? "&larr;" : "&rarr;",
                    previous: document.dir == "rtl" ? "&rarr;" : "&larr;",
                },
            },
        });

        // State saving

        $(".datatable").DataTable({
            buttons: {
                buttons: [
                    // {
                    //     extend: 'excelHtml5',
                    //     className: 'btn btn-light',
                    //     exportOptions: {
                    //         columns: ':visible'
                    //     }
                    // },
                    // {
                    //     extend: 'pdfHtml5',
                    //     className: 'btn btn-light',
                    //     exportOptions: {
                    //         modifier: {
                    //           page: 'current'
                    //       }
                    //     },
                    //     orientation: 'landscape',
                    //     pageSize: 'A4'
                    // },
                    {
                        extend: "colvis",
                        text: `<span class="btn-labeled-icon bg-dark rounded text-white">
                                          <i class="ph-check-square-offset"></i>
                                      </span>`,
                        className:
                            "btn btn-flat-dark btn-labeled btn-labeled-start dropdown-toggle",
                    },
                ],
            },
            stateSave: true,
            columnDefs: [
                {
                    // targets: -1,
                    visible: false,
                },
            ],
        });
    };

    return {
        init: function () {
            _datatable();
        },
    };
})();

document.addEventListener("DOMContentLoaded", function () {
    plugins.init();
});
