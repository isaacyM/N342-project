<!--Font Awesome--->
<script src="https://kit.fontawesome.com/d81b469398.js" crossorigin="anonymous"></script>

<!--jQuery, Popper.js, Bootstrap js--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Template's scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<!--Script for Datatable-->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" language="javascript" src="../../extensions/Editor/js/dataTables.editor.min.js"></script>

<script type="text/javascript" language="javascript" src="../../media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>

<script type="text/javascript" language="javascript" class="init">

    $(document).ready(function() {
        var table = $('#example').DataTable();
        
            $('#example tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            } );
        
            $('#deleteButton').click( function () {
                table.row('.selected').remove().draw( false );
            } );
        } );



// var editor; // use a global for the submit and return data rendering in the examples
 
// $(document).ready(function() {
//     editor = new $.fn.dataTable.Editor( {
//         ajax: "../php/staff.php",
//         table: "#example",
//         fields: [ {
//                 label: "AdminID:",
//                 name: "AdminID"
//             }, {
//                 label: "First name:",
//                 name: "FirstName"
//             }, {
//                 label: "Last name:",
//                 name: "LastName"
//             }, {
//                 label: "MiddleName",
//                 name: "MiddleName"
//             }, {
//                 label: "Email:",
//                 name: "Email"
//             }, {
//                 label: "Password:",
//                 name: "Password"
//             }, {
//                 label: "Level:",
//                 name: "Level"
//             }, {
//                 label: "Active:",
//                 name: "Active"
//             }
//         ],
//         formOptions: {
//             main: {
//                 scope: 'cell' // Allow multi-row editing with cell selection
//             }
//         }
//     } );
 
//     $('#example').DataTable( {
//         dom: "Bfrtip",
//         ajax: "../php/staff.php",
//         columns: [
//             { data: "AdminID" },
//             { data: "FirstName" },
//             { data: "LastName" },
//             { data: "MiddleName" },
//             { data: "Email" },
//             { data: "Password" },
//             { data: "Level" },
//             { data: "Active"}
//         ],
//         select: true,
//         buttons: [
//             { extend: "create", editor: editor },
//             { extend: "edit",   editor: editor },
//             { extend: "remove", editor: editor },
//             "selectRows",
//             "selectColumns",
//             "selectCells",
//             "selectNone"
//         ]
//     } );
// } );
</script>