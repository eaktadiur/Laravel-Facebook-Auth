
{{ HTML::style('css/bootstrap.min.css') }}
<link rel="stylesheet" type="text/css" href="css/zocial.css" />
<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                 {{ Form::open(array('route' => array('user-sign-in-post'))) }} 
                 <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        @if($errors->has('password'))
                        {{ $errors->first('password') }}
                        @endif
                    </div>
                    <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="Login">

                </fieldset>
                {{ Form::close() }}
            </div>
        </div>
        <div><a href="fbauth" class="zocial facebook">Log in with Facebook</a></div>
    </div>          
</div>
</div>

