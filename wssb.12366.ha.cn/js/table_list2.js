        var isjb="0";
        var d = new Date();
        var n = d.getFullYear();    //年
        var y = d.getMonth(); //月
        var printDo = '';
        function setDo(url) {
            window.status = url;
            printDo = url;
        }
        function queryPrint()
        {
            if (printDo.length == 0) {
                alert('请选择要打印的报表类型');
                return;
            }
            window.status = '准备打印....';
            time_year = document.all.time_year.value;
            time_month = document.all.time_month.value;

            if (time_year == "" || time_month == "")
            {
                alert('请填写税款所属期间！');
                if (time_year == "")
                    document.all.item('time_year').focus();
                else
                    document.all.item('time_month').focus();

            }
            else {
                var yf = time_month;
                if(yf.length>=2){
                    if(yf.substring(0,1)=="0"){
                        yf = yf.substring(1);
                    }
                }
                if (confirm('要进行打印？')) {
                    form1.action = printDo + "&sssq_z=" + time_year + "-" + time_month;
                    form1.target = '_self';
                    window.status = form1.action;
                    form1.submit();
                }
            }
            window.status = '';
        }
        window.status = '';
