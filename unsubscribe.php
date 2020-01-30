<!DOCTYPE html>
<html lang="en">

<head>
        <title>Unsubscribe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="app/desktop/css/stylee67d.css?v=1.3">
    </head>
    <body>
        <div class="unsubscribe_sec">
            <div class="cstm_container">
                <h2 class="unsbscrb_hdng">Unsubscribe</h2>
                <form method="POST" action="javascript:void(0)" id="post_unsubscribe">

                    <div class="form-group">
                        <input type="email" class="form-control validate email_input" id="email" placeholder="Please enter your email" name="email">
                        <div class="invalid-feedback">Please enter your email</div>
                    </div>
                    <button type="submit" id="unsubscribe_btn" class="btn btn-primary sbmt_btn">Submit</button>
                </form>
                <div class="alert_box">
                    <div class="alert alert-success alert_msg" style="display: none;">
                        <strong>Success!</strong> Unsubscribed successfully.
                    </div>
                    <div class="alert alert-info alert_msg" style="display: none;">
                        <strong>Info!</strong> Already unsubscribed.
                    </div>
                    <div class="alert alert-danger alert_msg" style="display: none;">
                        <strong>Oops!</strong> Something went wrong.
                    </div>
                </div>
            </div>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // var valid_check = false;
                $('#unsubscribe_btn').click(function() {
                    $('.alert').hide();
                    // valid_check = true;
                    // var name = $('#name').val();
                    var email = $('#email').val();
                    if (email != '') {
                        $('.invalid-feedback').fadeOut();
                        $.ajax({
                            type: "POST",
                            url: "post_unsubscribe.php",
                            data: {email:email},
                            success: function(response) {
                                var result = JSON.parse(response);
                                $('.alert-'+result.status).show();
                                setTimeout(function(){
                                    $('.alert').hide();
                                }, 5000);
                            }
                        });
                    }
                    else{
                        $('#email').parent().children('.invalid-feedback').fadeIn();
                      }
                });

              });
        </script>
    </body>
</html>
