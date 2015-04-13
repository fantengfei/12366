		$(document).ready(function(){
			var trs = $("table").find("tr").length;
			var cols = $("table").find("tr:first td");
			var count = 0;
			for(var i = 0; i < cols.length; i++)
			{
			   var colspan = cols.eq(i).attr("colspan");
			   if( colspan && colspan > 1)
			   {
			      count += colspan;
			   }else{
			      count++;
			   }
			}

            //表格编辑
            $("#data_table td").bind('dblclick',function () {
                var InputType = 0;
                if ($(this).children("input").length==1) {
                var InputType = 1;
                };

                if($(this).children("textarea").length==0) {
                    if (InputType == 1) {
                        var OriginalContent = $(this).find("input").val();
                        var FullContent =  $(this).html();
                    }else{
                        var OriginalContent = $(this).html();
                    };

                    $(this).addClass("cellEditing");
                    $(this).html("<textarea>"+ OriginalContent +"</textarea>");
                    $(this).children("textarea").focus();
                    //Enter事件
                    $(this).children("textarea").keypress(function (e) {
                        if (e.which == 13) {
                            var newContent = $(this).val();
                            if (InputType == 1) {
                                newContent = FullContent.replace('value="'+ OriginalContent +'"','value="'+ newContent +'"');
                            };
                            $(this).parent().html(newContent);
                            $(this).parent().removeClass("cellEditing");
                        }
                    });
                    //失去焦点
                    $(this).children("textarea").blur(function(){
                        if (InputType == 1) {
                            $(this).parent().html(FullContent);
                        }else{
                            $(this).parent().html(OriginalContent);
                        };

                        $(this).parent().removeClass("cellEditing");
                    });
                }
            });

            //提交保存
            $("button").click(function(){
                // var url = "article.php?rec=edit_save";
                var tablehtml = $("#data_table").html();
                $('#content').text(tablehtml);
                // var tablehtml = $("#data_table").html();
                // var table_id = $("#table_id").val();
                // alert(url);
                // $.ajax({
                //     type : "post",
                //     url : url,
                //     data : {id:table_id,content:tablehtml},
                //     timeout:1000,
                //     success:function(data){
                //         alert(data);
                //         window.close();
                //         //$("#content").html(data);//要刷新的div
                //     },
                //     error: function() {
                //        alert("失败，请稍后再试！");
                //     }
                // });
            });
        });


