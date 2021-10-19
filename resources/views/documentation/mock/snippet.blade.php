const server = jQuery("#server").val(); // The url this application is running. If you use our server, https://enablecors.com
const params = {
statusCode: jQuery("#statusCode").val(), // Your expected status code
responseHeaders: jQuery("#responseHeaders").val()?btoa(jQuery("#responseHeaders").val()):'', // Response headers. Be specific on Content-Type
}
const queryParams = jQuery.param(params);
jQuery.ajax({
    url: `${server}?${queryParams}`,
    method: jQuery('#method').val(),
    data: { expected: jQuery("#responsePayload").val()}, // Your expected result
    success: function (response) {
        console.log(response)
    },
    error: function (err) {
        console.log(err)
    },
    complete: function () {

    }
})