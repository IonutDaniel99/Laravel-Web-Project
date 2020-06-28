 function showHour() {
     var date = new Date();
     var hours = date.getHours();
     var minutes = date.getMinutes();
     var seconds = date.getSeconds();
     hours = hours % 12;
     hours = hours ? hours : 12; // the hour '0' should be '12'
     minutes = minutes < 10 ? '0' + minutes : minutes;
     var strTime = hours + ':' + minutes + ':' + seconds;
     document.getElementById('time').innerHTML = strTime;
 }
 setInterval(showHour, 1000);
