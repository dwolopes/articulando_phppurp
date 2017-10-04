$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'nome'              : $('input[name=nome]').val(),
            'email'             : $('input[name=email]').val(),
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'armazenamento.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true,

            beforeSend: function(){
            //Aqui adicionas o loader
                $("#divCorpo").html("<center><img class='img-responsive' width='10' src='img/loading.gif'></center>");
            }
        })
            // using the done promise callback
            .done(function(data) {

                //console.log(data);
                // log data to the console so we can see
                //console.log(data);

                if(data.success == true){
                    $("#obrigado").html("<br><center><img id='img' class='img-responsive' width='400' src='img/PopAgradecimento.png'/></center>");
                } 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'nome'              : $('input[name=nome_rodape]').val(),
            'email'             : $('input[name=email_rodape]').val(),
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'armazenamento.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true,

            beforeSend: function(){
            //Aqui adicionas o loader
                $("#divCorpo").html("<center><img class='img-responsive' width='10' src='img/loading.gif'></center>");
            }
        })

            // using the done promise callback
            .done(function(data) {
                // log data to the console so we can see
                //console.log(data);

                if(data.success == true){
                    $("#obrigado_rodape").html("<br><center><img id='img' class='img-responsive' width='400' src='img/PopAgradecimento.png'/></center>");
                } 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'nome'              : $('input[name=nome_rodape1]').val(),
            'email'             : $('input[name=email_rodape1]').val(),
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'armazenamento.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true,

            beforeSend: function(){
            //Aqui adicionas o loader
                $("#divCorpo").html("<center><img class='img-responsive' width='10' src='img/loading.gif'></center>");
            }
        })

            // using the done promise callback
            .done(function(data) {
                // log data to the console so we can see
                //console.log(data);

                if(data.success == true){
                    $("#obrigado_rodape1").html("<br><center><img id='img' class='img-responsive' width='400' src='img/PopAgradecimento.png'/></center>");
                } 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});