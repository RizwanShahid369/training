<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="User[email]" autofocus="" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="User[password]" value="" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="save" value="value1" type="checkbox">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" href="login" class="btn btn-lg btn-success btn-block" name="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>