<form class="query">
    <div class="form-group mb-3">
        <label for="">Server Url</label>
        <input type="text" class="form-control" id="server" value="http://localhost:8000/query">
        <div class="text-muted help-text small">If you are using our server, use
            https://enablecors.com/query</div>
    </div>
    <div class="form-group mb-3">
        <label for="">Url to Call</label>
        <input type="text" class="form-control" id="url" value="http://localhost:9000/test">
        <div class="text-muted help-text small">Assuming you are running in local and trying to test the
            json. If not, please provide real url</div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group mb-3">
                <label for="">Request Headers</label>
                <textarea class="form-control" id="requestHeaders"
                    rows="5">{"Authorization":"Bearer dummyjwttoken"}</textarea>
                <div class="help-text small"><a href="https://jsonlint.com/" target="_blank">Validate JSON Here</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group mb-3">
                <label for="">Request Payload</label>
                <textarea class="form-control" rows="5"
                    id="requestPayload">{"username": "dummyusername","password": "dummypassword"}</textarea>
                <div class="help-text text-muted small">For POST and PUT Request <a href="https://jsonlint.com/"
                        target="_blank">Validate JSON Here</a></div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="row">
                <div class="col-12 mb-2">
                <label for="">Method</label>
            <select id="method" class="form-select">
                <option value="GET">GET</option>
                <option value="POST">POST</option>
                <option value="PUT">PUT</option>
                <option value="DELETE">DELETE</option>
            </select>
                </div>
                <div class="col-12">
                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="base64">
  <label class="form-check-label" for="base64">
    Response as base64
  </label>
</div>
                </div>
            </div>
           
        </div>
        <div class="col-12 col-sm-6">
            <button class="btn btn-primary float-end mt-4 btn-submit" type="submit">Submit</button>
        </div>
    </div>
</form>
<div>
<div class="alert alert-warning mt-3" role="alert">For DELETE request, append the query parameter to url: Example: http://localhost:9000/test?user_id=1</div>
</div>
<div>
<h5 class="mt-5">To Test HTML:</h5>
<p>Replace Url to Call with below url and set method to <strong>GET</strong></p>
<div class="alert alert-primary" role="alert">https://example.com/</div>

<h5 class="mt-5">To Test Image:</h5>
<p>Replace Url to Call with below url and set method to <strong>GET</strong></p>
<p>Check Response as base64</p>
<div class="alert alert-primary" role="alert">https://picsum.photos/200/300.jpg</div>

</div>