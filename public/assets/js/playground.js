jQuery(function () {
    if (!jQuery('form.query')) {
        return;
    }
    jQuery("form.query").on('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();
        const url = jQuery("#url").val(); // The url you want to call
        const server = jQuery("#server").val(); // The url this application is running. If you use our server, https://enablecors.com
        const requestHeaders = { // Request headers that need to be passed. 
            "Authorization": "Bearer dummyjwttokenhere",
        }
        const params = {
            url: btoa(url), // convert your url to base64
            requestHeaders: btoa(JSON.stringify(requestHeaders)), // convert your headers to base64
            base64: jQuery("#base64").is(":checked") // If you want the response as base64. Suitable for images
        }
        const queryParams = jQuery.param(params);

        const payload = jQuery("#requestPayload").val() ? JSON.parse(jQuery("#requestPayload").val()) : {};
        const btnSubmit = jQuery(this).find('btn-sbmit');
        btnSubmit.prop('disabled', true);
        jQuery.ajax({
            url: `${server}?${queryParams}`,
            method: jQuery('#method').val(), // define the method. Accepted are GET, POST, PUT, DELETE
            data: { payload: payload }, // use for POST and PUT requests
            success: function (response) {
                console.log(response);
            },
            error: function (err) {
                console.log(err)
            },
            complete: function () {
                btnSubmit.prop('disabled', false);
                alert("Open console to view output");
            }
        })
    });
});


jQuery(function () {
    if (!jQuery('form.mock').length) {
        return;
    }
    jQuery("form.mock").on('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();
        const server = jQuery("#server").val();

        const params = {
            statusCode: jQuery("#statusCode").val(),
            responseHeaders: jQuery("#responseHeaders").val()?btoa(jQuery("#responseHeaders").val()):'',
          }
        const queryParams = jQuery.param(params);

        jQuery.ajax({
            url: `${server}?${queryParams}`,
            method: jQuery('#method').val(),
            data: { expected: jQuery("#responsePayload").val()},
            success: function (response) {
              console.log(response);
            },
            error: function (err) {
                console.log(err)
            },
            complete: function () {

            }
        })
    });

});

jQuery(function () {
    if (!jQuery('#statusCode').length) {
        return;
    }
    jQuery.ajax({
        url: window.webapp.base + '/assets/json/status-codes.json',
        success: function (res) {
            const options = res.filter(item => !item.code.includes('xx'));
            options.forEach((item) => item.codeAsInt = parseInt(item.code));
            options.sort(function (a, b) {
                return (a.codeAsInt > b.codeAsInt) ? 1 : -1;
            });
            let option$ = '';
            options.forEach((option) => {
                option$ += '<option value="' + option.code + '"';
                option$ += (option.codeAsInt === 200) ? 'selected' : '';
                option$ += '>' + option.code + ' (' + option.phrase + ')</option>';
            });
            jQuery("#statusCode").append(option$);
        }
    });

});