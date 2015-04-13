/*
*编写人:赵振国
*编写时间：2005-09-4
 修改：鲁信文 2005-11-04
*/
//提取数据
function tq()
{
    document.all.bc.disabled = true;
    document.all.dy.disabled = true;
    document.all.sc.disabled = true;
    document.all.tqsj.disabled=true;
    logout=1;
    form1.action="/getSB_ZZS_YBNS_FROM_FB.do";
    document.form1.target = "submitframe";
    form1.submit();
}

function Mover(src)
{
    src.style.border = '1px solid #3068dd';
    src.style.background = '#ffffff';
    src.select();
}

function Mout(src)
{
    src.style.border = '0px';
    src.style.background = '';
}
//修改本年累计数是否为只读
function ifUpdate()
{
    if (document.all.ifupdate.checked)
    {
        
        for (i = 1; i <= 38; i++)
        {
            switch (i)
                    {
                case 1: case 2: case 3: case 4:case 5:case 6:
                document.all.item('COL0' + i + '02').readOnly = false;
                document.all.item('COL0' + i + '04').readOnly = false;
                break;
                case 11:case 12:case 14:case 18:case 19:case 21:case 23:
                case 24:case 25:case 27: case 30:case 31:case 32:
                document.all.item('COL' + i + '02').readOnly = false;
                document.all.item('COL' + i + '04').readOnly = false;
                break;
                case 8:case 9:case 7:
                 document.all.item('COL0' + i + '02').readOnly = false;
                break;
                case 10:case 15:case 13:case 16:case 20:case 22:case 26:case 36:case 37:case 38:
                document.all.item('COL' + i + '02').readOnly = false;
                break;
                case 35:
                document.all.item('COL' + i + '04').readOnly = false;
                break;
                case 17:case 28:case 29:case 33:case 34:
            //document.all.item('COL' + i + '01').readOnly = true;
                break;
                default: ;
//                    document.all.item('COL' + i + '02').readOnly = false;
//                    document.all.item('COL' + i + '04').readOnly = false;
            }
        }
        /**
         * //混营挂账的纳税人
         * 第13栏上期留抵-累计数始终为0；且不可修改
         * 第18栏实际抵扣-累计数始终为0；且不可修改
         * 第20栏期末留抵-累计数始终为0；且不可修改
         */
        if(NSR_YGZ_BZ!="3"){
            document.all.item('COL1302').readOnly = true;
            document.all.item('COL1802').readOnly = true;
            document.all.item('COL2002').readOnly = true;
            ynse_19();
        }
    }
    else
    {
        for (i = 1; i <= 38; i++)
        {
            switch (i)
                    {
                case 1: case 2: case 3: case 4:case 5:case 6:
                document.all.item('COL0' + i + '02').readOnly = true;
                document.all.item('COL0' + i + '04').readOnly = true;
                break;
                case 11:case 12:case 14:case 18:case 19:case 21:case 23:
                case 24:case 25:case 27: case 30:case 31:case 32:
                document.all.item('COL' + i + '02').readOnly = true;
                document.all.item('COL' + i + '04').readOnly = true;
                break;
                 case 8:case 9:case 7:
                 document.all.item('COL0' + i + '02').readOnly = true;
                break;
                case 10:case 15:case 13:case 16:case 20:case 22:case 26:case 36:case 37:case 38:
                document.all.item('COL' + i + '02').readOnly = true;
                break;
                case 35:
                document.all.item('COL' + i + '04').readOnly = true;
                break;
               case 17:case 28:case 29:case 33:case 34:
            //document.all.item('COL' + i + '01').readOnly = true;
                break;
                default:
//                    document.all.item('COL' + i + '02').readOnly = true;
//                    document.all.item('COL' + i + '04').readOnly = true;
            }
        }
    }
}


