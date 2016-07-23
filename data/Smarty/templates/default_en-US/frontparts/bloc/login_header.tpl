<script type="text/javascript">//<![CDATA[
    $(function(){
        var $login_email = $('#header_login_area input[name=login_email]');

        if (!$login_email.val()) {
            $login_email
                .val('E-mail address')
                .css('color', '#AAA');
        }

        $login_email
            .focus(function() {
                if ($(this).val() == 'E-mail address') {
                    $(this)
                        .val('')
                        .css('color', '#000');
                }
            })
            .blur(function() {
                if (!$(this).val()) {
                    $(this)
                        .val('E-mail address')
                        .css('color', '#AAA');
                }
            });

        $('#header_login_form').submit(function() {
            if (!$login_email.val()
                || $login_email.val() == 'E-mail address') {
                if ($('#header_login_area input[name=login_pass]').val()) {
                    alert('Enter your e-mail address and password.');
                }
                return false;
            }
            return true;
        });
    });
//]]></script>
<div class="block_outer" style="width:86.7%;margin-right:0px;">
    <div id="header_login_area" class="clearfix" style="background-color:#f8f8f8;border-width: 0px;">
        <form class="navbar-form navbar-right" role="search" style="margin-top:0px;margin-bottom: 0px;">
            <div class="form-group" style="background-color: #e9e9e9;height:30px;width: 1px;">

            </div>
            <div class="form-group" style="padding:0px 10px;">
                <input type="text" class="form-control" name="email address" placeholder="email address" style="height: 25px;font-size:12px">
            </div>
            <div class="form-group" style="background-color: #e9e9e9;height:30px;width: 1px;">

            </div>

            <div class="form-group" style="padding:0px 10px;">
                <input type="text" class="form-control" name="password" placeholder="password" style="height: 25px;font-size:12px;">
            </div>
            <div class="form-group" style="background-color: #e9e9e9;height:30px;width: 1px;margin-right:10px;">

            </div>
            <button type="submit" class="btn btn-default" style="height:25px;font-size:12px;padding-top:3px">Log In</button>
            <div class="form-group" style="background-color: #e9e9e9;height:30px;width: 1px;margin:0px 10px;">

            </div>
            <button type="submit" class="btn btn-default" style="height:25px;font-size:12px;padding-top: 3px;">Sign Up</button>
            <div class="form-group" style="background-color: #e9e9e9;height:30px;width: 1px;margin:0px 10px;">

            </div>
        </form>
    </div>
</div>
