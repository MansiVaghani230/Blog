// Date And Time
    function getDateTime() {

        var now     = new Date();
        var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
        var year    = now.getFullYear();
        var month   = now.getMonth()+1;
        var date     = now.getDate();
        var day      = daylist[now.getDay()];
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds();
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(date.toString().length == 1) {
             date = '0'+date;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }
        var dateTime = day+'/'+date+'/'+month+'/'+year+'  '+hour+':'+minute+':'+second;
         return dateTime;
    }

    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);

    // End DateTime

    /*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

     // Toggle the side navigation
     const sidebarToggle = document.body.querySelector('#sidebarToggle');
     if (sidebarToggle) {
         // Uncomment Below to persist sidebar toggle between refreshes
         // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
         //     document.body.classList.toggle('sb-sidenav-toggled');
         // }
         sidebarToggle.addEventListener('click', event => {
             event.preventDefault();
             document.body.classList.toggle('sb-sidenav-toggled');
             localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
         });
     }
 
 });
 