		$(document).ready(function(){

            //表格编辑
            $("#data_table td").bind('dblclick',function () {
                if($(this).children("textarea").length==0) {
                    var OriginalContent = $(this).html();
                    $(this).addClass("cellEditing");
                    $(this).html("<textarea>"+ OriginalContent +"</textarea>");
                    $(this).children("textarea").focus();
                    //Enter事件
                    $(this).children("textarea").keypress(function (e) {
                        if (e.ctrlKey && e.which == 13 || e.which == 10) {
                            var newContent = $(this).val();
                            $(this).parent().html(newContent);
                            $(this).parent().removeClass("cellEditing");
                        }
                    });
                    //失去焦点
                    $(this).children("textarea").blur(function(){
                        $(this).parent().html(OriginalContent);
                        $(this).parent().removeClass("cellEditing");
                    });
                }
            });

            //提交保存
            $("button").click(function(){
                // var url = "article.php?rec=" + $(this).val();
                var tablehtml = $("#data_table").html();
                $('#content').text(tablehtml);
                // if ($(this).val() == 'table_save') {
                //     var id = $("#id").val();
                // }else{
                //     var id = $("#template_id").val();
                // }
                // var time_year = $("#year").val();
                // var time_month = $("#month").val();
                // $.ajax({
                //     type : "post",
                //     url : url,
                //     data : {id:id,content:tablehtml,year:time_year,month:time_month},
                //     success:function(msg){
                //         alert(msg);
                //         window.close();
                //         //$("#content").html(data);//要刷新的div
                //     },
                //     error: function(XMLHttpRequest, textStatus, errorThrown){
                //         alert(textStatus);
                //     },
                // });
            });
        });


