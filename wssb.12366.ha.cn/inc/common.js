/*�����û�����������Ƿ���������ַ�*/
function checkFH(obj) {
    var str = obj.value;
    if (str.indexOf("\\") != -1) {
        alert("������ģ�'" + str + "'�д���[\\](��б��)�����޸ģ���");
        return false;
    } else if (str.indexOf("\"") != -1) {
        alert("������ģ�'" + str + "'�д���[\"](��ǵ�˫����)�����޸ģ���");
        return false;
    } else if (str.indexOf("��") != -1) {
        alert("������ģ�'" + str + "'�д���[��](ȫ�ǵ�˫����)�����޸ģ���");
        return false;
    } else if (str.indexOf("'") != -1) {
        alert("������ģ�'" + str + "'�д���['](��ǵĵ�����)�����޸ģ���");
        return false;
    } else if (str.indexOf("��") != -1) {
        alert("������ģ�'" + str + "'�д���[��](ȫ�ǵ�������)�����޸ģ���");
        return false;
    } else if (str.indexOf("��") != -1) {
        alert("������ģ�'" + str + "'�д���[��](ȫ�ǵ��ҵ�����)�����޸ģ���");
        return false;
    } else if (str.indexOf("(") != -1) {
        alert("������ģ�'" + str + "'�д���[(](��ǵ�������)�����޸ģ���");
        return false;
    } else if (str.indexOf("��") != -1) {
        alert("������ģ�'" + str + "'�д���[��](ȫ�ǵ�������)�����޸ģ���");
        return false;
    } else if (str.indexOf(")") != -1) {
        alert("������ģ�'" + str + "'�д���[)](��ǵ�������)�����޸ģ���");
        return false;
    } else if (str.indexOf("��") != -1) {
        alert("������ģ�'" + str + "'�д���[��](ȫ�ǵ�������)�����޸ģ���");
        return false;
    } else if (str.indexOf("/") != -1) {
        alert("������ģ�'" + str + "'�д���[/] �����޸ģ���");
        return false;
    } else if (str.indexOf("\\") != -1) {
        alert("������ģ�'" + str + "'�д���[\\] �����޸ģ���");
        return false;
    } else {
        return true;
    }
}
/*���б��ڹ�ϵ����*/
 function count_ById(str, str1)
{
    str1 = str1.replace(/a/g, "eval(document.getElementById('COL");
    str1 = str1.replace(/b/g, "').value)");
  // alert("������Ϊ"+eval(str1));
   //alert("str1Ϊ"+str1);
    if (isNaN(eval(str1)))
        document.getElementById("COL" + str).value = "0.00";
    else
        document.getElementById("COL" + str).value = cents(eval(str1));
}

/*���б��ڹ�ϵ����*/
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
/*���б��ڹ�ϵ����*/
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
/*���б��ڹ�ϵ����*/
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
/*���б��ڹ�ϵ����*/
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

/*���кϼ��ۼ�ʹ�ô˷���*/
function sum(str1)
{
    var  sum;
    str1 = str1.replace(/a/g, "eval(document.all.item('COL");
    str1 = str1.replace(/b/g, "').value)");
    sum=eval(str1);
    return sum;
    //return str1;
}
/*����С�����Զ�����*/
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
/*����С�����Զ�����*/
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
/*����С�������λС��*/
function round(number, x)
{
    return Math.round(number * Math.pow(10, x)) / Math.pow(10, x);
}
/*���������ֵ�Ƿ�Ϊ����
��ʱ�ų�---�ַ�
*/
function checkit(what)
{
    if (isNaN(what.value) && what.value != '����')
    {
        alert(what.value + "����һ����Ч����!");
        what.value="0.00";
        what.focus(0);
        return false;
    }
    else
    {
        /**
         *  2012.12.18 �ú�������У�����ֲ�̫�ϸ�����û���input������'����'��������Ȼ�ͻ�ִ��else����ĺ�������else
         *  �����û�н�������У�飬�ڱ��浽���ݿ��ʱ��ͻ�� java.sql.SQLException: ORA-01722: invalid number����
         *   ������else����ҲҪ��������У��
         */
        if(isNaN(what.value)){  //��������
        alert(what.value + "����һ����Ч����!");
        what.focus(0);
        return false;
        }else{
        what.value = cents(what.value);
        return true;
        }
    }
}
/*���������ֵ�Ƿ�Ϊ����
��ʱ�ų�---�ַ�
Ϊ��Ʒ�͸�����
*/
function checkfb(what)
{
    if (isNaN(what.value) && what.value != '����')
    {
        alert(what.value + "����һ����Ч����!");
        what.focus(0);
        return false;
    }
    else
    {
        what.value = cent4(what.value);
        return true;
    }
}
/*���������ֵ�Ƿ�Ϊ����
������float�¼��Ĵ���
*/
function checkitt(what)
{
    if (isNaN(what.value) && what.value != '����')
    {
        alert(what.value + "����һ����Ч����!");
        what.focus(0);
        return false;
    }
    else
    {
        what.value = cents(what.value);
        return true;
    }
}
/*���������ֵ�Ƿ�Ϊ����
��ʱ�ų�---�ַ�
*/
function checkitint(what)
{
    if (isNaN(what.value) && what.value != '����')
    {
        alert(what.value + "����һ����Ч����!");
        what.focus(0);
        //what.value="0.00";
        return false;
    }
}

