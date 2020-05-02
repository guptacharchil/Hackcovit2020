var seconds=0;
        
        function Starttimer()
        {
            window.setInterval("updateTime()",1000);
        }
        function timeCountIdle()
		{
			seconds=0;
		}
        function updateTime()
        {
            ++seconds;
            document.getElementById("sofar").innerHTML=seconds;
            
			if(seconds==2000)
			{
			window.location="TestLink.php";
			}
        }
        
        window.addEventListener("load",Starttimer,false);