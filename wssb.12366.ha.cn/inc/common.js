/*过滤用户输入的数据是否存在特殊字符*/
function checkFH(obj) {
    var str = obj.value;
    if (str.indexOf("\\") != -1) {
        alert("您输入的：'" + str + "'中存在[\\](反斜杠)，请修改！！");
        return false;
    } else if (str.indexOf("\"") != -1) {
        alert("您输入的：'" + str + "'中存在[\"](半角的双引号)，请修改！！");
        return false;
    } else if (str.indexOf("“") != -1) {
        alert("您输入的：'" + str + "'中存在[“](全角的双引号)，请修改！！");
        return false;
    } else if (str.indexOf("'") != -1) {
        alert("您输入的：'" + str + "'中存在['](半角的单引号)，请修改！！");
        return false;
    } else if (str.indexOf("‘") != -1) {
        alert("您输入的：'" + str + "'中存在[‘](全角的左单引号)，请修改！！");
        return false;
    } else if (str.indexOf("’") != -1) {
        alert("您输入的：'" + str + "'中存在[’](全角的右单引号)，请修改！！");
        return false;
    } else if (str.indexOf("(") != -1) {
        alert("您输入的：'" + str + "'中存在[(](半角的左括号)，请修改！！");
        return false;
    } else if (str.indexOf("（") != -1) {
        alert("您输入的：'" + str + "'中存在[（](全角的左括号)，请修改！！");
        return false;
    } else if (str.indexOf(")") != -1) {
        alert("您输入的：'" + str + "'中存在[)](半角的右括号)，请修改！！");
        return false;
    } else if (str.indexOf("）") != -1) {
        alert("您输入的：'" + str + "'中存在[）](全角的右括号)，请修改！！");
        return false;
    } else if (str.indexOf("/") != -1) {
        alert("您输入的：'" + str + "'中存在[/] ，请修改！！");
        return false;
    } else if (str.indexOf("\\") != -1) {
        alert("您输入的：'" + str + "'中存在[\\] ，请修改！！");
        return false;
    } else {
        return true;
    }
}
/*进行表内关系运算*/
 function count_ById(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.getElementById('COL");
    str1 = str1.replace(/b/g, "').value)");
  // alert("计算结果为"+eval(str1));
   //alert("str1为"+str1);
    if (isNaN(eval(str1)))
        document.getElementById("COL" + str).value = "0.00";
    else
        document.getElementById("COL" + str).value = cents(eval(str1));
}

/*进行表内关系运算*/
function count(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.all.item('COL");
    str1 = str1.replace(/b/g, "').value)");
    //alert(str1)
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("COL" + str).value = "0.00";
    else
        document.all.item("COL" + str).value = cents(eval(str1));
}
/*进行表内关系运算*/
function countt(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.all.item('t");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("t" + str).value = "0.00";
    else
    // alert("t"+str);
        document.all.item("t" + str).value = cents(eval(str1));
}
/*进行表内关系运算*/
function counts(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.all.item('COL");
    str1 = str1.replace(/b/g, "').value)");
    if (isNaN(eval(str1))) {
        document.all.item("COL" + str).value = "0.00";
    }
    else {
        document.all.item("COL" + str).value = eval(str1);
    }
}
/*进行表内关系运算*/
function countss(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.all.item('COL");
    str1 = str1.replace(/b/g, "').value)");
    if (isNaN(eval(str1))) {
        document.all.item("COL" + str).value = "0.00";
    }
    else {
        document.all.item("COL" + str).value = eval(str1);
    }
}

/*进行合计累加使用此方法*/
function sum(str1)
{
    var  sum;
    str1 = str1.replace(/a/g, "eval(document.all.item('COL");
    str1 = str1.replace(/b/g, "').value)");
    sum=eval(str1);
    return sum;
    //return str1;
}
/*进行小数后自动补零*/
function cents(amount)
{
    if (isNaN(amount)) return amount;
    amount -= 0;
    amount = round(amount, 2)
    if (amount == 0)
        amount = '0.00';
    else if (amount == Math.floor(amount))
        amount += '.00';
    else if (amount * 10 == Math.floor(amount * 10))
        amount += '0';
    return  amount;
}
/*进行小数后自动补零*/
function cent4(amount)
{
    if (isNaN(amount)) return amount;
    amount -= 0;
    amount = round(amount, 4)
    if (amount == 0)
        amount = '0.0000';
    else if (amount == Math.floor(amount))
        amount += '.0000';
    else if (amount * 1000 == Math.floor(amount * 1000))
        amount += '000';
    return  amount;
}
/*保留小数点后两位小数*/
function round(number, x)
{
    return Math.round(number * Math.pow(10, x)) / Math.pow(10, x);
}
/*监测输入数值是否为数字
临时排除---字符
*/
function checkit(what)
{
    if (isNaN(what.value) && what.value != '──')
    {
        alert(what.value + "不是一个有效数字!");
        what.value="0.00";
        what.focus(0);
        return false;
    }
    else
    {
        /**
         *  2012.12.18 该函数整体校验数字不太严格，如果用户在input中输入'──'，程序自然就会执行else里面的函数，而else
         *  里面就没有进行数字校验，在保存到数据库的时候就会出 java.sql.SQLException: ORA-01722: invalid number错误；
         *   所以在else里面也要进行数字校验
         */
        if(isNaN(what.value)){  //不是数字
        alert(what.value + "不是一个有效数字!");
        what.focus(0);
        return false;
        }else{
        what.value = cents(what.value);
        return true;
        }
    }
}
/*监测输入数值是否为数字
临时排除---字符
为成品油附表三
*/
function checkfb(what)
{
    if (isNaN(what.value) && what.value != '──')
    {
        alert(what.value + "不是一个有效数字!");
        what.focus(0);
        return false;
    }
    else
    {
        what.value = cent4(what.value);
        return true;
    }
}
/*监测输入数值是否为数字
进行了float事件的处理
*/
function checkitt(what)
{
    if (isNaN(what.value) && what.value != '──')
    {
        alert(what.value + "不是一个有效数字!");
        what.focus(0);
        return false;
    }
    else
    {
        what.value = cents(what.value);
        return true;
    }
}
/*监测输入数值是否为数字
临时排除---字符
*/
function checkitint(what)
{
    if (isNaN(what.value) && what.value != '──')
    {
        alert(what.value + "不是一个有效数字!");
        what.focus(0);
        //what.value="0.00";
        return false;
    }
}

/*点击回车后光标下移*/
function checklock(what)
{
    if (isNaN(what.value))
    {
        if (what.value.length < 1)
        {
            what.focus();
            return false;
        }
    }
    var name = what.name;
    if (window.event.keyCode == 13)
    {
        window.event.keyCode = 9;
        return;
    }
    if (window.event.keyCode == 37)
    {
        return;
    }
    if (window.event.keyCode == 39)
    {
        window.event.keyCode = 9;
        return;
    }
    if (window.event.keyCode == 40)
    {
        /*var rightnum = eval('1' + '+' + name.substring(2, name.length));
        if (rightnum < 20)
        {
            name = name.substring(0, 2) + rightnum;
            document.all.item(name).focus();
        }*/
        return;
    }
    if (window.event.keyCode == 38)
    {
        /*var rightnum = eval(name.substring(2, name.length) + '-' + '1');
        if (rightnum > 0)
        {
            name = name.substring(0, 2) + rightnum;
            document.all.item(name).focus();
        }*/
        return;
    }
}
/*判断输入是否为整型*/
function checkInteger(obj)
{
    if (isNaN(obj.value))
    {
        alert(obj.value + "不是有效数字");
        obj.value = "0.00";
        obj.focus(0);
        return;
    }
    else {
        obj.value = Math.floor(obj.value);
    }
}

function strDateTime(obj)
{
    var str = obj.value;
    if (str != "")
    {
        var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);
        if (r == null)
        {
            alert("请输入正确的日期格式,如“2005-02-04”");
            obj.focus(0);
            return false;
        }
    }
    else
        return false;
}

<!-- 年格式是否正确 -->
function checkYear(str)
{
    var str = str.value;
    if (str != "")
    {
        var reg = /^\d{4}$/;
        if (arr = str.match(reg))
        {
            return true;
        }
        else
        {
            alert("年份必须是四位数字");
            return false;
        }
    }
}

function strDateTime(str)
{
    if (str.length != 0)
    {
        var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);
        if (r == null)return false;
        var d = new Date(r[1], r[3] - 1, r[4]);
        return (d.getYear() == r[1] && (d.getMonth() + 1) == r[3] && d.getDate() == r[4]);
    }
    else
        return true;

}

function checkDateTime(obj)
{
    var temp = obj.value;
    if (!(strDateTime(temp)))
    {
        alert("开票日期必须是日期型如:2003-12-28");
        obj.focus(0);
        return;
    }
}

function saveFile(tablename, tabledata)
{
    top.leftframe.document.all.files.saveFile(tablename, tabledata);
}

function loadFile(dd)
{
    var str1 = top.leftframe.document.all.files.loadFile(dd);
    alert(str1);
}

function resume()
{
    self.location.href = url + "?flag=1"
}

//document.onclick=hidemenu;
function hidemenu() {
    parent.Restore();
}

// 计数日期差值
function dateDiff(per, d1, d2)
{
    var d = (d2.getTime() - d1.getTime()) / 1000;

    switch (per)
            {
    //case "yyyy": d/=12;
    //case "mm": d*=12*7/365.25;
        case "ww": d /= 7;
        case "dd": d /= 24;
        case "hh": d /= 60;
        case "nn": d /= 60;
    }
    return Math.ceil(d);
}
//功能：判断intYear年intMonth月的天数
//返回值：intYear年intMonth月的天数
function fnComputerDay(intYear, intMonth)
{
    var dtmDate = new Date(intYear, intMonth, -1);
    var intDay = dtmDate.getDate() + 1;
    return intDay;
}

function checkIntLength(obj, bb)
{
    var aa = obj.value;
    if (aa == null || bb == null)
    {
        return;
    }
    var len = 0;
    if (aa.indexOf('.', 1) >= 0)
    {
        len = aa.indexOf('.', 1);
    }
    else
    {
        len = aa.length;
    }
    if (len > bb)
    {
        alert('输入的数据太大，不能保存');
        obj.focus(0);
        return false;
    }
}

function gdcount(str, str1) /*进行表内关系运算*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('gd");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("gd" + str).value = "0.00";
    else
        document.all.item("gd" + str).value = cents(eval(str1));
}

function wxcount(str, str1) /*进行表内关系运算*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('wx");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("wx" + str).value = "0.00";
    else
        document.all.item("wx" + str).value = cents(eval(str1));
}

function dycount(str, str1) /*进行表内关系运算*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('dy");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("dy" + str).value = "0.00";
    else
        document.all.item("dy" + str).value = cents(eval(str1));
}

/*检查纳税人识别号的合法性*/
function checkNsrsbh(obj)
{
    var reg = /^(([A-Za-z0-9]{15})|([A-Za-z0-9]{18})|([A-Za-z0-9]{20}))$/;
    if (obj.value.search(reg) == -1)
    {
        alert("你输入的税号：" + obj.value + "有误。" + "请输入正确的纳税人识别号格式，匹配长度为15、18或者20,由字母或者数字");
        obj.value = "";
        return  false;
    }
    return true;
}

/*进行网络的判断保存到本地的策略
*主要的使用的方法参见海关完税
*首先在页面创建一个userdata的属性
*其次检查是不是有包含的class="userdate"的隐藏域，
×还有要有nsrsbh，nd，yf的隐藏域
* 进行保存到userdata里面
* str1为组合格式的前面str1jstr2m 为组合obj的对象名
* str3为表头的行数
* str4为表的列数
**/
function savexml(str1, str2, str3, str4) {
    var zzsform = document.all;
    var i = tb.rows.length - str3;
    // alert(i);
    var sb_zzs_hgws = "";
    if (i < 0) {
        alert("你没有填写数据请填写数据");

    } else {
        sb_zzs_hgws = "<?xml version='1.0'?>"
        //sb_zzs_hgws += "<sb"+zzsform.nsrsbh.value+zzsform.nd.value+zzsform.yf.value ">\n"
        sb_zzs_hgws += "<sb>\n"
        sb_zzs_hgws += "<sb_xx>" + zzsform.nsrsbh.value + zzsform.nd.value + zzsform.yf.value + "</sb_xx>\n"
        for (var j = 1; j <= i; j++) {
            sb_zzs_hgws += "<row" + j + ">\n"
            for (var m = 1; m <= str4; m++) {
                //name
                var obj = str1 + j + str2 + m;
                // alert("---"+document.all.item(obj).value);
                sb_zzs_hgws += "<" + obj + ">" + document.all.item(obj).value + "</" + obj + ">\n"
            }
            sb_zzs_hgws += "</row" + j + ">\n"
        }
        sb_zzs_hgws += "</sb>\n"
        zzsform.hgws.setAttribute("sb" + zzsform.nsrsbh.value + zzsform.nd.value + zzsform.yf.value, sb_zzs_hgws);
        zzsform.hgws.save("sb");
    }
}
/*
* 取出数据
*  bz代表的是组合的方式1代表单个数组，2代表多个数组
**/
var zzsform = document.all;
function loadxml(curr_page, bz) {
    //alert("1111111111111");
    zzsform.hgws.load("sb");
    var str = zzsform.hgws.getAttribute("sb" + zzsform.nsrsbh.value + zzsform.nd.value + zzsform.yf.value);
    if (str != null) {
        var xmldoc = checkXml(str);
        //alert(bz);
        if (bz == "1") {
            setNames(xmldoc, curr_page);
        }
        else {
            setNames1(xmldoc, curr_page);
        }
    }
    zzsform.hgws.removeAttribute("sb" + zzsform.nsrsbh.value + zzsform.nd.value + zzsform.yf.value);
    zzsform.hgws.save("sb");

}

/************************
 *检测XML数据的正确性
 ************************/
function checkXml(str) {
    if (str == null)
        return null;
    var doc = new ActiveXObject("MSXML.DOMDocument");
    doc.async = false;
    doc.loadXML(str);
    var oErr = doc.parseError;
    if (oErr.errorCode != 0) {
        if (str.length > 5 && str.substring(0, 5) == "<!DOC") {
            return null;
        } else {
            alert("解析XML数据错误：\n" + oErr.reason + "\nLine:" + oErr.line + "\nLinepos:" + oErr.linepos + "\nsrcText:\n" + oErr.srcText);
        }
        return null;
    }
    return doc;
}

/**********************
 *解析返回的XML字符串解析出现单个数组的时间
 *********************/
function setNames(obj, curr_page) {
    var results = obj;
    var content = results.getElementsByTagName("sb")[0];
    var childlength = content.childNodes.length;
    var childN = content.childNodes;
    var x = new Array();
    var str = "";
    var sb_xx1 = childN[0].childNodes;
    var sb_xx = sb_xx1[0].text;
    if (zzsform.nsrsbh.value == sb_xx.substring(0, 15) && zzsform.nd.value == sb_xx.substring(15, 19) && zzsform.yf.value == sb_xx.substring(19, sb_xx.length))
    {
        x.push("1");
        for (var i = 1; i < childlength; i++)
        {
            var childvalue = childN[i].childNodes.length;
            var childZ = childN[i].childNodes;

            for (var j = 0; j < childvalue; j++) {
                str = childZ[j].text;
                x.push(str);
            }
        }

        loaddata(x, curr_page);
    }
    else {
    }

}
/**********************
 *解析返回的XML字符串解析出现多个数组的形式
 ********************/
function setNames1(obj, curr_page) {
    var results = obj;
    var content = results.getElementsByTagName("sb")[0];
    var childlength = content.childNodes.length;
    var childN = content.childNodes;
    //var x= new Array();
    var str = "";

    var sb_xx1 = childN[0].childNodes;
    var sb_xx = sb_xx1[0].text;
    if (zzsform.nsrsbh.value == sb_xx.substring(0, 15) && zzsform.nd.value == sb_xx.substring(15, 19) && zzsform.yf.value == sb_xx.substring(19, sb_xx.length))
    {
        for (var i = 1; i < childlength; i++)

        {
            x[i - 1] = new Array();
            var childvalue = childN[i].childNodes.length;
            var childZ = childN[i].childNodes;

            for (var j = 0; j < childvalue; j++) {
                str = childZ[j].text;
                x[i - 1].push(str);
            }
        }
        //alert(x);
        loaddata(x, curr_page);
    }
    else {
    }

}


var http_request = false;
/**
 *对request请求进行了网络的判断
 *url请求的页面
 *formname form的名字
 ×formaction 请求的。do方法
 ×formtarget提交的那个frame里面
 *当前的页面 curr_page
 */
function makeRequest(url, formname, formaction, formtarget, str1, str2, str3, str4) {

    if (window.XMLHttpRequest) { // Mozilla, Safari,...
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/xml');
        }
    } else if (window.ActiveXObject) { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
            }
        }
    }

    if (!http_request) {
        alert('Giving up :( Cannot create an XMLHTTP instance');
        return false;
    }
    http_request.onreadystatechange = function() {
        if (http_request.readyState == 4) {
            if (http_request.status == 200) {
                formname.action = formaction;
                formname.target = formtarget;
                formname.submit();

            } else {
                if (confirm("网络可能出现异常你是否要进行数据保存到本地！以免数据丢失！")) {
                    savexml(str1, str2, str3, str4);
                }
            }

        }

    }
    http_request.open('POST', url, true);
    http_request.send(null);
}
//end

