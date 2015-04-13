        var isjb="0";
        var d = new Date();
        var n = d.getYear();    //年
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
            sssq_q = document.all.SSSQ_Q.value;
            sssq_z = document.all.SSSQ_Z.value;
            //alert(document.getElementById("grlxsds").checked);
            if (sssq_q == "" || sssq_z == "")
            {
                alert('请填写税款所属期间！');
                if (sssq_q == "")
                    document.all.item('SSSQ_Q').focus();
                else
                    document.all.item('SSSQ_Z').focus();

            }
            else {
                var yf = sssq_q.split("-")[1];
                if(yf.length>=2){
                    if(yf.substring(0,1)=="0"){
                        yf = yf.substring(1);
                    }
                }
                // if(isjb==1){
                //    if((sssq_q.split("-")[0]==2013&&parseInt(yf)<4)||parseInt(sssq_q.split("-")[0])<2013){
                //     alert("季报2013年4月份之前的数据，请到财务报表2007查询打印中查询！");
                //     return;
                //   }
                // }else{
                // if((sssq_q.split("-")[0]==2013&&parseInt(yf)<5)||parseInt(sssq_q.split("-")[0])<2013){
                //     alert("2013年5月份之前的数据，请到财务报表2007查询打印中查询！");
                //     return;
                // }
                // }
                if (confirm('要进行打印？')) {
                    form1.action = printDo + "&sssq_q=" + sssq_q + "&sssq_z=" + sssq_z + "&isnb=0";
                    form1.target = '_self';
                    window.status = form1.action;
                    form1.submit();
                }
            }
            window.status = '';
        }
        window.status = '';