//修改合计数之后，将修改过的合计数为初始值赋值
function XghjsCount(what)
{

    /*
    var sname = what.name;
>>>>>>> 1.6
    if (document.all.ifupdate.checked)
    {
        for (i = 1; i <= 38; i++)
        {
            switch(i)
            {
              case 1:
                if(sname.substring(3, sname.length)=='0102')
                {
                  COL0102=what.value;
                }else if(sname.substring(3, sname.length)=='0104')
                {
                  COL0104=what.value;
                }else{}
              break;
              case 2:
                if(sname.substring(3, sname.length)=='0202')
                {
                  COL0202=what.value;
                }else if(sname.substring(3, sname.length)=='0204')
                {
                  COL0204=what.value;
                }else{}
              break;
              case 3:
                if(sname.substring(3, sname.length)=='0302')
                {
                  COL0302=what.value;
                }else if(sname.substring(3, sname.length)=='0304')
                {
                  COL0304=what.value;
                }else{}
              break;
              case 4:
                if(sname.substring(3, sname.length)=='0402')
                {
                  COL0402=what.value;
                }else if(sname.substring(3, sname.length)=='0404')
                {
                  COL0404=what.value;
                }else{}
              break;
              case 5:
                if(sname.substring(3, sname.length)=='0502')
                {
                  COL0502=what.value;
                }else if(sname.substring(3, sname.length)=='0504')
                {
                  COL0504=what.value;
                }else{}
              break;
              case 6:
                if(sname.substring(3, sname.length)=='0602')
                {
                  COL0602=what.value;
                }else if(sname.substring(3, sname.length)=='0604')
                {
                  COL0604=what.value;
                }else{}
              break;
              case 7:
                if(sname.substring(3, sname.length)=='0702')
                {
                  COL0702=what.value;
                }else{}
              break;
              case 8:
                if(sname.substring(3, sname.length)=='0802'){
                COL0802=what.value;
                }else{}
              break;
              case 9:
                if(sname.substring(3, sname.length)=='0902'){
                COL0902=what.value;
                }else{}
              break;
              case 10:
                if(sname.substring(3, sname.length)=='1002'){
                COL1002=what.value;
                }else{}
              break;
              case 11:
                if(sname.substring(3, sname.length)=='1102')
                {
                  COL1102=what.value;
                }else if(sname.substring(3, sname.length)=='1104')
                {
                  COL1104=what.value;
                }else{}
              break;
              case 12:
                if(sname.substring(3, sname.length)=='1202')
                {
                  COL1202=what.value;
                }else if(sname.substring(3, sname.length)=='1204')
                {
                  COL1204=what.value;
                }else{}
              break;
              case 13:case 17:case 20:case 28:case 29:case 33:case 34:
              break;
              case 14:
                if(sname.substring(3, sname.length)=='1402')
                {
                  COL1402=what.value;
                }else if(sname.substring(3, sname.length)=='1404')
                {
                  COL1404=what.value;
                }else{}
              break;
              case 15:
                if(sname.substring(3, sname.length)=='1502'){
                COL1502=what.value;
                }else{}
              break;
              case 16:
                  if(sname.substring(3, sname.length)=='1602'){
                COL1602=what.value;
                 }else{}
              break;
              case 18:
                if(sname.substring(3, sname.length)=='1802')
                {
                  COL1802=what.value;
                }else if(sname.substring(3, sname.length)=='1804')
                {
                  COL1804=what.value;
                }else{}
              break;
              case 19:
                if(sname.substring(3, sname.length)=='1902')
                {
                  COL1902=what.value;
                }else if(sname.substring(3, sname.length)=='1904')
                {
                  COL1904=what.value;
                }else{}
              break;
              case 21:
                if(sname.substring(3, sname.length)=='2102')
                {
                  COL2102=what.value;
                }else if(sname.substring(3, sname.length)=='2104')
                {
                  COL2104=what.value;
                }else{}
              break;
              case 22:
                  if(sname.substring(3, sname.length)=='2202'){
                COL2202=what.value;
                 }else{}
              break;
              case 23:
                if(sname.substring(3, sname.length)=='2302')
                {
                  COL2302=what.value;
                }else if(sname.substring(3, sname.length)=='2304')
                {
                  COL2304=what.value;
                }else{}
              break;
              case 24:
                if(sname.substring(3, sname.length)=='2402')
                {
                  COL2402=what.value;
                }else if(sname.substring(3, sname.length)=='2404')
                {
                  COL2404=what.value;
                }else{}
              break;
              case 25:
                if(sname.substring(3, sname.length)=='2502')
                {
                  COL2502=what.value;
                }else if(sname.substring(3, sname.length)=='2504')
                {
                  COL2504=what.value;
                }else{}
              break;
              case 26:
                  if(sname.substring(3, sname.length)=='2602'){
                COL2602=what.value;
                 }else{}
              break;
              case 27:
                if(sname.substring(3, sname.length)=='2702')
                {
                  COL2702=what.value;
                }else if(sname.substring(3, sname.length)=='2704')
                {
                  COL2704=what.value;
                }else{}
              break;
              case 30:
                if(sname.substring(3, sname.length)=='3002')
                {
                  COL3002=what.value;
                }else if(sname.substring(3, sname.length)=='3004')
                {
                  COL3004=what.value;
                }else{}
              break;
              case 31:
                if(sname.substring(3, sname.length)=='3102')
                {
                  COL3102=what.value;
                }else if(sname.substring(3, sname.length)=='3104')
                {
                  COL3104=what.value;
                }else{}
              break;
              case 32:
                if(sname.substring(3, sname.length)=='3202')
                {
                  COL3202=what.value;
                }else if(sname.substring(3, sname.length)=='3204')
                {
                  COL3204=what.value;
                }else{}
              break;
              case 35:
                  if(sname.substring(3, sname.length)=='3502'){
                COL3504=what.value;}else{}
              break;
              case 36:
                  if(sname.substring(3, sname.length)=='3602'){
                COL3602=what.value;	}else{}
              break;
              case 37:
                  if(sname.substring(3, sname.length)=='3702'){
                COL3702=what.value;	}else{}
              break;
              case 38:
                  if(sname.substring(3, sname.length)=='3802'){
                COL3802=what.value;}else{}
              break;
              default:
            }
        }

        //checkUpdate();
    }*/

}


