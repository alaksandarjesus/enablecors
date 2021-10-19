<form class="mock">
    <div class="form-group mb-3">
        <label for="">Server Url</label>
        <input type="text" class="form-control" id="server" value="http://localhost:8000/mock">
        <div class="text-muted help-text small">If you are using our server, use
            https://enablecors.com/mock</div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group mb-3">
                <label for="">Response Headers</label>
                <textarea class="form-control" id="responseHeaders"
                    rows="5">{"Content-Type": "application/json","X-Header-One": "Header Value","X-Header-Two": "Header Value"}</textarea>
                <div class="help-text small"><a href="https://jsonlint.com/" target="_blank">Validate JSON Here</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group mb-3">
                <label for="">Resonse Payload</label>
                <textarea class="form-control" rows="5"
                    id="responsePayload">{"username": "dummyusername","password": "dummypassword"}</textarea>
                <div class="help-text text-muted small">For POST and PUT Request <a href="https://jsonlint.com/"
                        target="_blank">Validate JSON Here</a></div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="">Method</label>
                        <select id="method" class="form-select">
                            <option value="GET">GET</option>
                            <option value="POST">POST</option>
                            <option value="PUT">PUT</option>
                            <option value="DELETE">DELETE</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="">Status Code</label>
                        <select name="statusCode" id="statusCode" class="form-select"></select>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-6">
            <button class="btn btn-primary float-end mt-4 btn-submit" type="submit">Submit</button>
        </div>
    </div>
</form>