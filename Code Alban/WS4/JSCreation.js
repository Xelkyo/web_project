document.getElementById("btn_js").onclick=function() 
    {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "https://reqres.in/api/users", true);
        xhr.onload = function()
        {
            var html = "" ;
            if( xhr.status == 200 )
            {
                var liste=JSON.parse(xhr.response);
                let i = 0;
                for(i;i<liste.data.lenght; i++){
                    html = html + '<p>'+liste.data[i].email+'<p>';
                    html = html +"<img src= "+'"'+liste.data[i].avatar+'"';
                }
            }
            else{}
            document.getElementById("js_result").innerHTML = html;
        };
        xhr.send();
    };