//修改本年累计数的时候，对本年累计数和本月数累计
function checkUpdate()
{
    //if (document.all.ifupdate.checked)
    //if (document.all.zdjs.checked)
    //{
    for (i = 1; i <= 38; i++)
    {
        switch (i)
                {
            case 1: case 2: case 3: case 4: case 5: case 6:
            eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))");
//            eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents((parseFloat(COL0" + i + "02)-parseFloat(document.all.COL0" + i + "01.value)))+parseFloat(COL0" + i + "02))");
            eval("document.all.COL0" + i + "04.value=cents(parseFloat(cents(document.all.COL0" + i + "03.value))+parseFloat(COL0" + i + "04))");
        //alert(eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))"));
            break;
            case 7:  case 9:
            eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))");
            break;
            case 10: case 15: case 16: case 22: case 26:  case 37:
            eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
            break;
            case 13: case 17: case 20: case 28: case 29: case 33 : case 34:
            break;
            case 18:
                eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
                eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                break;
            case 35:
                eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                break;
            case 25:
            //eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//25行本年累计在同一年之内不变
                eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                break;
            case 32:
                eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//始终等于本月数
                eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                break;
            case 36:
            //eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");//同一年内不变
                break;
            case 38:
                eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//始终等于本月数
            //alert("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");
            //eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                break;
            default:
                eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
                eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
        }
    }

    //}
}


//修改合计数是否为只读
function ifCount()
{
    if (document.all.zdjs.checked)
    {
        for (i = 1; i <= 38; i++)
        {
            switch (i)
                    {
                case 1:
                    document.all.item('COL0' + i + '01').readOnly = true;
                    document.all.item('COL0' + i + '03').readOnly = true;
                    break;
//                case 8:
//                    document.all.item('COL0' + i + '01').readOnly = true;
//                    break;
                case 17:case 18:case 19:case 20:case 24:case 27:case 32:case 33:case 34:
                document.all.item('COL' + i + '01').readOnly = true;
                document.all.item('COL' + i + '03').readOnly = true;
                break;
                case 38:
                    document.all.item('COL' + i + '01').readOnly = true;
                    break;
                default:

            }
        }
    }
    else
    {
        for (i = 1; i <= 38; i++)
        {
            switch (i)
                    {
                case 1:
                    document.all.item('COL0' + i + '01').readOnly = false;
                    document.all.item('COL0' + i + '03').readOnly = false;
                    break;
//                case 8:
//                    document.all.item('COL0' + i + '01').readOnly = false;
//                    break;
                case 17:case 18:case 19:case 20:case 24:case 27:case 32:case 33:case 34:
                document.all.item('COL' + i + '01').readOnly = false;
                document.all.item('COL' + i + '03').readOnly = false;
                break;
                case 38:
                    document.all.item('COL' + i + '01').readOnly = false;
                    break;
                default:

            }
        }
    }
}

