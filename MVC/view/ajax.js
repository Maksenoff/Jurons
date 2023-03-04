
    $(document).ready(function(){
      $("button").click(function() {
        $("form").submit(function() {
            event.preventDefault();
            var infra = $("#infra").val();
            var td4 = $("#td4").val();

            $(".form-message").load("../view/mailtest.php", { //AJAX
                infra: infra,
                td4: td4
         
            });
          });
        }); 
    });   