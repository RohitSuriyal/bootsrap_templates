<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Include jQuery UI CSS (optional for styling) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Hello, world!</title>
</head>

<body>
    <form id="form_submit">
        <div class="table-responsive">
            <table class="table" style="width:100%" id="dynamic_field_ch_notes_t">
                <thead>
                    <tr>
                        <th class="index sequenceN" style="width:10%">
                            S.No</th>
                        <th class="itemlabel">
                            Notes Name</th>
                        <th class="itemlabel">
                            Notes URL</th>
                        <th class="itemlabel" style="width:10%">
                            Sort Order</th>
                        <th class="itemlabel" style="width:15%">
                            Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="dynamic_field_ch_notes">
                    <tr id="rowNotes">
                        <td class="index sequenceN">
                            1</td>
                        <td> <input type="text" name="nptitle[]" id="nptitle1" placeholder="PDF title" class="form-control first" />
                        </td>
                        <td> <input type="text" min="1" name="npurl[]" id="npurl1" placeholder="PDF url" class="form-control first" />
                        </td>
                        <td> <input type="number" readonly min="1" name="npsort_order[]" id="npsort_order1" value="1" placeholder="sort order" class="form-control npsort_order_class msortNewArrange " />
                        </td>
                        <td><select name="chapter_note_status[]" class="form-control" id="chapter_note_status1">
                                <option value="inactive" selected>
                                    Inactive
                                </option>
                                <option value="active">
                                    active
                                </option>
                            </select></td>
                        <td align="center">
                            <button type="button" name="add_more_n" id="add_more_n" class="btn btn-success btn-xs">+</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">Submit</button>
        </div>






    </form>
    <!-- //from here we starting the update; -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" id="form_update" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Update
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:667px!important">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_submit_update">
                        <div class="table-responsive">
                            <table class="table" style="width:100%" id="dynamic_field_ch_notes_t_update">
                                <thead>
                                    <tr>
                                        <th class="index sequenceN" style="width:10%">
                                            S.No</th>
                                        <th class="itemlabel">
                                            Notes Name</th>
                                        <th class="itemlabel">
                                            Notes URL</th>
                                        <th class="itemlabel" style="width:10%">
                                            Sort Order</th>
                                        <th class="itemlabel" style="width:15%">
                                            Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamic_field_ch_notes_update">
                                    <tr id="rowNotes">
                                        <td class="index sequenceN_update">
                                            1</td>
                                        <td> <input type="text" name="nptitle[]update" id="nptitle1_update" placeholder="PDF title" class="form-control first updatetitle" />
                                        </td>
                                        <td> <input type="text" min="1" name="npurl[]update" id="npurl1_update" placeholder="PDF url" class="form-control first  updateurl" />
                                        </td>
                                        <td> <input type="number" readonly min="1" name="npsort_order[]update" id="npsort_order1_update" value="1" placeholder="sort order" class="form-control npsort_order_class_update msortNewArrange  " />
                                        </td>
                                        <td><select name="chapter_note_status[]" class="form-control statusupdate " id="chapter_note_status1">
                                                <option value="inactive" selected>
                                                    Inactive
                                                </option>
                                                <option value="active">
                                                    active
                                                </option>
                                            </select></td>
                                        <td align="center">
                                            <button type="button" name="add_more_n" id="add_more_n_update" class="btn btn-success btn-xs">Add more+</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>






                    </form>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

