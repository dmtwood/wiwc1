$(
    function (){

        //Small script to show the selected exercise and hide all others
        $('div').hide();
        $('#list').change(
            function(e){
                // strip oefX from oef part and assign the index to var nr
                let nr = $('#list').val().substring(3);
                //hide all divs
                $('div').hide();
                //but show div with tag attrib id="#oefX"
                $('#oef' + nr).show();

            }
        );

    }
);
