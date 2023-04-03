/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */

$(document).ready(function () {
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
            bLengthChange: false, //thought this line could hide the LengthMenu
            bInfo: false,
            bSort: false,
            responsive: true,          
            dom: `<"datatable-header"<"row"<"col-sm-4 py-1"B><"col-sm-8"f>>>
                      <"datatable-scroll-wrab"t>
                      <"datatable-footer"p>`,
            language: {
                search: '<div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                searchPlaceholder: "Type to Search...",
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
                        className: "btn btn-flat-dark btn-labeled btn-labeled-start dropdown-toggle",
                    },
                ],
            },
            stateSave: true,
            columnDefs: [
                {
                    targets: 0,
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
