var data = '<div class="w3-code notranslate w3-black">C:\Users\<em>Your ame</em>&gt;python --version</div>';
    console.log(data);
    while(data.match(/class="/g)){
        var start = data.search("class=\"");
        console.log(start);
        for(i=start+7;i<data.length;i++){
            if(data[i]=="\"")
                {
                    end=i;
                    console.log(end);
                    break;
                }
        }
        var str = data.substr(start,end-start+1);
        console.log(str);
        data=data.replace(str,"");

        console.log(data);

    }