function printZcfzb()
{
    if (confirm('要进行打印？')) {
        logout=1;
        form1.action = "/printtab/zzs/pringSB_ZZS_YBNS.do";
        form1.target = '_self';
        form1.submit();
    }
    window.status = '';
}

function deleteZcfzb()
{
    if (confirm('要删除数据吗？'))
    {
        logout=1;
        init(true);
        form1.action = "delSB_ZZS_YBNS.do";
        document.form1.target = "submitframe";
        form1.submit();
    }
}


//进行表间关系校验
function check(what)
{
    if (isNaN(what.value))
    {
        what.value = "0.00";
        checkSx();
        checksj();
    }
    if (what.value == "")
    {
        what.value = "0.00";
        checkSx();
        checksj();
    }
    if (what.value == " ")
    {
        what.value = "0.00";
        checkSx();
        checksj();
    }
    if (what.value == null)
    {
        what.value = "0.00";
        checkSx();
        checksj();
    } else
    {
        checkSx();
        checksj();
    }

}


//对表中的本月数上下关系进行校验
function checkSx()
{
    if (document.all.zdjs.checked)
    {
//        count('0101', 'a0201b+a0301b+a0401b');
        //count('0102', 'a0102b+a0201b+a0301b+a0401b');
//        count('0103', 'a0203b+a0303b+a0403b');
        count('0104', 'a0204b+a0304b+a0404b');
//        count('0801', 'a0901b+a1001b');
        count('1701', 'a1201b+a1301b-a1401b-a1501b+a1601b');
        count('1703', 'a1203b+a1303b-a1403b');
        if (parseFloat(document.all.item('COL1701').value) < parseFloat(document.all.item('COL1101').value))
        {
            document.all.item('COL1801').value = document.all.item('COL1701').value;
        }else
        {
            document.all.item('COL1801').value = document.all.item('COL1101').value;
        }
        if (parseFloat(document.all.item('COL1703').value) < parseFloat(document.all.item('COL1103').value))//即征即退货物及劳务本月数
        {
            document.all.item('COL1803').value = document.all.item('COL1703').value;
        }
        else
        {
            document.all.item('COL1803').value = document.all.item('COL1103').value;
        }

        count('1901', 'a1101b-a1801b');
        count('1903', 'a1103b-a1803b');
        count('1904', 'a1104b-a1804b');
        //一般货物及劳务本月数
        //即征即退货物及劳务本月数
        count('2001', 'a1701b-a1801b');
		
         if(NSR_YGZ_BZ!="3"){ 
            document.all.item('COL1302').value = "0.00";
            document.all.item('COL1802').value = "0.00";
            document.all.item('COL2002').value = "0.00";
             ynse_19();
        }else{
             sjdk18_qmld20();
         }
        //一般货物及劳务本月数
        count('2003', 'a1703b-a1803b');
        //即征即退货物及劳务本月数
        count('2401', 'a1901b+a2101b-a2301b');
        //一般货物及劳务本月数
        if (document.all.item('COL2401').value < 0)
            document.all.item('COL2401').value = 0.00;
        if (document.all.item('COL2402').value < 0)
            document.all.item('COL2402').value = 0.00;
        count('2403', 'a1903b+a2103b-a2303b');
        //即征即退货物及劳务本月数
        count('2701', 'a2801b+a2901b+a3001b+a3101b');
        count('2703', 'a2803b+a3003b+a3103b');
        //即征即退货物及劳务本月数
        count('3201', 'a2401b+a2501b+a2601b-a2701b');
        //一般货物及劳务本月数
        count('3203', 'a2403b+a2503b-a2703b');
        count('3301', 'a2501b+a2601b-a2701b');
        //一般货物及劳务本月数
        count('3303', 'a2503b-a2703b');
        //即征即退货物及劳务本月数
        if (document.all.item('COL3301').value < 0)
            document.all.item('COL3301').value = "0.00";
        count('3401', 'a2401b-a2801b-a2901b');
        //一般货物及劳务本月数
        count('3403', 'a2403b-a2803b');
        //即征即退货物及劳务本月数
        count('3801', 'a1601b+a2201b+a3601b-a3701b');

    }
    //checksj();
}