//2006.09.05
String.prototype.Trim = function()
{
    //return this.replace(/(^[\s|　]*)|([\s|　]*$)/g,"");  //原来的替换方法
    //obj.value = obj.value.replace(/\s|　|&nbsp(;)?/gi, "");//新的校验方法
    //obj.focus();
    return this.replace(/\s|　|&nbsp(;)?/gi, "");
}

//检测字符串中是否有空格
function checkSpace(obj)
{
    obj.value = obj.value.replace(/\s|　|&nbsp(;)?/gi, "");
    //新的校验方法
}

//检测字符串中是否含有中文或者全角符号
function CheckChinese(obj)
{
    var str = obj.value;
    if (escape(str).indexOf('%u') != -1)
    {
        alert("不得含中文和全角符号！");
        return true;
    } else
    {
        return false;
    }
}
//检查税率是否合法
function checksl(what) {
    if (eval(what.value) >= 1 || eval(what.value) <= 0) {
        alert("你输入的税率:" + what.value + "不合法，请重新录入");
        what.value="0.00";
        what.focus();
        return false;
    } else {
        return true;
    }
}
//除去空格

 //文本框获取焦点
 function Mover(src)
{
    src.style.border = '1px solid #3068dd';
    src.style.background = '#ffffff';
    src.select();
}
 //文本框失去焦点
 function Mout(src)
{
    src.style.border = '0px';
    src.style.background = '';
}
