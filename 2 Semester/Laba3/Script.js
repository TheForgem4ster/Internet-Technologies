var ajax = new XMLHttpRequest();
function Functions1(){
    ajax.open("POST", "SelectFirst.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    ajax.onreadystatechange = function() 
    {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                var DataTransfer="<th>Name vendor</th><th>Name items</th>";
                console.dir(ajax);
                DataTransfer += ajax.responseText;
                document.getElementById("result").innerHTML = DataTransfer;
            }
        }
    }
    var Manufacturer = document.getElementById("Manufacturer").value;
    var vars="Manufacturer=" + Manufacturer;
    ajax.send(vars);
    document.getElementById("result").innerHTML = "Loading..."
}
function Functions2()
{
    ajax.open('POST', "SelectSecond.php", true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    
    var ProductCategory = document.getElementById("ProductCategory").value;
    var vars = "ProductCategory="+ ProductCategory;

    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                    
                var res = JSON.parse(ajax.response);
                console.log(res);
                
                var DataTransfer = "";
                DataTransfer +="<th>Category Name</th><th>Items Name</th>";
                for(var i in res)
                {
                   
                    DataTransfer += "<tr>";
                    DataTransfer += "<td>" + res[i][0] + "</td>";
                    DataTransfer += "<td>" + res[i][1] + "</td>";
                    result += "</tr>";
                }
                document.getElementById("result").innerHTML = DataTransfer;
            }
        }
    }

    ajax.send(vars);
    console.dir(vars);   
    document.getElementById("result").innerHTML = "Loading..."
}
function Functions3(){
    ajax.open("POST", "SelectThird.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    ajax.onreadystatechange = function() 
    {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                
                var DataTransfer = "";
                var rows = ajax.responseXML.firstChild.children;
                console.log(rows);

                DataTransfer+="<th>Name</th><th>price</th><th>quantity</th>";
                for (var i = 0; i < rows.length; i++) {
                    DataTransfer += "<tr>";
                    DataTransfer += "<td>" + rows[i].children[0].firstChild.nodeValue + "</td>";
                    DataTransfer += "<td>" + rows[i].children[1].textContent + "</td>";
                    DataTransfer += "<td>" + rows[i].children[2].textContent+ "</td>";
                    DataTransfer += "</tr>";
                }
                document.getElementById("result").innerHTML = DataTransfer;
            }
        }
    }
    var FirstPrice = document.getElementById("FirstPrice").value;
    var EndPrice = document.getElementById("EndPrice").value;
    var vars = "FirstPrice=" + FirstPrice + "&EndPrice="+EndPrice;
    ajax.send(vars);
    document.getElementById("result").innerHTML = "Loading..."
  
}