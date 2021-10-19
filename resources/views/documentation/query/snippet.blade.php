const url = jQuery("#" + urltocall).val(); // The url you want to call
const serverurl = jQuery("#serverurl").val(); // The url this application is running. If you use our server, https://enablecors.com
const requestHeaders = { // Request headers that need to be passed. 
    "Authorization": "Bearer dummyjwttokenhere",
}
const params = {
    url: btoa(url), // convert your url to base64
    requestHeaders: btoa(JSON.stringify(requestHeaders)), // convert your headers to base64
    base64: !!base64 // If you want the response as base64. Suitable for images
}
const queryParams = jQuery.param(params);

const payload = { // payload to be used on post and put request
                "username": "dummyusername",
                "password": "dummypassword"
            }

jQuery.ajax({
    url: `${serverurl}?${queryParams}`,
    method: jQuery('#method').val(), // define the method. Accepted are GET, POST, PUT, DELETE
    data: {payload: payload}, // use for POST and PUT requests
    success: function (response) {
        console.log(response);
    },
    error: function (err) {
        console.log(err)
    },
    complete: function () {

    }
})
                        