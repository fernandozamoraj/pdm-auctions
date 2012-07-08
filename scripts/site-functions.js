var PdmApp ={};
            
PdmApp.setActiveLink = function(linkId){
                 $('#homelink').removeClass("active");
                 $('#calendarlink').removeClass("active");
                 $('#contactuslink').removeClass("active");
                 $('#serviceslink').removeClass("active");
                 $('#auctionslink').removeClass("active");
                 $('#aboutuslink').removeClass("active");
                 
                 $(linkId).addClass("active");
}
