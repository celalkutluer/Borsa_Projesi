
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DataTables example - Basic initialisation</title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=1e8de0ccb49088c11a0062cfc464a998">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../extensions/Editor/css/editor.dataTables.min.css">
    <style class="init">

    </style>
    <script src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>
    <script src="/media/js/dynamic.php?comments-page=examples%2Fsimple%2Fsimple.html" async></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="../../extensions/Editor/js/dataTables.editor.min.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/editor-demo.js"></script>
    <script class="init">



        var editor; // use a global for the submit and return data rendering in the examples

        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: "../php/staff.php",
                table: "#example",
                fields: [ {
                    label: "First name:",
                    name: "first_name"
                }, {
                    label: "Last name:",
                    name: "last_name"
                }, {
                    label: "Position:",
                    name: "position"
                }, {
                    label: "Office:",
                    name: "office"
                }, {
                    label: "Extension:",
                    name: "extn"
                }, {
                    label: "Start date:",
                    name: "start_date",
                    type: "datetime"
                }, {
                    label: "Salary:",
                    name: "salary"
                }
                ]
            } );

            $('#example').DataTable( {
                dom: "Bfrtip",
                ajax: "../php/staff.php",
                columns: [
                    { data: null, render: function ( data, type, row ) {
                            // Combine the first and last names into a single table field
                            return data.first_name+' '+data.last_name;
                        } },
                    { data: "position" },
                    { data: "office" },
                    { data: "extn" },
                    { data: "start_date" },
                    { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
                ],
                select: true,
                buttons: [
                    { extend: "create", editor: editor },
                    { extend: "edit",   editor: editor },
                    { extend: "remove", editor: editor }
                ]
            } );
        } );
    </script>
</head>

<div class="fw-container">
    <div class="fw-body">
        <div class="content">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