//修改本月数的时候计算本年累计数
function checksj()
{
    if (document.all.zdjs.checked && !document.all.ifupdate.checked)
    //if (document.all.zdjs.checked)
    {
        for (i = 1; i <= 38; i++)
        {
            switch (i)
                    {
                case 1: case 2: case 3: case 4: case 5: case 6:
                eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))");
                eval("document.all.COL0" + i + "04.value=cents(parseFloat(cents(document.all.COL0" + i + "03.value))+parseFloat(COL0" + i + "04))");
            //alert(eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))"));
                break;
                case 7: case 8: case 9:
                eval("document.all.COL0" + i + "02.value=cents(parseFloat(cents(document.all.COL0" + i + "01.value))+parseFloat(COL0" + i + "02))");
                break;
                case 10: case 15: case 16: case 22: case 26:  case 37:
                eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
                break;
                case 13: case 17: case 20: case 28: case 29: case 33 : case 34:
                break;
                case 18:
                    eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
                    eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                    break;
                case 35:
                    eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                    break;
                case 25:
                //eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//25行本年累计在同一年之内不变
                    eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                    break;
                case 32:
                    eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//始终等于本月数
                    eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                    break;
                case 36:
                //eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");//同一年内不变
                    break;
                case 38:
                    eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");//始终等于本月数
                //alert("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value)))");
                //eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
                    break;
                default:
                    eval("document.all.COL" + i + "02.value=cents(parseFloat(cents(document.all.COL" + i + "01.value))+parseFloat(COL" + i + "02))");
                    eval("document.all.COL" + i + "04.value=cents(parseFloat(cents(document.all.COL" + i + "03.value))+parseFloat(COL" + i + "04))");
            }
        }

         if(NSR_YGZ_BZ!="3"){
            document.all.item('COL1302').value = "0.00";
            document.all.item('COL1802').value = "0.00";
            document.all.item('COL2002').value = "0.00";
             ynse_19();
        }else{
             sjdk18_qmld20();
         }
    }
}
//设置按钮置灰，防止重复提交
function init(bValue)
{
    document.all.bc.disabled = bValue;
    document.all.sc.disabled = bValue;
    document.all.dy.disabled = bValue;
}

function submitform(obj, bz)
{
    checkSx();//零申报提交前的计算。（非零申报，自动计算有效，也计算。）为了防止零申报某些从ctais提取的数据，没有累加到“累计数”。
    document.all.SQRQZ.value = document.all.SQRQZ.value.Trim();
    document.all.SMRQZ.value = document.all.SMRQZ.value.Trim();
//    var temp = document.all.item('COl3401').value;
//    if (temp < 0)
//    {
//        alert('网上不能退税');
//        document.all.item('COl3401').value=0.00;
//    }

    if (bz == 1)
    {
//        if(!checkXxse()){
//            alert("当第一行和第十一行只有一行有数据时，不允许保存数据！");
//            return;
//        }
        if (confirm('是否保存？'))
        {
            window.status = '请稍侯，正在保存数据...';
            form1.action = 'insertSB_ZZS_YBNS.do';
            logout=1;
            init(true);
//            document.all.tqsj.disabled=true;
            form1.target = "submitframe";
            form1.submit();
        }
    }

    window.status = '';
}

function checkXxse(){
    var xse=0;
    var xxse=0;
    for(i=1;i<=3;i++){
        xse=document.getElementsByName("COL010"+i)[0].value;
        xxse=document.getElementsByName("COL110"+i)[0].value;
        if((parseFloat(xse)!=0&&parseFloat(xxse)==0)||(parseFloat(xse)==0&&parseFloat(xxse)!=0)){
            return false;
        }
    }
    return true;
}

/**
 * 第13、18、20栏“一般货物劳务和服务列”处理
 *   第18栏“实际抵扣税额”：
 *   1.上期留抵税额按规定须挂账的纳税人，按以下要求填写本栏的“本月数”和“本年累计”。
（1）本栏“一般货物、劳务和应税服务”列“本月数”：按表中所列公式计算填写。
（2）本栏“一般货物、劳务和应税服务”列“本年累计”：填写货物和劳务挂账留抵税额本期实际抵减一般货物和劳务应纳税额的数额。
 将“货物和劳务挂账留抵税额本期期初余额”与“一般计税方法的一般货物及劳务应纳税额”两个数据相比较， 取二者中小的数据。
其中：货物和劳务挂账留抵税额本期期初余额＝第13栏“上期留抵税额”“一般货物、劳务和应税服务”列“本年累计”；
一般计税方法的一般货物及劳务应纳税额＝（第11栏“销项税额”“一般货物、劳务和应税服务”列“本月数”-
 第18栏“实际抵扣税额”“一般货物、劳务和应税服务”列“本月数”）×一般货物及劳务销项税额比例；
一般货物及劳务销项税额比例＝（《附列资料（一）》第10列第1、3行之和-第10列第6行）÷
 第11栏“销项税额”“一般货物、劳务和应税服务”列“本月数”×100％。

 *   第19栏“应纳税额”：
 *   1.本栏“一般货物、劳务和应税服务”列“本月数”＝第11栏“销项税额”
 *   “一般货物、劳务和应税服务”列“本月数”-第18栏“实际抵扣税额”
 *   “一般货物、劳务和应税服务”列“本月数”-第18栏“实际抵扣税额”
 *   “一般货物、劳务和应税服务”列“本年累计”
 */
