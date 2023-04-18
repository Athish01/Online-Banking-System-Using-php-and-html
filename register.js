$(document).ready(function() { 
  
    $("#account-select").change(function() {
      $("#show-address").show('slide');
      window.scrollTo(0,document.body.scrollHeight);
    });
    
    $("#show-address").click(function(){
      $("#address-history").show('slide');
      $("#current-address").show('slide');
      
      $("#previous-address").show('slide');
      
      $("#glt").show('slide');
      $("#get-consent").show('slide');
      window.scrollTo(0,document.body.scrollHeight);

    });
    
    $("#get-consent").click(function(){
      $("#your-consent").show('slide');
      window.scrollTo(0,document.body.scrollHeight);
    });
    
    $("#credit-click").click(function() {
      $("#info-request").show('slide');
      window.scrollTo(0,document.body.scrollHeight);
    });
    
    $("#info-click").click(function() {
      $("#submit-app").show('slide');
      window.scrollTo(0,document.body.scrollHeight);
    });
    
    
  });