/*����س���������*/
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
/*�ж������Ƿ�Ϊ����*/
function checkInteger(obj)
{
    if (isNaN(obj.value))
    {
        alert(obj.value + "������Ч����");
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
            alert("��������ȷ�����ڸ�ʽ,�硰2005-02-04��");
            obj.focus(0);
            return false;
        }
    }
    else
        return false;
}

<!-- ���ʽ�Ƿ���ȷ -->
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
            alert("��ݱ�������λ����");
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
        alert("��Ʊ���ڱ�������������:2003-12-28");
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

// �������ڲ�ֵ
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
//���ܣ��ж�intYear��intMonth�µ�����
//����ֵ��intYear��intMonth�µ�����
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
        alert('���������̫�󣬲��ܱ���');
        obj.focus(0);
        return false;
    }
}

function gdcount(str, str1) /*���б��ڹ�ϵ����*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('gd");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("gd" + str).value = "0.00";
    else
        document.all.item("gd" + str).value = cents(eval(str1));
}

function wxcount(str, str1) /*���б��ڹ�ϵ����*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('wx");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("wx" + str).value = "0.00";
    else
        document.all.item("wx" + str).value = cents(eval(str1));
}

function dycount(str, str1) /*���б��ڹ�ϵ����*/
{
    str1 = str1.replace(/a/g, "eval(document.all.item('dy");
    str1 = str1.replace(/b/g, "').value)");
    //alert(eval(str1));
    if (isNaN(eval(str1)))
        document.all.item("dy" + str).value = "0.00";
    else
        document.all.item("dy" + str).value = cents(eval(str1));
}

/*�����˰��ʶ��ŵĺϷ���*/
function checkNsrsbh(obj)
{
    var reg = /^(([A-Za-z0-9]{15})|([A-Za-z0-9]{18})|([A-Za-z0-9]{20}))$/;
    if (obj.value.search(reg) == -1)
    {
        alert("�������˰�ţ�" + obj.value + "����" + "��������ȷ����˰��ʶ��Ÿ�ʽ��ƥ�䳤��Ϊ15��18����20,����ĸ��������");
        obj.value = "";
        return  false;
    }
    return true;
}

/*����������жϱ��浽���صĲ���
*��Ҫ��ʹ�õķ����μ�������˰
*������ҳ�洴��һ��userdata������
*��μ���ǲ����а�����class="userdate"��������
������Ҫ��nsrsbh��nd��yf��������
* ���б��浽userdata����
* str1Ϊ��ϸ�ʽ��ǰ��str1jstr2m Ϊ���obj�Ķ�����
* str3Ϊ��ͷ������
* str4Ϊ�������
**/
function savexml(str1, str2, str3, str4) {
    var zzsform = document.all;
    var i = tb.rows.length - str3;
    // alert(i);
    var sb_zzs_hgws = "";
    if (i < 0) {
        alert("��û����д��������д����");

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
* ȡ������
*  bz���������ϵķ�ʽ1���������飬2����������
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
 *���XML���ݵ���ȷ��
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
            alert("����XML���ݴ���\n" + oErr.reason + "\nLine:" + oErr.line + "\nLinepos:" + oErr.linepos + "\nsrcText:\n" + oErr.srcText);
        }
        return null;
    }
    return doc;
}

/**********************
 *�������ص�XML�ַ����������ֵ��������ʱ��
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
 *�������ص�XML�ַ����������ֶ���������ʽ
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
 *��request���������������ж�
 *url�����ҳ��
 *formname form������
 ��formaction ����ġ�do����
 ��formtarget�ύ���Ǹ�frame����
 *��ǰ��ҳ�� curr_page
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
                if (confirm("������ܳ����쳣���Ƿ�Ҫ�������ݱ��浽���أ��������ݶ�ʧ��")) {
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
    //return this.replace(/(^[\s|��]*)|([\s|��]*$)/g,"");  //ԭ�����滻����
    //obj.value = obj.value.replace(/\s|��|&nbsp(;)?/gi, "");//�µ�У�鷽��
    //obj.focus();
    return this.replace(/\s|��|&nbsp(;)?/gi, "");
}

//����ַ������Ƿ��пո�
function checkSpace(obj)
{
    obj.value = obj.value.replace(/\s|��|&nbsp(;)?/gi, "");
    //�µ�У�鷽��
}

//����ַ������Ƿ������Ļ���ȫ�Ƿ���
function CheckChinese(obj)
{
    var str = obj.value;
    if (escape(str).indexOf('%u') != -1)
    {
        alert("���ú����ĺ�ȫ�Ƿ��ţ�");
        return true;
    } else
    {
        return false;
    }
}
//���˰���Ƿ�Ϸ�
function checksl(what) {
    if (eval(what.value) >= 1 || eval(what.value) <= 0) {
        alert("�������˰��:" + what.value + "���Ϸ���������¼��");
        what.value="0.00";
        what.focus();
        return false;
    } else {
        return true;
    }
}
//��ȥ�ո�

 //�ı����ȡ����
 function Mover(src)
{
    src.style.border = '1px solid #3068dd';
    src.style.background = '#ffffff';
    src.select();
}
 //�ı���ʧȥ����
 function Mout(src)
{
    src.style.border = '0px';
    src.style.background = '';
}