function sjdk18_qmld20(){
   var  COL1101 =  document.getElementById("COL1101").value;
   var  COL1302 =  document.getElementById("COL1302").value;//上期留抵税额-累计数
   var  COL1801 =  document.getElementById("COL1801").value;
   var  COL1901 =  document.getElementById("COL1901").value;
    /**
     * 一般货物及劳务销项税额比例＝（《附列资料（一）》第10列第1、3行之和-第10列第6行）
     * ÷第11栏“销项税额”“一般货物、劳务和应税服务”列“本月数”×100％
     */
   var ybhwjlwxxebl = "0.00";// 一般货物及劳务销项税额比例
    if(!isNaN(COL1101)){
      if(parseFloat(COL1101)*100>0){
         ybhwjlwxxebl = parseFloat(FB1_COL10_136)/parseFloat(COL1101);
      }
    }
    var sjdk18 = (parseFloat(COL1101)-parseFloat(COL1801))*ybhwjlwxxebl;
    //开始计算第18栏实际抵扣
    if(isNaN(sjdk18)){
    document.getElementById("COL1802").value = "0.00";
    }else{
        var v_temp = parseFloat(COL1302)- parseFloat(sjdk18);
    if(v_temp>0){  //将“货物和劳务挂账留抵税额本期期初余额”与“一般计税方法的一般货物及劳务应纳税额”两个数据相比较， 取二者中小的数据。
     document.getElementById("COL1802").value = parseFloat(sjdk18).toFixed(2);
    }else{
     document.getElementById("COL1802").value = parseFloat(COL1302).toFixed(2);
    }
    }
    //计算第20栏期末留抵COL2002
   if(isNaN(COL1302)){
      document.getElementById("COL2002").value = "0.00";
   }else{
      var V_COL1802=document.getElementById("COL1802").value;
      document.getElementById("COL2002").value = (parseFloat(COL1302)-parseFloat(V_COL1802)).toFixed(2);
   }
   ynse_19();
}
/**  第19栏“应纳税额”本栏“一般货物、劳务和应税服务”列“本月数”
 * 第11栏“销项税额”“一般货物、劳务和应税服务”列“本月数”-第18栏“实际抵扣税额”
 * “一般货物、劳务和应税服务”列“本月数”-第18栏“实际抵扣税额”一般货物、劳务和应税服务”列“本年累计”
 */
function  ynse_19(){ //COL1901
    var  COL1101 =  document.getElementById("COL1101").value;//第11栏“销项税额”“一般货物、劳务和应税服务”列“本月数”
    var  COL1801 =  document.getElementById("COL1801").value;//第18栏“实际抵扣税额”一般货物、劳务和应税服务”列“本月数”
    var  COL1802 =  document.getElementById("COL1802").value;//第18栏“实际抵扣税额”一般货物、劳务和应税服务”列“累计数”
    var sum = parseFloat(COL1101)- parseFloat(COL1801)-parseFloat(COL1802);
    if(parseFloat(sum)<0){
        document.getElementById("COL1901").value="0.00";
    }else{
      if(isNaN(sum)){
         document.getElementById("COL1901").value="0.00";
      }else{
          document.getElementById("COL1901").value=parseFloat(sum).toFixed(2);
      }

    }
}

//离开事件
function OnCloseWnd()
{
    if (logout == 0)
    {
        event.returnValue="请先点击页面下方【保存】按钮进行数据保存，\n否则离开页面将导致数据丢失!\n确定离开吗？";
    }
}

