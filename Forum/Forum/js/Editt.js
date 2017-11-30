$( document ).ready(function() {
    $( "tbody").on( "click","td:first-child a", function() {
    var id = this.id;
    id = id.replace('edit' , '');

    var Title = $('#Title' + id).text();
    var Content = $('#Comment' + id).text();

  window.location = "http://" + window.location.hostname + "/Forum/createnewpost.php?title=" + Title + "&Content=" +Content+ "&ID=" +id+ "";
  });

    $( "tbody").on( "click","td:nth-child(3)", function() {
      var id = this.id;
      var Title = $('#Title' + id).text();
      var Content = $('#Comment' + id).text();
      var themenum = id;

      window.location = "http://" + window.location.hostname + "/Forum/ThemeUnderPage.php?title=" + Title + "&Content=" +Content+ "&ID=" +id +"" ;



  });



});
