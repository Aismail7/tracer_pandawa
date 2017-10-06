    @extends('layouts.theme')
    @section('main')
            <div id="loginbox">            
                <form id="loginform" class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                    <div class="control-group normal_text"> <h3><img src="{{asset('matrix/img/logo.png')}}" alt="Logo" /></h3></div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="username"  placeholder="Username" />
                            @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        
                        </div>
                    </div>
                    
                    <div class="form-actions">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!--<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
                        <span class="pull-right">

                        <button type="submit" class="btn btn-primary">
                                        Login
                        </button>
                        </span>
                    </div>
                </form>

            </div>
    @endsection