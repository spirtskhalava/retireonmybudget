@extends('layouts.default')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:community@retireonmybudget.com">community@retireonmybudget.com</a></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel:+18884427799">+1 888-442-7799 (888-ihappy9)</a></p>
              </div>

              <div class="mt-5">
                <a href="https://calendly.com/retireonmybudget/meeting" target="_blank">Click here</a> to schedule an online meeting 
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ url('send-contact') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script type="text/javascript">
      /**
    * PHP Email Form Validation - v2.3
    * URL: https://bootstrapmade.com/php-email-form/
    * Author: BootstrapMade.com
    */
    !(function($) {
      "use strict";

      $('form.php-email-form').submit(function(e) {
        e.preventDefault();
        
        var f = $(this).find('.form-group'),
          ferror = false,
          emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        f.children('input').each(function() { // run all inputs
         
          var i = $(this); // current input
          var rule = i.attr('data-rule');

          if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(':', 0);
            if (pos >= 0) {
              var exp = rule.substr(pos + 1, rule.length);
              rule = rule.substr(0, pos);
            } else {
              rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
              case 'required':
                if (i.val() === '') {
                  ferror = ierror = true;
                }
                break;

              case 'minlen':
                if (i.val().length < parseInt(exp)) {
                  ferror = ierror = true;
                }
                break;

              case 'email':
                if (!emailExp.test(i.val())) {
                  ferror = ierror = true;
                }
                break;

              case 'checked':
                if (! i.is(':checked')) {
                  ferror = ierror = true;
                }
                break;

              case 'regexp':
                exp = new RegExp(exp);
                if (!exp.test(i.val())) {
                  ferror = ierror = true;
                }
                break;
            }
            i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
          }
        });
        f.children('textarea').each(function() { // run all inputs

          var i = $(this); // current input
          var rule = i.attr('data-rule');

          if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(':', 0);
            if (pos >= 0) {
              var exp = rule.substr(pos + 1, rule.length);
              rule = rule.substr(0, pos);
            } else {
              rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
              case 'required':
                if (i.val() === '') {
                  ferror = ierror = true;
                }
                break;

              case 'minlen':
                if (i.val().length < parseInt(exp)) {
                  ferror = ierror = true;
                }
                break;
            }
            i.next('.validate').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
          }
        });
        if (ferror) return false;

        var this_form = $(this);
        var action = $(this).attr('action');

        if( ! action ) {
          this_form.find('.loading').slideUp();
          this_form.find('.error-message').slideDown().html('The form action property is not set!');
          return false;
        }
        
        this_form.find('.sent-message').slideUp();
        this_form.find('.error-message').slideUp();
        this_form.find('.loading').slideDown();

        if ( $(this).data('recaptcha-site-key') ) {
          var recaptcha_site_key = $(this).data('recaptcha-site-key');
          grecaptcha.ready(function() {
            grecaptcha.execute(recaptcha_site_key, {action: 'php_email_form_submit'}).then(function(token) {
              php_email_form_submit(this_form,action,this_form.serialize() + '&recaptcha-response=' + token);
            });
          });
        } else {
          php_email_form_submit(this_form,action,this_form.serialize());
        }
        
        return true;
      });

      function php_email_form_submit(this_form, action, data) {
        $.ajax({
          type: "POST",
          url: action,
          data: data,
          timeout: 40000
        }).done( function(msg){
          if (msg.trim() == 'OK') {
            this_form.find('.loading').slideUp();
            this_form.find('.sent-message').slideDown();
            this_form.find("input:not(input[type=submit]), textarea").val('');
          } else {
            this_form.find('.loading').slideUp();
            if(!msg) {
              msg = 'Form submission failed and no error message returned from: ' + action + '<br>';
            }
            this_form.find('.error-message').slideDown().html(msg);
          }
        }).fail( function(data){
          console.log(data);
          var error_msg = "Form submission failed!<br>";
          if(data.statusText || data.status) {
            error_msg += 'Status:';
            if(data.statusText) {
              error_msg += ' ' + data.statusText;
            }
            if(data.status) {
              error_msg += ' ' + data.status;
            }
            error_msg += '<br>';
          }
          if(data.responseText) {
            error_msg += data.responseText;
          }
          this_form.find('.loading').slideUp();
          this_form.find('.error-message').slideDown().html(error_msg);
        });
      }

    })(jQuery);

  </script>

@stop