<script>
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        return $helper;
    }
    updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function(i) {
            $(this).html(i + 1);
            //                                alert(i);
        });
        $('td>.msortNewArrange', ui.item.parent()).each(function(i) {
            //                                alert(i);
            $(this).val(i + 1);
        });
    };

    //


    function add_dynamic_input_field_n(count_n) { // dynamic field add for the notes   
        var button = '';
        if (count_n > 1) {
            button = '<button type="button" name="removeNotes" id="' + count_n +
                '" class="btn btn-danger btn-xs removeNotes">x</button>';
        } else {
            button =
                '<button type="button" name="add_more_n" id="add_more_n" class="btn btn-success btn-xs">+</button>';
        }
        output = '<tr id="rowNotes' + count_n + '"><td class="index sequenceN">' + count_n + '</td>';
        output += '<td><input type="text" name="nptitle[]"id="nptitle' + count_n +
            '" placeholder="PDF title" class="form-control name_list" /></td>';
        output += '<td><input type="text" name="npurl[]" id="npurl' + count_n +
            '" placeholder="PDF url" class="form-control name_listt" /></td>';
        output += '<td><input type="number" min="1" readonly name="npsort_order[]" value="' + (
                count_n) + '" id="npsort_order' + count_n +
            '" placeholder="sort order" class="form-control name_listt npsort_order_class msortNewArrange" /></td>';
        output +=
            '<td><select name="chapter_note_status[]" class="form-control" id="chapter_note_status' +
            count_n +
            '"><option value="inactive" selected>Inactive</option><option value="active">active</option><select></td>';
        output += '<td align="center">' + button + '</td>';
        output += '</tr>';
        $('#dynamic_field_ch_notes').append(output);
    }


    $("#dynamic_field_ch_notes_t>tbody").sortable({
        helper: fixHelperModified,
        stop: updateIndex
    });
    $(document).on('click', '#add_more_n', function() {
        var count_n = $('input[name="npsort_order[]"]').length;
        count_n = count_n + 1;
        add_dynamic_input_field_n(count_n);
    });
    $(document).on('click', '.removeNotes', function() {
        var row_id = $(this).attr("id");
        $('#rowNotes' + row_id).remove();
        $("#dynamic_field_ch_notes_t>tbody").sortable({
            handle: function(event, ui) {
                var obj = {};
                var len = $("#dynamic_field_ch_notes_t>tbody > tr").length;
                for (i = 0; i < len; i++) {
                    //                                #npsort_order1
                    obj[i] = $("#dynamic_field_ch_notes_t>tbody > tr").eq(i).find(
                        '.index.sequenceN').text(i + 1);
                    obj[i] = $("#dynamic_field_ch_notes_t>tbody > tr").eq(i).find(
                        '.npsort_order_class').val(i + 1);
                }
            }
        });
    });
    $(document).on('click', '.removeNotesupdate', function() {
        console.log("this is gof");
        var row_id = $(this).attr("id");

        $('#rowNotesupdate' + row_id).remove();
        $("#dynamic_field_ch_notes_t_update>tbody").sortable({
            handle: function(event, ui) {
                var obj = {};
                var len = $("#dynamic_field_ch_notes_t_update > tbody > tr").length;
                for (i = 0; i < len; i++) {
                    //                                #npsort_order1
                    obj[i] = $("#dynamic_field_ch_notes_t_update > tbody > tr").eq(i).find(
                        '.index.sequenceN_update').text(i + 1);
                    obj[i] = $("#dynamic_field_ch_notes_t_update > tbody > tr").eq(i).find(
                        '.npsort_order_class_update').val(i + 1);
                }
            }
        });
    });
    //this is for the add wala process
    $("#form_submit").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
            url: "<?php echo base_url("welcome/pdfdata") ?>",
            data: $("#form_submit").serialize(),
            type: "post",
            dataType: "json",
            success: function(data) {
                console.log("rohit sinf");
                $('#dynamic_field_ch_notes').children().not(':first').remove();
                $('.first').val('');





            }



        })






    })


    //from here update code
    function add_dynamic_input_field_n_update(count_n) { // dynamic field add for the notes   
        var button = '';
        if (count_n > 1) {
            button = '<button type="button" name="removeNotes" id="' + count_n +
                '" class="btn btn-danger btn-xs removeNotesupdate">x</button>';
        } else {
            button =
                '<button type="button" name="add_more_n" id="add_more_n" class="btn btn-success btn-xs">+</button>';
        }
        output = '<tr id="rowNotesupdate' + count_n + '"><td class="index sequenceN_update">' + count_n + '</td>';
        output += '<td><input type="text" name="nptitle[]" id="nptitle' + count_n + '" placeholder="PDF title" class="form-control name_list updatetitle" ' + (data.title ? 'value="' + data.title + '"' : '') + '/></td>';


        output += '<td><input type="text" name="npurl[]" id="npurl' + count_n + '" placeholder="PDF url" class="form-control name_listt updateurl" value="' + (data.url ? data.url : "") + '" /></td>';

        output += '<td><input type="number" min="1" readonly name="npsort_order[]_update" value="' + (
                count_n) + '" id="npsort_order' + count_n +
            '" placeholder="sort order" class="form-control name_listt npsort_order_class_update msortNewArrange" /></td>';
        output +=
            '<td><select name="chapter_note_status[]" class="form-control statusupdate" id="chapter_note_status' +
            count_n +
            '"><option value="inactive" selected>Inactive</option><option value="active">active</option><select></td>';
        output += '<td align="center">' + button + '</td>';
        output += '</tr>';
        $('#dynamic_field_ch_notes_update').append(output);
    }

    function add_dynamic_input_field_n_update_dynamic(count_n, data) { // dynamic field add for the notes   
        var button = '';

        button = '<button type="button" name="removeNotes" id="' + count_n +
            '" class="btn btn-danger btn-xs removeNotesupdate">x</button>';

        output = '<tr id="rowNotesupdate' + count_n + '"><td class="index sequenceN_update">' + count_n + '</td>';
        output += '<td><input type="text" name="nptitle[]" id="nptitle' + count_n + '" placeholder="PDF title" class="form-control name_list updatetitle" ' + (data.title ? 'value="' + data.title + '"' : '') + '/></td>';



        output += '<td><input type="text" name="npurl[]" id="npurl' + count_n + '" placeholder="PDF url" class="form-control name_listt updateurl" value="' + (data.url ? data.url : "") + '" /></td>';


        output += '<td><input type="number" min="1" readonly name="npsort_order[]_update" value="' + (
                count_n) + '" id="npsort_order' + count_n +
            '" placeholder="sort order" class="form-control name_listt npsort_order_class_update msortNewArrange" /></td>';
        output +=
            '<td><select name="chapter_note_status[]" class="form-control statusupdate" id="chapter_note_status' +
            count_n +
            '"><option value="inactive" selected>Inactive</option><option value="active">active</option><select></td>';
        output += '<td align="center">' + button + '</td>';
        output += '</tr>';
        $('#dynamic_field_ch_notes_update').append(output);
    }
    $(document).on('click', '#add_more_n_update', function() {
        var count_n = $('input[name="npsort_order[]_update"]').length;
        console.log(count_n);
        count_n = count_n + 2;
        add_dynamic_input_field_n_update(count_n, true);
    });



    //this is when you click on the update button
    $("#form_update").on("click", function() {
        $.ajax({

            url: "<?php echo basename("welcome/getdata") ?>",
            type: "post",
            dataType: "json",
            success: function(data) {
                console.log(data)
                let n = data.length;
                for (let i = 1; i <= n; i++) {

                    add_dynamic_input_field_n_update_dynamic(i + 1, data[i]);



                }


            }





        })




    })

    $("#form_submit_update").on("submit", function(e) {
        e.preventDefault();
        console.log("rohit isnfhsf  sdfsdfs")
        var titles = [];
        var url_new = [];
        var sort = [];
        var status = [];
        $(".updatetitle").each(function() {
            titles.push($(this).val());
        });
        $(".updateurl").each(function() {
            console.log($(this).val());

            url_new.push($(this).val());
        });
        $(".npsort_order_class_update").each(function() {
            sort.push($(this).val());
        });
        $(".statusupdate").each(function() {
            status.push($(this).val());
        });
        var array = {
            "title": titles,
            "url": url_new,
            "sort": sort,
            "status": status,
        }
        $.ajax({
            url: "<?php echo base_url('pdf/upadte_pdf') ?>",
            type: "POST",
            data: {
                formdata: array,
            },
            dataType: "json",
            success: function(response) {
                // Handle success response here
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle error response here
                console.error(xhr.responseText);
            }
        });










    })
</script>