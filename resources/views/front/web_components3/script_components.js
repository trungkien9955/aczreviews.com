function search() {
    $(document).ready(function() {
        $('#inputSearchAuto').keyup(function() {
            var txt = $(this).val();
            if(txt !== '') {
                $.ajax({
                    url: "web_components/fetch_test.php",
                    data: {search_key: txt},
                    dataType: "text",
                    method: "post",
                    success: function(data) {
                        $('#search_result').html(data);
                    }
                })
            }
            else {
                $('#search_result').html('');
            }
        })
    })

  
        
}