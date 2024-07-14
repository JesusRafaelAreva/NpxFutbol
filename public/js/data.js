
     
    
		function loadDoc() {
            var resolvedOptions = Intl.DateTimeFormat().resolvedOptions()
           data = resolvedOptions.timeZone
           return data;
   }
   
   function convertToUserTimeZone (utcHour) {
       const DateTime = luxon.DateTime;
        const utcDateTime = DateTime.fromISO(utcHour, { zone: 'America/Lima' });
         const localDateTime = utcDateTime.toLocal();
         return localDateTime.toFormat('HH:mm'); 
   };
   
   function loadInformationAgenda()
   {
       var zonaHoraria = loadDoc();            
       //           var url = 'https://futbollibre.pe/diaries.json';
       var url = 'http://npxfutbol.000.pe//agenda';
      
       
          var t = "";
          
               $.getJSON(url, function(result) {
           
           
           var data = result.data.sort((a, b) => a.attributes.diary_hour.localeCompare(b.attributes.diary_hour))
           
           //var imageUrl = "/uploads/sin_imagen_d36205f0e8.png";
            $(".menu").empty();
            console.log("ACTUALIZANDO");
            var fecha = moment().format("YYYY-MM-DD");
            
            
           
            $.each(data, function (i, item) {
                
                
                
                   if(item.attributes.country.data != null)
                   {
                       var imageUrl = item.attributes.country.data.attributes.image.data.attributes.url;   
                       
                       t += '<li><a href="#" class="enlace">' + item.attributes.diary_description + '<span class="">' + convertToUserTimeZone(item.attributes.diary_hour) +'</span> <img src="https://img.futbollibretv.pe' + imageUrl +'" width="45" heigth="26.5" loading="lazy" alt="" class="imgtan" /></a>';    
                   }else{
                       t += '<li><a href="#" class="enlace">' + item.attributes.diary_description + '<span class="">' + convertToUserTimeZone(item.attributes.diary_hour) +'</span> <img src="https://admin.futbollibretv.pe/uploads/sin_imagen_d36205f0e8.png" width="45" heigth="26.5" loading="lazy" alt="" class="imgtan" /></a>';
                   }
                    
                
                   
                   
                   t += '<ul class="submenudata">';
                   
                   $.each(item.attributes.embeds.data, function(i, embed) {
                       
                        if(embed)
                       {
                           var url_complete = embed.attributes.embed_iframe ? embed.attributes.embed_iframe : '/star-plus';
                           t += '<li class="subitem1"><a href="'+  url_complete +'" target="_top">'+ embed.attributes.embed_name +'</a></li>';
                       }
                   });
                    t += '</ul>';
                   t += '</li>';
                
               });

               $(".menu").append(t);
       });    
   }
  
   $(function() {
        
       moment.locale('es');
       //$('.agenda-fecha-dia').html("Agenda - " + moment().format("LL"));
       //
      //  var url = 'https://futbollibre.pe/diaries.json';
        var url = 'http://npxfutbol.000.pe//agenda';
  
   
           $.getJSON(url, function(result) { 
               if(result.data.length > 0)
               {
                   dateCompleted = moment(result.data[0].attributes.date_diary).format('LL');
                   //console.log(result.data[0].attributes.date_diary);    
                   $('.agenda-fecha-dia').html("Agenda - " + dateCompleted);
               }else{
                   dateCompleted = moment().format("LL");
                   $('.agenda-fecha-dia').html("Agenda - " + dateCompleted);
               }
               
           });
       
       window.scrollTo({ top: 0, behavior: 'smooth' });

       
        setInterval(function(){ 
           
               loadInformationAgenda();
        }, 60000);
       
                                       
       
       loadInformationAgenda();
       
         $(document).on('click', '.enlace', function (e) {
                                                e.preventDefault();
                                                var accordion = $(this);
                                                 var menu_ul = $('.menu > li > ul');
                                               var menu_a = $('.menu > li > a');
                                                var accordionContent = accordion.next('.submenudata'); 
                                                
                                                           if (!$(this).hasClass('active')) {
                                                                menu_a.removeClass('active');
                                                                           menu_ul.filter(':visible').slideUp('fast');
                                                               $(this).addClass('active').next().stop(true, true).slideDown('fast');
                                                           } else {
                                                                           $(this).removeClass('active');
                                                                           $(this).next().stop(true, true).slideUp('fast');
                                                           }
                                           });
       
   });

