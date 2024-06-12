var myVar = setInterval(LoadData, 2000);

http_request = new XMLHttpRequest();

function LoadData() {
    $.ajax({
        url: 'view.php',
        type: "POST",
        dataType: 'json',
        success: function(data) {
            $('#MyTable tbody').empty();
            for (var i = 0; i < data.length; i++) {
                var commentId = data[i].id;
                if (data[i].parent_comment == 0) {
                    var row = $('<tr><td><b style="color: #0b5967;">@' + data[i].student + ' [' + data[i].date + ']</i></b></br><u>Тема:</u> <b>' + data[i].topic_name + '</b><br><br> <p style="color: #0b5967;">' + data[i].post + '</br><a data-toggle="modal" data-id="' + commentId + '" title="Додати" class="open-ReplyModal" href="#ReplyModal">Відповісти</a>' + '</p></td></tr>');
                    $('#record').append(row);
                    for (var r = 0; (r < data.length); r++) {
                        if (data[r].parent_comment == commentId) {
                            var comments = $('<tr><td style="padding-left:80px"><b style="color: #0b5967;">@' + data[r].student + ' [' + data[r].date + ']</i></b></br><p style="color: black;">' + data[r].post + '</p></td></tr>');
                            $('#record').append(comments);
                        }
                    }
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Помилка: ' + textStatus + ' - ' + errorThrown);
        }
    });
}

$(document).on("click", ".open-ReplyModal", function() {
    var commentid = $(this).data('id');
    $(".modal-body #commentid").val(commentid);
});

// Post data to the server
$(document).ready(function() {
    $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var id = document.forms["frm"]["Pcommentid"].value;
        var name = document.forms["frm"]["name"].value;
        var msg = document.forms["frm"]["msg"].value;
		var topic = document.forms["frm"]["topic"].value;
        if (name != "" && msg != "") {
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    msg: msg,
					topic: topic,
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $("#butsave").removeAttr("disabled");
                        document.forms["frm"]["Pcommentid"].value = "";
                        document.forms["frm"]["name"].value = "";
                        document.forms["frm"]["msg"].value = "";
						document.forms["frm"]["topic"].value = "";
                        LoadData();
                    } else if (dataResult.statusCode == 201) {
                        alert("Сталась помилка!");
                    }
                }
            });
        } else {
            alert('Заповніть всі необхідні поля!');
        }
    });
});

// Reply comment
$(document).ready(function() {
    $('#btnreply').on('click', function() {
        $("#btnreply").attr("disabled", "disabled");
        var id = document.forms["frm1"]["Rcommentid"].value;
        var name = document.forms["frm1"]["Rname"].value;
        var msg = document.forms["frm1"]["Rmsg"].value;
        if (name != "" && msg != "") {
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    msg: msg,
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $("#btnreply").removeAttr("disabled");
                        document.forms["frm1"]["Rcommentid"].value = "";
                        document.forms["frm1"]["Rname"].value = "";
                        document.forms["frm1"]["Rmsg"].value = "";
                        LoadData();
                        $("#ReplyModal").modal("hide");
                    } else if (dataResult.statusCode == 201) {
                        alert("Сталась помилка !");
                    }
                }
            });
        } else {
            alert('Заповніть всі необхідні поля!');
        }
    });
});
