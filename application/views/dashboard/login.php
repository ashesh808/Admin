<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url(); ?>login/login_process" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input id="email" name="email" class="form-control" placeholder="E-mail" type="email"
                                       autofocus>
                            </div>
                            <div class="form-group">
                                <input id="password" name="password" class="form-control" placeholder="Password"
                                       type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

