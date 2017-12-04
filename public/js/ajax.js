
function fetch_city(val)

{

    $.ajax({

        type: 'post',

        url: '/clientsinfo/fetch',

        data: {

            get_province: val

        },

        success: function (response) {

            document.getElementById("city").innerHTML = response;

        }

    });

}

